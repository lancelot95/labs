@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contact</h1>
    <a class="btn btn bg-blue" href="{{route('contactadmin.index')}}">Page précédente</a>
@stop

@section('content')
<form action="{{route('contactadmin.update', ['id'=>$contacts->id])}}" method="POST" >
    @method("PUT")
@csrf
<button class="btn btn-danger" type="submit">
        UPDATE
    </button>
<div class="form-group">
    <label for="">contactus</label>
            @if($errors->has('contactus'))
                  @foreach ($errors->get('contactus') as $error)
                        <div class="text-danger">
                              {{$errors->first('contactus')}}
                        </div>
                  @endforeach
            @endif
    <input type="text" name="contactus" id="" class="form-control" value="{{$item->contactus}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>
   

<div class="form-group">
    <label for="">texte</label>
    @if($errors->has('texte'))
    @foreach ($errors->get('texte') as $error)
          <div class="text-danger">
                {{$errors->first('texte')}}
          </div>
    @endforeach
@endif
<input type="text" name="texte" id="" class="form-control" value="{{$item->texte}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
      <label for="">mainoffice</label>
      @if($errors->has('mainoffice'))
      @foreach ($errors->get('mainoffice') as $error)
            <div class="text-danger">
                  {{$errors->first('mainoffice')}}
            </div>
      @endforeach
  @endif
<input type="text" name="mainoffice" id="" class="form-control" value="{{$item->mainoffice}}" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
      <label for="">addresse</label>
      @if($errors->has('addresse'))
      @foreach ($errors->get('addresse') as $error)
            <div class="text-danger">
                  {{$errors->first('addresse')}}
            </div>
      @endforeach
  @endif
<input type="text" name="addresse" id="" class="form-control" value="{{$item->addresse}}" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">phone</label>
    @if($errors->has('phone'))
    @foreach ($errors->get('phone') as $error)
          <div class="text-danger">
                {{$errors->first('phone')}}
          </div>
    @endforeach
@endif
<input type="text" name="phone" id="" class="form-control" value="{{$item->phone}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">email</label>
    @if($errors->has('email'))
    @foreach ($errors->get('email') as $error)
          <div class="text-danger">
                {{$errors->first('email')}}
          </div>
    @endforeach
@endif
<input type="text" name="email" id="" class="form-control" value="{{$item->email}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>



</form>
@stop