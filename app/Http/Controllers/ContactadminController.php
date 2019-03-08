<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

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
    public function edit($id)
    {
        $contact = Contact::all();
       
        return view('contact.contact_edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(StoreContactadmin $request,Contact $contact)
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
    public function mail (StoreContactadmin $request){
        event(new MailEvent($request));
    
        return redirect()->back();
    }
}
