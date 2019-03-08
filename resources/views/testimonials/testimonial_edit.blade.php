@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>LABS</h1>
    <a class="btn btn bg-blue" href="{{route('testimonialsadmin.index')}}"> Page précédente</a>
@stop

@section('content')
<form action="{{route('testimonialsadmin.update', ['testimonials' => $test->id])}}" method="POST" enctype="multipart/form-data">
    @method("PUT")
@csrf



    <div class="form-group">
        <label for="">texte</label>
            @if($errors->has('texte'))
                @foreach ($errors->get('texte') as $error)
                    <div class="text-danger">
                        {{$errors->first('texte')}}
                    </div>
                @endforeach
            @endif
        <input type="text" name="texte" id="" class="form-control" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>

<button class="btn btn-danger" type="submit">
        UPDATE
</button>

</form>
@stop