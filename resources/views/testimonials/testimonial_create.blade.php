@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('testimonialsadmin.index')}}"> Page précédente</a>

<div class="container">
         {{-- @if($errors->any())
        <div class="alert alert-danger px-5">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif  --}}
    
  <form action="{{route('testimonialsadmin.store')}}" method="POST" enctype="multipart/form-data">
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
    <select name="client_id" id="">
        @foreach ($clients as $item)
            @if($errors->has('client_id'))
                  @foreach ($errors->get('client_id') as $error)
                        <div class="text-danger">
                              {{$errors->first('client_id')}}
                        </div>
                  @endforeach
            @endif
    <option  class="client_id" value="{{$item->id}}">{{$item->nom}}</option>
        @endforeach
    </select>
    
    {{-- <div class="form-group">
            <label for="">photo</label>
                @if($errors->has('photo'))
                    @foreach ($errors->get('photo') as $error)
                        <div class="text-danger">
                            {{$errors->first('photo')}}
                        </div>
                    @endforeach
                @endif
            <input type="text" name="photo" id="" class="form-control"  aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
             
    </div> --}}

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop