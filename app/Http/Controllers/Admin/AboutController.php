<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $educations = Education::all();  // Mengambil semua data tentang pendidikan
        return view('admin.pages.about.index', compact('educations'));
    }

    public function create()
    {   
        return view('admin.pages.about.create');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'year' => 'required',
            'institution' => 'required',
            'major' => 'required',
        ]);
    
        // Menyimpan data ke database
        Education::create([
            'year' => $request->year,
            'institution' => $request->institution,
            'major' => $request->major,
        ]);
    
        // Mengarahkan kembali dengan pesan sukses
        return redirect()->route('admin.about.index')->with('success', 'Data pendidikan berhasil ditambahkan.');
    }
    

    public function edit($id)
    {
        $educations = Education::findOrFail($id);
        return view('admin.pages.about.edit', compact('educations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required',
            'institution' => 'required',
            'major' => 'required',
        ]);

        $educations = Education::findOrFail($id);
        $educations->update([
            'year' => $request->year,
            'institution' => $request->institution,
            'major' => $request->major,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $educations = Education::findOrFail($id);
        $educations->delete();
        return redirect()->route('admin.about.index')->with('success', 'Data berhasil dihapus');
    }
}
