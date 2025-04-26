<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScientExperience;

class ScientExperienceController extends Controller
{
    public function index()
    {
        $scient = ScientExperience::latest()->get();

        return view('admin.pages.experience.scient.index' , compact('scient'));
    }

    public function userScient()
    {

        $scient = ScientExperience::latest()->paginate(5);

        return view('user.pages.experience.scient', compact('scient'));
    }

    public function create()
    {
        return view('admin.pages.experience.scient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        ScientExperience::create([
            'year' => $request->year,
            'title' => $request->title,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('admin.pages.experience.scient.index')-with('success', 'Scient experience created successfully.');
    }

    public function edit($id)
    {
        $scient = ScientExperience::findOrFail($id);

        return view('admin.pages.experience.scient.edit', compact('scient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
        ]);

        $scient = ScientExperience::findOrFail($id);
        $scient->update([
            'year' => $request->year,
            'title' => $request->title,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('admin.pages.experience.scient.index')->with('success', 'Scient experience updated successfully.');
    }
    public function destroy($id)
    {
        $scient = ScientExperience::findOrFail($id);
        $scient->delete();

        return redirect()->route('admin.pages.experience.scient.index')->with('success', 'Scient experience deleted successfully.');

    }   
}
