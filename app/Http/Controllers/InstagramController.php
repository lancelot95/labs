<?php

namespace App\Http\Controllers;

use App\Instagram;
use App\blog;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instagrams = Instagram::all();
        
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
     * @param  \App\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function show(Instagram $instagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Instagram $instagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instagram $instagram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instagram $instagram)
    {
        //
    }
}
