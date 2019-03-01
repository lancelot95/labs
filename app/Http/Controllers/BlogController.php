<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Acceuil;
use App\Instagram;
use App\Titre;
use App\Article;
use App\blogpost;
use App\categorie;
use App\tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acceuils = Acceuil::all()->first();
        $instagrams = Instagram::all();
        $titres = Titre::all();
        $articles = Article::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('blog',compact('acceuils','instagrams','titres','articles','categories','tags'));
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
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $article = Article::where('id',$id)->first();
        $titres = Titre::all();
        $instagrams = Instagram::all();
        $acceuils = Acceuil::all()->first();
        $categorie = Categorie::where('id',$id)->first();
        // $categories = Categorie::all();
         $tag = Tag::where('id',$id)->first();
        return view('blog-post',compact('article','titres','instagrams','acceuils','categorie','tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
