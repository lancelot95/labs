@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('worldadmin.index')}}">Page précédente</a> 


    
  <form action="{{route('worldadmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="">Titre</label>
      <input type="text" class="form-control" name="titre" id="" aria-describedby="helpId" value="">
      
    </div>

    <div class="form-group">
        <label for="">Text</label>
        <input type="text" class="form-control" name="texte" id="" aria-describedby="helpId" value="">
        
    </div>

    <div class="form-group">
        <label>Icon</label>
             <div>
                    @foreach ($icons as $icon)
                        <input type="checkbox" value="{{$icon->id}}" name="icon_id">
                    
                        <label><i  class="{{$icon->code}}"></i></label>
                    @endforeach
            </div>
    </div>
    <div class="form-group">
            <label for="">Image</label>
            @if($errors->has('image'))
                  @foreach ($errors->get('image') as $error)
                        <div class="text-danger">
                              {{$errors->first('image')}}
                        </div>
                  @endforeach
            @endif
            <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
    </div>

    <button class="btn-warning" type="submit">Submit</button>
    
</form>
@stop