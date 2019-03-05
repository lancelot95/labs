@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('user.create')}}">Page précédente</a>
    <div class="container">
        <div class="row">
            @foreach($users as $item)
        {{-- <p>{{$item->name}} Role: {{$item->role->name}}</p>   --}}
        <div class="card m-2 p-3" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}"> --}}
                
                <div class="card-body">
                    <h5 class="card-name">{{$item->name}}</h5>
                    <p class="card-description">{{$item->email}}</p>
                    <p>{{$item->role->name}}</p>
                    {{-- chemin pour le show --}}
                    {{-- <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('article.show',['id'=>$item->id])}}">Show</a> -- --}}
                    {{-- chemin pour le edit --}}
                    {{-- <a class="btn btn bg-black text-white" href="{{route('article.edit',['id'=>$item->id])}}">Edit</a> --}}
                </div> 

            </div>
                        
            @endforeach
        </div>
    </div>
@stop