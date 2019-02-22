@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE ARTICLES</h1>
@stop

@section('content')
{{-- <a class="btn btn bg-blue" href="{{route('acceuiladmin_index')}}">Page précédente</a> --}}


    
  <form action="{{route('acceuiladmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
      <div class="form-group">
            <label for="">Image</label>
      <input type="file" class="form-control" name="image_url" id="" aria-describedby="helpId" value="">
          
      </div>
      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop