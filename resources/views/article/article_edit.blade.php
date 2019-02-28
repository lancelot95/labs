@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<form action="{{route('article.update', ['articles'=>$test->id])}}" method="POST" enctype="multipart/form-data">
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
    <input type="text" name="img" id="" class="form-control" value="{{$test->img}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
     
</div>
<select name="alessio_id">
        @foreach ($tag as $item)
<option value="{{$item->id}}">{{$item->hashtags}}</option>
        @endforeach
</select>

<button class="btn btn-danger" type="submit">
        UPDATE
</button>

</form>
@stop