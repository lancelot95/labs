@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('article.index')}}">Page précédente</a>


    
  <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
      <div class="form-group">
            <label for="">Image</label>
            {{-- @if($errors->has('image'))
                  @foreach ($errors->get('image') as $error)
                        <div class="text-danger">
                              {{$errors->first('image')}}
                        </div>
                  @endforeach
            @endif --}}
            <input type="file" class="form-control" name="img" id="" aria-describedby="helpId" placeholder="">
          
      </div>

      <div class="form-group">
            <label for="">titre</label>
            {{-- @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif --}}
            <textarea class="form-control {{$errors-> has('name')?'border-danger':''}}" name="titre" id="" rows="3" value="{{old('name')}}"></textarea>
      </div>

      <div class="form-group">
            <label for="">Texte</label>
            {{-- @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif --}}
            <textarea class="form-control{{$errors-> has('name')?'border-danger':''}}" name="texte" id="" rows="3" value="{{old('name')}}"></textarea>
      </div>
            <p>Choisis teazers tags:</p>
      
      @foreach ($tags as $tag)
      <div>
            <input type="checkbox" id="" name="tags[]" value="{{$tag->id}}">
            <label>{{$tag->hashtags}}</label>

      </div>
       @endforeach

      <p>Choisis tes catégories:</p>
      @foreach ($categories as $categorie)
      <div>
            <input type="checkbox" id="" name="categorie_id" value="{{$categorie->id}}">
            <label>{{$categorie->theme}}</label>
      </div>
      @endforeach

           

      


      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop
