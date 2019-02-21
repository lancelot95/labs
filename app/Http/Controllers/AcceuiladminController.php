<?php

namespace App\Http\Controllers;
use App\Acceuil;
use Illuminate\Http\Request;
use App\Carousel;
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
        // $services = Service::take(9)->get();
        // $services_r = Service::all()->random(3);
        // $testimonials = Testimonial::all();
        // $teams = Team::all();
        return view('edit.acceuil_index', compact('acceuils', 'carou'));
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
    public function edit(Acceuil $acceuils)
    {
        
        return view('edit.acceuil_edit',compact('acceuils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aceuil $aceuils)
    {
        $acceuils->titrecarousel = $request->titrecarousel;
        $acceuils->titrelabsworld = $request->titrelabsworld;
        $acceuils->titrevertworld = $request->titrevertworld;
        $acceuils->titreword = $request->titreword;
        $acceuils->textelabsworld = $request->textelabsworld;
        $acceuils->titreclient = $request->titreclient;
        $acceuils->titreservice = $request->titreservice;
        $acceuils->titreteam = $request->titreteam;
        $acceuils->titrestandout = $request->titrestandout;
        $acceuils->textestandout = $request->textestandout;
        $acceuils->update();
        $acceuils = Acceuil::all()->first();
        return view('edit.acceuil_index', compact('acceuils'));
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
