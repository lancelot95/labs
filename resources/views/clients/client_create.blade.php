@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE USER</h1>
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('client.index')}}">Page précédente</a>
  <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">

  @csrf
      <div class="form-group">
          <label for="">Photo</label>
          @if($errors->has('photo'))
                @foreach ($errors->get('photo') as $error)
                      <div class="text-danger">
                            {{$errors->first('photo')}}
                      </div>
                @endforeach
          @endif
          <input type="file" class="form-control {{$errors-> has('photo')?'border-danger':''}}" name="photo" id="" rows="3" value="{{old('photo')}}">
      </div>
      <div class="form-group">
            <label for="">Nom</label>
            @if($errors->has('nom'))
                  @foreach ($errors->get('nom') as $error)
                        <div class="text-danger">
                              {{$errors->first('nom')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control {{$errors-> has('nom')?'border-danger':''}}" name="nom" id="" rows="3" value="{{old('nom')}}"></textarea>
      </div>

      <div class="form-group">
            <label for="">Fonction</label>
            @if($errors->has('fonction'))
                  @foreach ($errors->get('fonction') as $error)
                        <div class="text-danger">
                              {{$errors->first('fonction')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control{{$errors-> has('fonction')?'border-danger':''}}" name="fonction" id="" rows="3" value="{{old('fonction')}}"></textarea>
      </div>
      <button class="btn-warning" type="submit">Submit</button>
    
  </form>
@stop