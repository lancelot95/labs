@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
@stop

@section('content')
<form action="{{route('testimonialsadmin.update', ['testimonials' => $test->id])}}" method="POST" enctype="multipart/form-data">
    @method("PUT")
@csrf

<div class="form-group">
    <label for="">nom</label>
    <input type="text" name="nom" id="" class="form-control" value="{{$test->nom}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">fonction</label>
    <input type="text" name="fonction" id="" class="form-control" value="{{$test->fonction}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
    
</div>

 <div class="form-group">
    <label for="">texte</label>
    <input type="text" name="texte" id="" class="form-control" value="{{$test->texte}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
        <label for="">photo</label>
        <input type="text" name="photo" id="" class="form-control" value="{{$test->photo}}" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
         
</div>

<button class="btn btn-danger" type="submit">
        UPDATE
</button>

</form>
@stop