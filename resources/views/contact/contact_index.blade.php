@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>modifier home</h1>

@stop

@section('content')
<h3>Services</h3>
<a class="btn btn bg-blue" href="{{route('serviceadmin.create')}}">Ajouter un service</a>
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>modifier home</h1>

@stop

@section('content')
<h3>Services</h3>
<a class="btn btn bg-blue" href="{{route('serviceadmin.create')}}">Ajouter un service</a>
<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">DataBase</th>
            <th scope="col">Description</th>
            
          </tr>
        </thead>
        <tbody>
            <h1 class="text-danger">Contact </h1>
          @foreach($acceuils as $item)
            <a href="{{route('contactadmin.edit',['id'=>$item->id])}}" class="btn btn-danger">Edit</a>
          <tr>
             <th scope="row">1</th>
              <td>{{$item->titrecontact}}</td>
              <th><h4>Titre Contact</h3></th>
          </tr>
          <tr>
             <th scope="row">2</th>
              <td>{{$item->textcontact}}</td>
              <th><h4>Text Contact</h3></th>
          </tr>
          <tr>
             <th scope="row">3</th>
              <td>{{$item->office}}</td>
              <th><h4>Text Office</h3></th>
          </tr>
          <tr>
             <th scope="row">4</th>
              <td>{{$item->adresse}}</td>
              <th><h4>Text Adresse</h3></th>
          </tr>
          <tr>
             <th scope="row">5</th>
              <td>{{$item->postal}}</td>
              <th><h4>Text Postal</h3></th>
          </tr>
          <tr>
             <th scope="row">6</th>
              <td>{{$item->telephone}}</td>
              <th><h4>Text Telephone</h3></th>
          </tr>
          <tr>
             <th scope="row">7</th>
              <td>{{$item->email}}</td>
              <th><h4>Text Email</h3></th>
          </tr> 
          
          @endforeach
        </tbody>
      </table>    

@stop

@stop