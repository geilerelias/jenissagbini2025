<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Carbon\Carbon;

class TrackDailyVisits
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $url = $request->path(); // Puedes usar ->fullUrl() si necesitas los query params
        $userAgent = $request->userAgent();
        $today = Carbon::today();

        // Verifica si ya existe una visita hoy
        $visit = Visit::where('ip_address', $ip)
            ->where('url', $url)
            ->whereDate('visited_at', $today)
            ->first();

        // Si no existe, la registramos
        if (!$visit) {
            $visit = Visit::create([
                'ip_address' => $ip,
                'url' => $url,
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);

            // Guardamos en sesión para actualizar luego el tiempo de salida
            session(['visit_id' => $visit->id]);
        }

        return $next($request);
    }

    public function terminate($request, $response)
    {
        if (session()->has('visit_id')) {
            Visit::where('id', session('visit_id'))
                ->update(['left_at' => now()]);
        }
    }
}


