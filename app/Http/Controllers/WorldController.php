<?php

namespace App\Http\Controllers;

use App\World;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worlds = World::all();
        return view('world.world_index',compact('worlds'));
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
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = World::where('id', $id)->first();
        return view('world.world_edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $world = World::where('id', $id)->first();
        $world->titre = $request->titre;
        $world->texte = $request->texte;
        $world->logo = $request->logo;
        $world->save();
        $worlds = World::all();
       
        
        return view('world.world_index',compact('worlds'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $world = World::where('id',$id)->first();
        $world->delete();
        $worlds = World::all();
        
        return view('world.world_index',compact('worlds'));
    }
}
