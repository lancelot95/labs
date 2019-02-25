@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE services</h1>
@stop

@section('content')
{{-- <a class="btn btn bg-blue" href="{{route('acceuiladmin_index')}}">Page précédente</a> --}}


    
  <form action="{{route('testimonialsadmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
        <label for="">nom</label>
        <input type="text" name="nom" id="" class="form-control" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    
    <div class="form-group">
        <label for="">fonction</label>
        <input type="text" name="fonction" id="" class="form-control"  aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
        
    </div>
    
     <div class="form-group">
        <label for="">texte</label>
        <input type="text" name="texte" id="" class="form-control" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    
    <div class="form-group">
            <label for="">photo</label>
            <input type="text" name="photo" id="" class="form-control"  aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
             
    </div>

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop