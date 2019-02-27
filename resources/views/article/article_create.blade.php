




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>ARTICLES</h1>
{{-- <a class="btn btn bg-blue" href="{{route('article.create')}}">Page Precedente</a> --}}
@stop

@section('content')

            <div class="container">
                <div class="row">
                @foreach ($articles as $item)
                    <div class="card m-2 p-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{$item->img}}">
                        <div class="card-body">
                            <h5 class="card-name">{{$item->titre}}</h5>
                            <p class="card-description">{{str_limit($item->texte,200)}}</p>
                            {{-- chemin pour le show --}}
                            
                            {{-- chemin pour le edit --}}
                            {{-- <a class="btn btn bg-black text-white" href="{{route('article.edit',['id'=>$item->id])}}">Edit</a> --}}
                        </div> 
                    </div>
                    @endforeach
                </div>
            </div> 
@stop