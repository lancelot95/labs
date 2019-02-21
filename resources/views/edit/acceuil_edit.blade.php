@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
@stop

@section('content')
<form action="{{route('acceuiladmin.update',['acceuiladmin'=>$acceuiladmin->id])}}"
   method="POST">
<div class="form-group">
  <label for=""></label>
<input type="text" name="{{}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
</form>
@stop