@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
@stop

@section('content')
<form action="{{route('acceuiladmin.update', ['acceuils' => $test->id])}}" method="POST" >
    @method("PUT")
@csrf
<button class="btn btn-danger" type="submit">
        UPDATE
    </button>
<div class="form-group">
    <label for="">titrecarousel</label>
    <input type="text" name="titrecarousel" id="" class="form-control" value="{{$test->titrecarousel}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>
   

<div class="form-group">
    <label for="">titrelabsworld</label>
<input type="text" name="titrelabsworld" id="" class="form-control" value="{{$test->titrelabsworld}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
      <label for="">titrevertworld</label>
<input type="text" name="titrevertworld" id="" class="form-control" value="{{$test->titrevertworld}}" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
      <label for="">titreword</label>
<input type="text" name="titreword" id="" class="form-control" value="{{$test->titreword}}" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">textelabsworld</label>
<input type="text" name="textelabsworld" id="" class="form-control" value="{{$test->textelabsworld}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titreclient</label>
<input type="text" name="titreclient" id="" class="form-control" value="{{$test->titreclient}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titreservice</label>
<input type="text" name="titreservice" id="" class="form-control" value="{{$test->titreservice}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titreteam</label>
<input type="text" name="titreteam" id="" class="form-control" value="{{$test->titreteam}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titrestandout</label>
<input type="text" name="titrestandout" id="" class="form-control" value="{{$test->titrestandout}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">textestandout</label>
<input type="text" name="textestandout" id="" class="form-control" value="{{$test->textestandout}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>


</form>
@stop