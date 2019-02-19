@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
@stop

@section('content')
<a class="btn btn bg-blue" href="{{asset('carousel')}}">Répertoire d'image</a>
<a class="btn btn bg-danger text-white" href="{{asset('acceuil')}}">Modifier la page d'acceuil</a>
@stop