@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
<h3>Testimonials</h3>

@stop

@section('content')

<a class="btn btn bg-blue" href="{{route('testimonialsadmin.create')}}">create testimonials</a>

<div class="container">
  <div class="row">
      @foreach($clients as $item)
              <div class="card m-2 p-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::disk('image')->url($item->photo)}}" alt="">
                  <div class="card-body">
                      <h5 class="card-name">{{$item->nom}}</h5>
                      <p class="card-description">{{$item->fonction}}</p>
                      {{-- chemin pour le show --}}
                       <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('testimonialsadmin.show',['id'=>$item->id])}}">Show</a>
                      {{-- chemin pour le edit --}}
                     
                  </div> 

              </div>
      @endforeach 
  </div>
</div>    

@stop