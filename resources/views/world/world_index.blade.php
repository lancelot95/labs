@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  

@stop

@section('content')
<h3>Worlds</h3>
<a class="btn btn bg-blue" href="{{route('worldadmin.create')}}">Ajouter un projet</a>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Titre</th>
      <th>Text</th>
      <th>Icon</th>
      <th>Action</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($worlds as $item)       
    <tr>
      <td scope="row">{{$item->id}}</td>
      <td>{{$item->titre}}</td>
      <td>{{$item->texte}}</td> 
      <td><i class="{{$item->icons->code}}"></i></td>
      </td>
      <td>
      <a class="btn btn bg-blue" href="{{route('worldadmin.edit',['worlds'=>$item->id])}}">Editer</a>
      </td>
      <td>
          <form action="{{route('worldadmin.destroy',['id'=>$item->id])}}" method="post">
              @method('delete')
              @csrf
              <button class="btn btn bg-danger text-white" type="submit">Delete</button>
          </form>
        </td>
    </tr>
    @endforeach

  </tbody>
</table>     

@stop