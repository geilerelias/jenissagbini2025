<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use Inertia\Inertia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    public function index()
    {
        return Inertia::render('Statistics/Index');
    }

    public function stats()
    {
        // Visitas por día en últimos 7 días
        $daily = Visit::selectRaw('DATE(visited_at) as date, COUNT(*) as total')
            ->where('visited_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Visitas por semana (últimas 4)
        $weekly = Visit::selectRaw("YEARWEEK(visited_at, 1) as week, COUNT(*) as total")
            ->where('visited_at', '>=', now()->subWeeks(4))
            ->groupBy('week')
            ->get();

        // Visitas por mes (últimos 6)
        $monthly = Visit::selectRaw("DATE_FORMAT(visited_at, '%Y-%m') as month, COUNT(*) as total")
            ->where('visited_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->get();

        // IPs únicas
        $uniqueIps = Visit::distinct('ip_address')->count();

        // Duración promedio
        $avgDuration = Visit::selectRaw("AVG(TIMESTAMPDIFF(SECOND, visited_at, left_at)) as duration")
            ->whereNotNull('left_at')
            ->value('duration');

        return response()->json([
            'daily' => $daily,
            'weekly' => $weekly,
            'monthly' => $monthly,
            'unique_ips' => $uniqueIps,
            'avg_duration' => round($avgDuration),
        ]);
    }

    public function visitors()
    {
        $visitors = Visit::select('ip_address', DB::raw('COUNT(*) as total_visits'), DB::raw('MAX(visited_at) as last_visit'))
            ->groupBy('ip_address')
            ->orderByDesc('last_visit')
            ->limit(100)
            ->get();

        return response()->json($visitors);
    }
}

