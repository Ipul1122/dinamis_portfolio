<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillAdminController extends Controller
{
    //
    public function index()
    {
        // Fetch all skills from the db
        $skills = Skill::all();
        return view('admin.pages.skills.index' , compact('skills'));
    }

    public function create()
    {
        return view('admin.pages.skills.create');
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new skill
        skill::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.skills.index')->with('success', 'Skill created successfully.');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.pages.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        // validasi request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // update skill
        $skill = Skill::findOrFail($id);
        $skill->update([
            'name'=> $request->name,
        ]);

        return redirect()->route('admin.skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted successfully.');

    }


}
