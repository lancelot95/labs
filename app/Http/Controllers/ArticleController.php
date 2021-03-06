<?php

namespace App\Http\Controllers;

use App\Article;
use App\tag;
use App\Alessio;
use App\categorie;
use Storage;
// use Image;
use App\User;
use App\Services\Intervention;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
         $tags = Tag::all();
        $categories = Categorie::all();
        $users = User::all();
        return view('article.article_index',compact('articles','tags','categories','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        $users = User::all();
        return view('article.article_create',compact('tags','categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        
        $newarticle = new Article;
        $newalessio = new Alessio;
        $newtag = new Tag;
        // $newarticle->img = $request->img->store('', 'image');
       
        // dd($request);
        $newarticle->img = $request->img->store('','image');
        $newarticle->titre =$request->titre;
        $newarticle->texte =$request->texte;
        $newarticle->categorie_id =$request->categorie_id;
        $newarticle->user_id =$request->user_id;
        $newarticle->save();
        $tag = Tag::find($request->tags);
        $newarticle->tags()->attach($tag);
        //  dd($tag);
        $articles = Article::all();
        $tags = Tag::all();
        $users = User::all();
        return view('article.article_index',compact('articles','tags','users'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id) // article 
    {
        // $article = Article::where('id', $id)->first();
        $article = Article::where('id', $id)->first();
        $categorie = Categorie::where('id',$id)->first();
        $user = User::where('id',$id)->first();
        return view('article.article_show',compact('article','categorie','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $test = Article::find($id);
        $tags = Tag::all();
        
        // $article = Article::first();
        return view('article.article_edit',compact("test","tags"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->img = $request->img;
        $article->titre = $request ->titre;
        $article->texte = $request->texte;
        $tag = Tag::all();
        $article->tag()->detach($tag);
        $tag = Tag::find($request->tags);
        $article->tag()->attach($tag);
        $article->save();
        $articles = Article::all();
        $tags = Tag::all();

        return view('article.article_index',compact('articles','tags'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        Alessio::where('article_id','LIKE', '%'.$id.'%')->delete();
        $article = Article::where('id',$id)->first();
        $article->delete();
        $articles = Article::all();
        
        return view('article.article_index',compact('articles'));
    }
}
