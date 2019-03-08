@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   

@stop

@section('content')
<h3>image carousel</h3>
@can('admin')

<a class="btn btn bg-blue" href="{{route('acceuiladmin.create')}}">Ajouter une image</a>
@endcan
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
      <td>
      <img src="{{Storage::disk('image')->url($item->image_url)}}"  height="100" width="100" alt="">
      <img src="{{$item->image_url}}"height="100" width="100" alt="">
    </td>
    </tr>
    @endforeach

  </tbody>
</table>

<h3>Titre et texte</h3>

@foreach ($acceuils as $item)
 @can('admin')

<a class="btn btn bg-blue" href="{{route('acceuiladmin.edit',['id'=>$item->id])}}">Editer</a> 
@endcan
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
        <td>{{$item->titrecarousel}}</td>
        <td>titre du carousel</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>{{$item->titrelabsworld}}</td>
        <td>titre des projects</td>
       
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>{{$item->titrevertworld}}</td>
        <td>titre des projects</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>{{$item->titreword}}</td>
        <td>titre des projects</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>{{$item->textelabsworld}}</td>
        <td>texte des projects</td>
      </tr>
      <tr>
          <th scope="row">6</th>
          <td>{{$item->titreclient}}</td>
          <td>titre client</td>
      </tr>
      <tr>
          <th scope="row">7</th>
          <td>{{$item->titreservice}}</td>
          <td>titre service</td>
      </tr>
      <tr>
          <th scope="row">8</th>
          <td>{{$item->titreteam}}</td>
          <td>titre team</td>
      </tr>
      <tr>
          <th scope="row">9</th>
          <td>{{$item->titrestandout}}</td>
          <td>stand out</td>
      </tr>
      <tr>
          <th scope="row">10</th>
          <td>{{$item->newsletter}}</td>
          <td>titre newsletter</td>
      </tr>
    </tbody>
  </table>
  @endforeach

 

 
   
    
@stop