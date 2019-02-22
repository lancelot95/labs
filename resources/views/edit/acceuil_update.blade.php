@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>nouvelles descriptions</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach($acceuil as $item)
                
            <p>{{$item->titrecarousel}}</p>
            <h2>{{$item->titrelabsworld}}
             <span>{{$item->titrevertworld}}</span>
            {{$item->titreword}}</h2>
            <p>{{$acceuils->textelabsworld}}</p>
            <h2>{{$item->titrelabsworld}}
                    <span>{{$item->titrevertworld}}</span>
                   {{$item->titreclient}}</h2>
            <h2>{{$item->titrelabsworld}}
                <span>{{$item->titrevertworld}}</span>
                {{$item->titreservice}}</h2>
                    
            @endforeach
        </div>
    </div>
@stop