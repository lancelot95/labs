<?php

namespace App\Http\Controllers;

use App\Acceuil;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $acceuils = Acceuil::all();
        // return view('Admin.Acceuils.acceuil_index',compact('acceuils'));
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
     * @param  \App\Acceuil  $acceuil
     * @return \Illuminate\Http\Response
     */
    public function show(Acceuil $acceuil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acceuil  $acceuil
     * @return \Illuminate\Http\Response
     */
    public function edit(Acceuil $acceuil)
    {
        // return view('Admin.Acceuils.acceuil_create',compact('acceuil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acceuil  $acceuil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acceuil $acceuil)
    {
        // $acceuil->titrecarousel = $request->titrecarousel;
        // $acceuil->save();
        // $acceuils = Acceuil::all();
        // return view('home',compact("acceuils"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acceuil  $acceuil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acceuil $acceuil)
    {
        //
    }
}
