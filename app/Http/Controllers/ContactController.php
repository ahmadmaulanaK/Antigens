<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'DESC')->paginate(10);
        return view('contacts.index', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id); 
        return view('contact.edit', compact('contact')); 
    }
}
