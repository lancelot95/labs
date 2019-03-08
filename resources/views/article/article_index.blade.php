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
                        <img src="{{Storage::disk('image')->url($item->img)}}" height="270" width="755" alt="">
                        <img src="{{$item->img}}" alt="">
                        {{-- <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}"> --}}
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                         
                        <h2 class="post-title">{{$item->titre}}</h2>
                        <div class="post-meta">
                            
                           
                            @foreach ($item->tags as $tag)
                             <a href="">{{$tag->hashtags}}</a>&nbsp;
                                    
                              
                            @endforeach
                            -&nbsp;
                               <a href="">{{$item->categories->theme}}</a>&nbsp;
                        
                        </div>
                        {{-- <div class="post-meta">
                                @foreach ($articles->tags as $tag)
                                    <a href="">{{$tag->hashtags}}</a>&nbsp;
                                @endforeach
                                -&nbsp;
                                <a href="">{{$categorie->theme}}</a>&nbsp;-&nbsp;
                                <a href="">2 Comments</a>
                        </div>
                    --}}
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
