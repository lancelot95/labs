@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>ARTICLES</h1>
{{-- <a class="btn btn bg-blue" href="{{route('article.create')}}">Page Precedente</a> --}}
@stop

@section('content')

            <div class="container">
                <div class="row">
                    <div class="card m-2 p-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{$articles[0]->img}}">
                        
                        <div class="card-body">
                            <h5 class="card-name">{{$articles[0]->titre}}</h5>
                            <p class="card-description">{{str_limit($articles[0]->texte,200)}}</p>
                            {{-- chemin pour le show --}}
                            {{-- <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('article.show',['id'=>$item->id])}}">Show</a> --
                            {{-- chemin pour le edit --}}
                            {{-- <a class="btn btn bg-black text-white" href="{{route('article.edit',['id'=>$item->id])}}">Edit</a> --}}
                        </div> 

                    </div>
                </div>
            </div> 
            <div class="container">
                    <div class="row">
                        <div class="card m-2 p-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{$articles[1]->img}}">
                            
                            <div class="card-body">
                                <h5 class="card-name">{{$articles[1]->titre}}</h5>
                                <p class="card-description">{{str_limit($articles[1]->texte,200)}}</p>
                                {{-- chemin pour le show --}}
                                {{-- <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('article.show',['id'=>$item->id])}}">Show</a> --
                                {{-- chemin pour le edit --}}
                                {{-- <a class="btn btn bg-black text-white" href="{{route('article.edit',['id'=>$item->id])}}">Edit</a> --}}
                            </div> 
    
                        </div>
                    </div>
            </div> 
            <div class="container">
                    <div class="row">
                        <div class="card m-2 p-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{$articles[2]->img}}">
                            
                            <div class="card-body">
                                <h5 class="card-name">{{$articles[2]->titre}}</h5>
                                <p class="card-description">{{str_limit($articles[2]->texte,200)}}</p>
                                {{-- chemin pour le show --}}
                                {{-- <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('article.show',['id'=>$item->id])}}">Show</a> --
                                {{-- chemin pour le edit --}}
                                {{-- <a class="btn btn bg-black text-white" href="{{route('article.edit',['id'=>$item->id])}}">Edit</a> --}}
                            </div> 
    
                        </div>
                    </div>
            </div> 
@stop