@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
    <a class="btn btn bg-blue" href="{{route('projectadmin.index')}}">Page précédente</a>
@stop

@section('content')
<form action="{{route('projectadmin.update', ['projets' => $test->id])}}" method="POST" enctype="multipart/form-data">
    @method("PUT")
@csrf
<div class="form-group">
    <label for="">titre</label>
    <input type="text" name="titre" id="" class="form-control" value="{{$test->titre}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">texte</label>
    <input type="text" name="texte" id="" class="form-control" value="{{$test->texte}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">Image</label>
    <input type="full" name="image" id="" class="form-control" value="{{$test->image}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
     <select name="" id="">
         
     </select>
</div>

<button class="btn btn-danger" type="submit">
        UPDATE
</button>

</form>
@stop