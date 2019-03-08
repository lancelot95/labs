@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE ARTICLES</h1>
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('acceuiladmin.index')}}">Page précédente</a>



    
  <form action="{{route('acceuiladmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
        <label for="">Image</label>
        @if($errors->has('image'))
              @foreach ($errors->get('image') as $error)
                    <div class="text-danger">
                          {{$errors->first('image')}}
                    </div>
              @endforeach
        @endif
        <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
      
  </div>
      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop