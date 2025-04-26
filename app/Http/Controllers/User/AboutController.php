<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Education;

class AboutController extends Controller
{
    public function index()
    {
        // Ambil semua data education diurutkan dari tahun terbaru ke terlama
        $educations = Education::orderBy('year', 'desc')->get();

        // Kirim ke view user/pages/about.blade.php
        return view('user.pages.about', [
            'educations' => $educations,
        ]);
    }
}
