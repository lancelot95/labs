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
use App\Commentaire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;
use App\Http\Requests\StoreContactadmin;
use App\Http\Requests\StoreNewsletter;
use App\Events\NewsletterEvent;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $acceuils = Acceuil::all();
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactadmin $request)
    {
        $newcommentaire = New Commentaire ;
        $newcommentaire->name = $request ->name;
        $newcommentaire->message = $request ->message;
        // dd($newservice);
        $newcommentaire->save();
        $commentaires = commentaire::all();
        $acceuils = Acceuil::all();
        $instagrams = Instagram::all();
        $titres = Titre::all();
        $articles = Article::all();
        $categories = Categorie::all();
        $tags = Tag::all();
       
        
        return view('blog',compact('acceuils','instagrams','titres','articles','categories','tags','commentaires'));
       
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
        // dd($article);
        $articles = Article::all();
        $titres = Titre::all();
        $instagrams = Instagram::all();
        // $acceuils = Acceuil::all()->first();
        // $categorie = Categorie::where('id',$id)->first();
        $categories = Categorie::all();
        $tags = Tag::all();
        // $tag = Tag::where('id',$id)->first();
        $categorie = Categorie::where('id',$id)->first();
        $commentaires = Commentaire::all();
        $acceuils = Acceuil::all();
        
        return view('blog-post',compact('article','articles','titres','instagrams','acceuils','categorie', 'tags', 'categories','commentaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        // return view('blog.commentaire_edit',compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commentaire $commentaires)
    {
        $commentaire->réponse = $request->reponse;
        $commentaire->save();
        $commentaires = commentaire::all();
        return view('blog',compact("commentaires"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commentaire = Commentaire::where('id',$id)->first();
        $commentaire->delete();
        $commentaires = Commentaire::all();
        
        return view('blog.affichagecommentaire', compact('commentaires'));
    }
   
    public function affichage()
    {
        $commentaires = Commentaire::all();
        return view('blog.affichagecommentaire', compact('commentaires'));
        
    }
    public function validation($id)
    {
        $commentaire = Commentaire::where('id',$id)->first();
        // dd($commentaires);
        $commentaire->action = 'validate';
        
        $commentaire->save();
        $commentaires = Commentaire::all();
        return view('blog.affichagecommentaire', compact('commentaires'));
        
    }
    public function newsletter (StoreNewsletter $request)
    {
        event(new NewsletterEvent($request));
    
        return redirect()->back();
    }
    public function search(Request $request)
    {
        // dd($request);
       $keyword = $request->input('inputsearch');
       $articles = Article::where('titre','LIKE','%'.$keyword.'%')->get();
       
        $acceuils = Acceuil::all()->first();
        $instagrams = Instagram::all();
        $titres = Titre::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $acceuils = Acceuil::all();
       
        
        return view('blog',compact('acceuils','instagrams','titres','articles','categories','tags'));
    }

}
