<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    // Show all contacts

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index')->withContacts($contacts);
    }
    // Create new contacts

    public function create()
    {
        return view('contacts.create');
    }

    // Store contacts
    public function store(Request $request) {
        $this->vlaidate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);
        $input = $request::all();
        Contact::create($input);
        return redirect()->back();
    }

    // Show specific contacts
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.update')->withContact($contact);
    }

    // Edit Contact
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.edit')->withContact($contact);
    }

    // Update contact
    public function update($id, Request $request)
    {
        $contact = Contact::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $input = $request->all();
        $contact->fill($input)->save();

        return redirect()->back();
    }

    // Destroy unwanted contacts
    public function destroy($id) {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
