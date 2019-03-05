@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE services</h1>
@stop

@section('content')
{{-- <a class="btn btn bg-blue" href="{{route('acceuiladmin_index')}}">Page précédente</a> --}}


    
  <form action="{{route('serviceadmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="">Titre</label>
      <input type="text" class="form-control" name="titre" id="" aria-describedby="helpId" value="">
      
    </div>

    <div class="form-group">
        <label for="">Text</label>
        <input type="text" class="form-control" name="texte" id="" aria-describedby="helpId" value="">
        
    </div>

    <div class="form-group">
        <label for="">Icon</label>
        @foreach ($icon as $item)
        <input type="file" class="form-control" name="icon" id="" aria-describedby="helpId" value="{{$item->code}}"><i class="{{$item->code}}"></i>       
        @endforeach
    </div>

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop