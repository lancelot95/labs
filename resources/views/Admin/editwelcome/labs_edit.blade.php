@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit labs</h1>
@stop

@section('content')

<div class="container">

<form action="{{route('welcome.update',['id'=>$welcome->id])}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
        
        <div class="form-group">
          <label for="">Labs</label>
          {{-- @if($errors->has('reponse'))
            @foreach ($errors-> get('reponse') as $error)
              <div class="text-danger">
                {{$errors->first('reponse')}}
              </div>
            @endforeach
          @endif --}}
          <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
        </div>
        <button class="btn btn-danger" type="submit">
          UPDATE
        </button>
</form>
       
</div>
  
@stop