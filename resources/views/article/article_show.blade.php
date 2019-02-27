@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<a class="btn btn bg-blue" href="{{route('article.index')}}">Page précédente</a>
@stop

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="{{$article->img}}" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                         
                    <h2 class="post-title">{{$article->titre}}</h2>
                    <div class="post-meta">
                    @foreach ($tags as $tag)
                        <a href="">{{$tag->hashtags}}</a>&nbsp;
                    
                    @endforeach
                    </div>
                        <div class="post-meta">
                            
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{$article->texte}}</p>
                    </div>
                </div>    
                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
                <a class="btn btn bg-blue" href="{{route('article.edit',['articles'=>$article->id])}}">Editer</a>
                
                    <form action="{{route('article.destroy',['id'=>$article->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn bg-danger text-white" type="submit">Delete</button>
                    </form>
                
            </div>            
            
        </div>
    </div>
@stop