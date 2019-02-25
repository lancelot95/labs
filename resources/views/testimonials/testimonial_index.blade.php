@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>modifier home</h1>

@stop

@section('content')
<h3>Testimonials</h3>
<a class="btn btn bg-blue" href="{{route('testimonialsadmin.create')}}">create testimonials</a>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Testimonials</th>
      <th>Text</th>
      <th>Nom</th>
      <th>Fonction</th>
      <th>Action</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($testimonials as $item)       
    <tr>
      <td scope="row">{{$item->id}}</td>
      <td>{{$item->texte}}</td>
      <td>{{$item->nom}}</td>
      <td>{{$item->fonction}}</td>
      <td>{{$item->fonction}}</td>

      <td>
         <a class="btn btn bg-blue" href="{{route('testimonialsadmin.edit',['id'=>$item->id])}}">Editer</a> 
      </td>
      <td>
          <form action="{{route('testimonialsadmin.destroy',['id'=>$item->id])}}" method="post">
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