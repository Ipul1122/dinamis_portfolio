<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillUserController extends Controller
{
    //
    public function showSkills()
{
    $skills = Skill::all();
    return view('user.pages.skills', compact('skills'));
}

}
