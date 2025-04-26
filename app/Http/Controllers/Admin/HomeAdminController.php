<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeAdminController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('admin.pages.homeAdmin', compact('home'));
    }

    public function update(Request $request)
    {
        $home = Home::first(); // Ambil data pertama (asumsinya hanya ada 1)
        
        $data = $request->only(['nama', 'jurusan', 'paragraph']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $home->update($data);

        return redirect()->route('admin.home.index')->with('success', 'Data berhasil diperbarui!');
    }
}
