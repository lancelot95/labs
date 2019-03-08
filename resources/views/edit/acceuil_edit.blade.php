@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
    <a class="btn btn bg-blue" href="{{route('acceuiladmin.index')}}">Page précédente</a>
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
            @if($errors->has('titrecarousel'))
                  @foreach ($errors->get('titrecarousel') as $error)
                        <div class="text-danger">
                              {{$errors->first('titrecarousel')}}
                        </div>
                  @endforeach
            @endif
    <input type="text" name="titrecarousel" id="" class="form-control" value="{{$test->titrecarousel}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>
   

<div class="form-group">
    <label for="">titrelabsworld</label>
    @if($errors->has('titrelabsworld'))
    @foreach ($errors->get('titrelabsworld') as $error)
          <div class="text-danger">
                {{$errors->first('titrelabsworld')}}
          </div>
    @endforeach
@endif
<input type="text" name="titrelabsworld" id="" class="form-control" value="{{$test->titrelabsworld}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
      <label for="">titrevertworld</label>
      @if($errors->has('titrelabsworld'))
      @foreach ($errors->get('titrelabsworld') as $error)
            <div class="text-danger">
                  {{$errors->first('titrelabsworld')}}
            </div>
      @endforeach
  @endif
<input type="text" name="titrevertworld" id="" class="form-control" value="{{$test->titrevertworld}}" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
      <label for="">titreword</label>
      @if($errors->has('titreword'))
      @foreach ($errors->get('titreword') as $error)
            <div class="text-danger">
                  {{$errors->first('titreword')}}
            </div>
      @endforeach
  @endif
<input type="text" name="titreword" id="" class="form-control" value="{{$test->titreword}}" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">textelabsworld</label>
    @if($errors->has('textelabsworld'))
    @foreach ($errors->get('textelabsworld') as $error)
          <div class="text-danger">
                {{$errors->first('textelabsworld')}}
          </div>
    @endforeach
@endif
<input type="text" name="textelabsworld" id="" class="form-control" value="{{$test->textelabsworld}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titreclient</label>
    @if($errors->has('titreclient'))
    @foreach ($errors->get('titreclient') as $error)
          <div class="text-danger">
                {{$errors->first('titreclient')}}
          </div>
    @endforeach
@endif
<input type="text" name="titreclient" id="" class="form-control" value="{{$test->titreclient}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titreservice</label>
    @if($errors->has('titreservice'))
    @foreach ($errors->get('titreservice') as $error)
          <div class="text-danger">
                {{$errors->first('titreservice')}}
          </div>
    @endforeach
@endif
<input type="text" name="titreservice" id="" class="form-control" value="{{$test->titreservice}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titreteam</label>
    @if($errors->has('titreteam'))
    @foreach ($errors->get('titreteam') as $error)
          <div class="text-danger">
                {{$errors->first('titreteam')}}
          </div>
    @endforeach
@endif
<input type="text" name="titreteam" id="" class="form-control" value="{{$test->titreteam}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">titrestandout</label>
    @if($errors->has('titrestandout'))
    @foreach ($errors->get('titrestandout') as $error)
          <div class="text-danger">
                {{$errors->first('titrestandout')}}
          </div>
    @endforeach
@endif
<input type="text" name="titrestandout" id="" class="form-control" value="{{$test->titrestandout}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">textestandout</label>
    @if($errors->has('textestandout'))
    @foreach ($errors->get('textestandout') as $error)
          <div class="text-danger">
                {{$errors->first('textestandout')}}
          </div>
    @endforeach
@endif
<input type="text" name="textestandout" id="" class="form-control" value="{{$test->textestandout}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>


</form>
@stop