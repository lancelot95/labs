@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>modifier home</h1>

@stop

@section('content')
<h3>Services</h3>

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Services</th>
      <th>Text</th>
      <th>Icon</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($services as $item)       
    <tr>
      <td scope="row">{{$item->id}}</td>
      <td>{{$item->titre}}</td>
      <td>{{$item->texte}}</td>
      <td>{{$item->logo}}</td>
      <td>
        <a class="btn btn bg-blue" href="{{route('serviceadmin.edit',['id'=>$item->id])}}">Editer</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>      
@stop