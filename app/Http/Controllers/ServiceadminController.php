<?php

namespace App\Http\Controllers;

use App\Acceuil;
use App\Service;
use App\Icon;
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
        $services = Service::all();
        // $services2 = Service::all();
        // $projects = Project::all();
        // $projects2 = Project::all();
        
        return view('service.service_index',compact('services','icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        return view('service.service_create',compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newservice = new Service;
        $newservice->titre = $request ->titre;
        $newservice->texte = $request ->texte;
        $newservice->icon_id = $request ->icon_id;
        // dd($newservice);
        $newservice->save();
        $services = Service::all();
        
       
        return view('service.service_index',compact('services'));
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
    public function edit($id)
    {   
        
        $test = Service::where('id', $id)->first();
        $icons = Icon::all();
        return view('service.service_edit',compact('test','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::where('id', $id)->first();
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service->icon_id = $request->icon_id;
        $service->save();

        

        // $acceuils = Acceuil::all();
        $services = Service::all();
        // $projects = Project::all();
        // $worlds = World::take(3)->get();
        // $worldrights = Worldright::take(3)->get();
        
        return view('service.service_index',compact('services'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::where('id',$id)->first();
        $service->delete();
        $services = Service::all();
        return view('service.service_index',compact('services'));
    }
    
}
