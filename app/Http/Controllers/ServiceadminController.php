<?php

namespace App\Http\Controllers;

use App\Acceuil;
use App\Project;
use App\World;
use App\worldright;
use App\Service;
use Illuminate\Http\Request;
class ServiceadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $acceuils = Acceuil::all()->first();
        $services = Service::paginate(7);
        $services2 = Service::all();

        
        return view('service.service_index',compact('services', 'services2'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Service $service)
    {
        
        $test = Service::first(); 
        return view('service.service_edit',compact('service', 'test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $service = Service::first();
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service->logo = $request->logo;
        $service->save();
        $acceuils = Acceuil::all()->first();
        $services = Service::paginate(7);
        $projects = Project::all();
        $worlds = World::take(3)->get();
        $worldrights = Worldright::take(3)->get();
        return view('service.service_index',compact('acceuils','services','projects','worlds','worldrights'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
