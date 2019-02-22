<?php

namespace App\Http\Controllers;

use App\Acceuil;
use App\Carousel;
use App\Service;
use App\Testimonial;
use App\Team;
use Illuminate\Http\Request;
class AcceuiladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carou = Carousel::all();
        $acceuils = Acceuil::all()->first();
       
        return view('edit.acceuil_index', compact('acceuils', 'carou'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carou = Carousel::all();
        return view('edit.acceuil_create',compact('carou'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newcarou = new Carousel;
        $newcarou->image_url = $request ->image_url;
        $newcarou->save();
        $carou = Carousel::all();
        $acceuils = Acceuil::first();  
       
        return view('edit.acceuil_index',compact('carou','acceuils'));
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
    public function edit(Acceuil $acceuil)
    {
        $test = Acceuil::first();
        return view('edit.acceuil_edit',compact('acceuil', 'test'));
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
        $acceuil = Acceuil::first();
        $acceuil->titrecarousel = $request->titrecarousel;
        $acceuil->titrelabsworld = $request->titrelabsworld;
        $acceuil->titrevertworld = $request->titrevertworld;
        $acceuil->titreword = $request->titreword;
        $acceuil->textelabsworld = $request->textelabsworld;
        $acceuil->titreclient = $request->titreclient;
        $acceuil->titreservice = $request->titreservice;
        $acceuil->titreteam = $request->titreteam;
        $acceuil->titrestandout = $request->titrestandout;
        $acceuil->textestandout = $request->textestandout;
      
        $acceuil->save();
        $acceuils = Acceuil::first();  
        $carou = Carousel::all();
        $services = Service::take(9)->get();
        $services_r = Service::all()->random(3);
        $testimonials = Testimonial::all();
        $teams = Team::all();

        return view('edit.acceuil_index', compact('acceuils', 'carou','services','services_r','testimonials','teams'));
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
