<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkExperience;

class WorkExperienceController extends Controller
{
    public function index()
    {
        $works = WorkExperience::latest()->get();

        return view('admin.pages.experience.work.index', compact('works'));
    }

    public function userWork()
    {
        // Pagination 5 per halaman
        $works = WorkExperience::latest()->paginate(5);
    
        return view('user.pages.experience.work', compact('works'));
    }

    public function create()
    {
        return view('admin.pages.experience.work.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|string|max:255',
            'work_at' => 'required|string|max:255',
            'as' => 'required|string|max:255',
            'paragraph' => 'nullable|string',
            'list' => 'nullable|array',
        ]);

        $encodedList = $request->list !== null ? json_encode($request->list) : json_encode([]);

        WorkExperience::create([
            'year' => $request->year,
            'work_at' => $request->work_at,
            'as' => $request->as,
            'paragraph' => $request->paragraph ?? null,
            'list' => $encodedList,
        ]);

        return redirect()->route('admin.experience.work.index')->with('success', 'Work experience created successfully.');
    }

    public function edit($id)
    {
        $workExperience = WorkExperience::findOrFail($id);
        return view('admin.pages.experience.work.edit', compact('workExperience'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|string|max:255',
            'work_at' => 'required|string|max:255',
            'as' => 'required|string|max:255',
            'paragraph' => 'nullable|string',
            'list' => 'nullable|array',
        ]);

        $workExperience = WorkExperience::findOrFail($id);

        // Cek list, kalau null, ubah ke array kosong '[]'
        $encodedList = $request->list !== null ? json_encode($request->list) : json_encode([]);

        $workExperience->update([
            'year' => $request->year,
            'work_at' => $request->work_at,
            'as' => $request->as,
            'paragraph' => $request->paragraph ?? null,
            'list' => $encodedList,
        ]);

        return redirect()->route('admin.experience.work.index')->with('success', 'Work experience updated successfully.');
    }

    public function destroy($id)
    {
        $work = WorkExperience::findOrFail($id);
        $work->delete();

        return redirect()->route('admin.experience.work.index')->with('success', 'Data berhasil dihapus.');
    }
}
