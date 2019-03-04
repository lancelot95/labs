<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactadminController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        // dd($contacts);
        return view('contact.contact_index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $test = Contact::all();
       
        return view('edit.acceuil_edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $contact = Acceuil::first();
        $contact ->contactus = $request ->contactus;
        $contact ->texte = $request ->texte;
        $contact ->mainoffice = $request ->mainoffice;
        $contact ->addresse = $request ->addresse;
        $contact ->phone = $request ->phone;
        $contact ->email = $request ->email;
        $contact->update();
        $contacts = Contact::all();  
        return view('contact.contact_index',compact('contacts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
    public function mail (Request $request){
        event(new MailEvent($request));
    
        return redirect()->back();
    }
}
