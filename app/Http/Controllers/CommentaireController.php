<?php

namespace App\Http\Controllers;

use App\commentaire;
use App\blog;
use App\Http\Requests\StoreArticle;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function commentaire()
    // {
    //     $commentaires = Commentaire::all();
    //     return view('blog-post', compact('commentaires'));
    // }
    public function index()
    {

       $commentaires = Commentaire::all();
       return view('blog-post',compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('commentaire_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $newcommentaire = New Commentaire ;
        $newcommentaire->name = $request ->name;
        $newcommentaire->email = $request ->email;
        $newcommentaire->subject = $request ->subject;
        
        $newcommentaire->save();
        $commentaire = commentaire::all();
        
       
        return view('blog-post',compact('commentaire'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(commentaire $commentaire)
    {
        //
    }
}
