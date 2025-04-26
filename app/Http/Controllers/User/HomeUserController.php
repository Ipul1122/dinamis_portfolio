<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function index()
{
    $home = \App\Models\Home::first();
    return view('user.pages.home', compact('home'));
}
}
