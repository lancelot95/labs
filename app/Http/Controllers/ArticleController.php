<?php

namespace App\Http\Controllers;

use App\Article;
use App\tag;
use App\Alessio;
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
        return view('article.article_index',compact('articles','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('article.article_create',compact('articles','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newarticle = new Article;
        $newarticle->img = $request->img;
        $newarticle->titre =$request->titre;
        $newarticle->texte =$request->texte;
        $newarticle->tag_id =$request->tag_id;
        $newarticle->update();
        // dd($request);
        $articles = Article::all();
        $tag = Tag::all();
        // dd($articles);
        return view('article.article_index',compact('articles','tags'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
         $tag = Tag::all();
        
        return view('article.article_show',compact('article','tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $test = Article::first();
        $tag = Tag::all(); 
        return view('article.article_edit',compact("article","test","tag"));
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
        $article = Article::first();
        $article->img = $request->img;
        $article->titre = $request ->titre;
        $article->texte = $request->texte;
        $article->save();
        $tag = Tag::first();
        $tag->hashtags = $request->hashtags;
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
        $article = Article::where('id',$id)->first();
        $article->delete();
        $articles = Article::all();
        
        return view('article.article_index',compact('articles'));
    }
}
