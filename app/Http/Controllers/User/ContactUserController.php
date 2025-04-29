<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUserController extends Controller
{
    public function index()
    {
        return view('user.pages.contact');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'telp' => 'required|string|max:20',
        'kerjasama' => 'required|string',
    ]);

    // Simpan ke database
    Contact::create($request->all());

    // Redirect ke WhatsApp setelah sukses
    $whatsappNumber = '6285693672730'; // Ganti dengan nomor tujuan WA kamu
    $nama = $request->input('nama');
    $telp = '+6285693672730' . ltrim($request->input('telp'), '0');
    $kerjasama = $request->input('kerjasama');

    $message = rawurlencode("Halo, saya *$nama* (WA: $telp) ingin bertanya atau bekerja sama:\n\n$kerjasama");
    $whatsappLink = "https://wa.me/$whatsappNumber?text=$message";

    return redirect($whatsappLink)->with('success', 'Pesan berhasil dikirim! Akan kami response dalam waktu tertentu<');
}
}
