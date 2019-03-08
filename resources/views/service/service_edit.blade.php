@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
    <a class="btn btn bg-blue" href="{{route('serviceadmin.index')}}">Page précédente</a> 
@stop

@section('content')
<form action="{{route('serviceadmin.update', ['services' => $test->id])}}" method="POST" enctype="multipart/form-data">
    @method("PUT")
@csrf
<div class="form-group">
    <label for="">titre</label>
        @if($errors->has('titre'))
            @foreach ($errors->get('titre') as $error)
                    <div class="text-danger">
                        {{$errors->first('titre')}}
                    </div>
            @endforeach
        @endif
    <input type="text" name="titre" id="" class="form-control" value="{{$test->titre}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
    <label for="">texte</label>
        @if($errors->has('text'))
            @foreach ($errors->get('text') as $error)
                <div class="text-danger">
                    {{$errors->first('text')}}
                </div>
            @endforeach
        @endif
    <input type="text" name="texte" id="" class="form-control" value="{{$test->texte}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
</div>

{{-- <div class="form-group">
    <label for="">logo</label>
    <input type="text" name="logo" id="" class="form-control" value="{{asset($test->logo)}}" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
     
</div> --}}
<div class="form-group">
        <label>Icon</label>
            {{-- <input type="file" class="form-control" name="icon" id="" aria-describedby="helpId" value="{{$item->code}}">
            <i class="{{$item->code}}"></i>        --}}
             <div>
                    @foreach ($icons as $icon)
                        @if($errors->has('icon_id'))
                            @foreach ($errors->get('icon_id') as $error)
                                <div class="text-danger">
                                    {{$errors->first('icon_id')}}
                                </div>
                            @endforeach
                        @endif
                        <input type="checkbox" value="{{$icon->id}}" name="icon_id">
                    
                        <label><i  class="{{$icon->code}}"></i></label>
                    @endforeach
            </div>
    </div>

<button class="btn btn-danger" type="submit">
        UPDATE
</button>

</form>
@stop