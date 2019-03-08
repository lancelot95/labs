@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<a class="btn btn bg-blue" href="{{route('article.index')}}">Page précédente</a>


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
@foreach ($tags as $tag)
<div>
      <input type="checkbox" id="" name="tags[]" value="{{$tag->id}}">
      <label>{{$tag->hashtags}}</label>
</div>
@endforeach

<button class="btn btn-danger" type="submit">
        UPDATE
</button>

</form>
@stop