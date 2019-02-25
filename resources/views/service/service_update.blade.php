@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>descriptions des services</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach($service as $item)
                <h2>{{$service->titre}}</h2>
                <p>{{$service->texte}}</p> 
                <i>{{$service->logo}}</i>   
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($project as $item)
                <h2>{{$project->titre}}</h2>
                <p>{{$project->texte}}</p> 
                <i>{{$project->image}}</i>   
            @endforeach
        </div>
    </div>
@stop