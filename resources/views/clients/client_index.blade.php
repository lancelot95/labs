@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
<h3>Clients</h3>

@stop

@section('content')

<a class="btn btn bg-blue" href="{{route('client.create')}}">créer clients</a>

<div class="container">
  <div class="row">
      @foreach($clients as $item)
              <div class="card m-2 p-3" style="width: 18rem;">
                  <img class="card-img-top" src="{{Storage::disk('image')->url($item->photo)}}" >
                  <div class="card-body">
                      <h5 class="card-name">{{$item->nom}}</h5>
                      <p class="card-description">{{$item->fonction}}</p>
                      {{-- chemin pour le show --}}
                       {{-- <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('testimonialsadmin.show',['id'=>$item->id])}}">Show</a> --}}
                      {{-- chemin pour le edit --}}
                      {{-- <a class="btn btn bg-black text-white" href="{{route('article.edit',['id'=>$item->id])}}">Edit</a> --}} 
                      {{-- @can('editor') --}}
                          
                        <form action="{{route('client.destroy',['id'=>$item->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn bg-danger text-white" type="submit">Delete</button>
                        </form>
                      {{-- @endcan --}}
                  </div> 

              </div>
      @endforeach 
  </div>
</div>    

@stop