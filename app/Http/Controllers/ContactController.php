<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'contact_name' => 'required|string|max:50',
            'contact_email' => 'required|email',
            'contact_title' => 'required|string|max:50',
            'contact_message' => 'required|string|max:250',
        ]);

        Contact::create([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_title' => $request->contact_title,
            'contact_message' => $request->contact_message
        ]);
        return redirect('/contact')->with('successForm', 'Thank you for contacting us!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
