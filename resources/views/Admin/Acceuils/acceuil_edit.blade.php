@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Modifier la page d'acceuil</h1>
@stop

@section('content')
<div class="form-group">
  <label for="">Titre carousel</label>
  <input type="text" name="titrecarousel" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
@stop