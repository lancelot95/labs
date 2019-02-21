@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>modifier home</h1>

@stop

@section('content')
<h3>Image carousel</h3>
<a class="btn btn bg-blue" href="">editer</a>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>image</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($carou as $item)       
    <tr>
      <td scope="row">{{$item->id}}</td>
      <td>{{$item->image_url}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

<h3>Titre et texte</h3>
<a class="btn btn bg-blue" href="">editer</a>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>database</th>
        <th>origine</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>{{$acceuils->titrecarousel}}</td>
        <td>titre du carousel</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>{{$acceuils->titrelabsworld}}</td>
        <td>titre des projects</td>
       
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>{{$acceuils->titrevertworld}}</td>
        <td>titre des projects</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>{{$acceuils->titreword}}</td>
        <td>titre des projects</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>{{$acceuils->textelabsworld}}</td>
        <td>texte des projects</td>
      </tr>
      <tr>
          <th scope="row">6</th>
          <td>{{$acceuils->titreclient}}</td>
          <td>titre client</td>
      </tr>
      <tr>
          <th scope="row">7</th>
          <td>{{$acceuils->titreservice}}</td>
          <td>titre service</td>
      </tr>
      <tr>
          <th scope="row">8</th>
          <td>{{$acceuils->titreteam}}</td>
          <td>titre team</td>
      </tr>
      <tr>
          <th scope="row">9</th>
          <td>{{$acceuils->titrestandout}}</td>
          <td>stand out</td>
      </tr>
      <tr>
          <th scope="row">10</th>
          <td>{{$acceuils->newsletter}}</td>
          <td>titre newsletter</td>
      </tr>
    </tbody>
  </table>
  <h2>CONTACTUS</h2>
  <a class="btn btn bg-blue" href="">editer</a>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">database</th>
          <th>description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>{{$acceuils->contactus}}</td>
          <td>titre du contact</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>{{$acceuils->texte}}</td>
          <td>texte de contact</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>{{$acceuils->mainoffice}}</td>
            <td>titre main office</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>{{$acceuils->addresse}}</td>
            <td>adresse</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>{{$acceuils->phone}}</td>
            <td>phone</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>{{$acceuils->email}}</td>
            <td>email</td>
        </tr>
      </tbody> 
      
@stop