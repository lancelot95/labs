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
            @if($errors->has('img'))
                  @foreach ($errors->get('img') as $error)
                        <div class="text-danger">
                              {{$errors->first('img')}}
                        </div>
                  @endforeach
            @endif
            <input type="file" class="form-control" name="img" id="" aria-describedby="helpId" placeholder="">
          
      </div>

      <div class="form-group">
            <label for="">titre</label>
            @if($errors->has('titre'))
                  @foreach ($errors->get('titre') as $error)
                        <div class="text-danger">
                              {{$errors->first('titre')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control {{$errors-> has('titre')?'border-danger':''}}" name="titre" id="" rows="3" value="{{old('titre')}}"></textarea>
      </div>

      <div class="form-group">
            <label for="">Texte</label>
            @if($errors->has('texte'))
                  @foreach ($errors->get('texte') as $error)
                        <div class="text-danger">
                              {{$errors->first('texte')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control{{$errors-> has('texte')?'border-danger':''}}" name="texte" id="" rows="3" value="{{old('texte')}}"></textarea>
      </div>
            <p>Choisis teazers tags:</p>
      
      @foreach ($tags as $tag)
      <div>
            @if($errors->has('tags[]'))
                  @foreach ($errors->get('tags[]') as $error)
                        <div class="text-danger">
                              {{$errors->first('tags[]')}}
                        </div>
                  @endforeach
            @endif
            <input type="checkbox" id="" name="tags[]" value="{{$tag->id}}">
            <label>{{$tag->hashtags}}</label>

      </div>
       @endforeach

      <p>Choisis tes catégories:</p>
      @foreach ($categories as $categorie)
      <div>
                  @if($errors->has('categorie_id'))
                  @foreach ($errors->get('categorie_id') as $error)
                        <div class="text-danger">
                              {{$errors->first('categorie_id')}}
                        </div>
                  @endforeach
            @endif
            <input type="checkbox" id="" name="categorie_id" value="{{$categorie->id}}">
            <label>{{$categorie->theme}}</label>
      </div>
      @endforeach

           

      


      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

@stop
