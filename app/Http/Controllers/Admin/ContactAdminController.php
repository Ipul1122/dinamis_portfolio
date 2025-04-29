<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactAdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.pages.contact.index', compact('contacts'));
    }
}

