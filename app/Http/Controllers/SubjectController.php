<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SubjectController extends Controller
{
    public function index()
    {

        return Inertia::render('Dashboard/Subjects', [
            'subjects' => Subject::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|max:2048', // máximo 2MB
        ]);

        $path = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('subjects', 'public');
        }

        Subject::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Asignatura creada correctamente.');
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($subject->image_path) {
                Storage::disk('public')->delete($subject->image_path);
            }
            $subject->image_path = $request->file('image')->store('subjects', 'public');
        }

        $subject->update($request->only('name', 'description'));

        return redirect()->route('subjects.index');
    }

    public function destroy(Subject $subject)
    {
        if ($subject->image_path) {
            Storage::disk('public')->delete($subject->image_path);
        }

        $subject->delete();

        return redirect()->route('subjects.index');
    }
}
