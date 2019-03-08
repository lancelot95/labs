@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE PROJECT</h1>
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('projectadmin.index')}}">Page précédente</a>


    
  <form action="{{route('projectadmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="">Titre</label>
            @if($errors->has('titre'))
            @foreach ($errors->get('titre') as $error)
                <div class="text-danger">
                    {{$errors->first('titre')}}
                </div>
            @endforeach
        @endif
      <input type="text" class="form-control" name="titre" id="" aria-describedby="helpId" value="">
      
    </div>

    <div class="form-group">
        <label for="">Text</label>
        @if($errors->has('text'))
        @foreach ($errors->get('text') as $error)
            <div class="text-danger">
                {{$errors->first('text')}}
            </div>
        @endforeach
    @endif
        <input type="text" class="form-control" name="texte" id="" aria-describedby="helpId" value="">
        
    </div>

    <div class="form-group">
        <label for="">Image</label>
        @if($errors->has('image'))
        @foreach ($errors->get('image') as $error)
            <div class="text-danger">
                {{$errors->first('image')}}
            </div>
        @endforeach
    @endif
        <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" value="">         
    </div>

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop