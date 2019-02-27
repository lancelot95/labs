@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
{{-- <a class="btn btn bg-blue" href="{{route('article.create')}}">Page Precedente</a> --}}
@stop

@section('content')

<div class="container">
        <div class="row">
            @foreach ($articles as $item)
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="{{$item->img}}" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                         
                    <h2 class="post-title">{{$item->titre}}</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{str_limit($item->texte, 300)}}</p>
                    
                        <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('article.show',['id'=>$item->id])}}">Read more</a> 
                    </div>
                </div>    
                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
            </div>            
            
            @endforeach
        </div>
    </div>
@stop
