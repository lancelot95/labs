<?php

namespace App\Http\Controllers;

use App\Service;
use App\Acceuil;
use App\Project;
use App\World;
use App\worldright;
use App\Contact;
use App\Icon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acceuils = Acceuil::all()->first();
        $services = Service::paginate(9);
        // $worlds = World::all()->reverse()->take(3);
        // $worlds = World::take(3)->get();
        $worlds = World::take(3)->get();
        $test = World::all()->reverse()->take(3);
        
        $contacts = Contact::all();
        $acceuils = Acceuil::all();
        $icons = Icon::all();
        // $worlds = World::();
        return view('service',compact('acceuils','acceuils','services','projects','worlds','test','contacts','icons'));
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view ('edit.service_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
