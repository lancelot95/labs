@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
<a class="btn btn bg-blue" href="{{route('article.create')}}">Créer un article</a>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                    @foreach ($articles as $item)
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
                        @foreach ($item->tag as $tag)
                            
                            <a href="">{{$tag->hashtags}}</a>&nbsp;
                        
                        @endforeach
                    </div>
                    {{-- <div class="post-meta">
                            @foreach ($item->categorie as $categorie)
                                
                            <a href="">{{$categorie->theme}}</a>&nbsp;
                            
                            @endforeach
                    </div> --}}
                        {{-- <div class="post-meta">
                           
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div> --}}
                        <p>{{str_limit($item->texte, 300)}}</p>
                    
                        <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('article.show',['id'=>$item->id])}}">Read more</a> 
                    </div>
                </div>    
                <!-- Pagination -->
               
                @endforeach
            </div>            
            
        </div>
    </div>
@stop
