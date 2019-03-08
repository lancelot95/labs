@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
@can('editor')
<a class="btn btn bg-blue" href="{{route('user.create')}}">Créer des utilisateurs</a>
    
@endcan

    <div class="container">
        <div class="row">
            @foreach($users as $item)
        {{-- <p>{{$item->name}} Role: {{$item->role->name}}</p>   --}}
        <div class="card m-2 p-3" style="width: 18rem;">
                
                <div class="card-body">
                        <img src="{{Storage::disk('image')->url($item->image)}}" height="250" alt="">
                    <h5 class="card-name">{{$item->name}}</h5>
                    <p class="card-description">{{$item->email}}</p>
                    <p>{{$item->role->name}}</p>
                    <p>{{
                        $item->created_at->format('d - M - Y')
                    }}</p>
                    @can('editor')
                        
                    <form action="{{route('user.destroy',['id'=>$item->id])}}"          method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn bg-danger text-white" type="submit">Delete</button>
                    </form>
                    @endcan
                </div> 

            </div>
                        
            @endforeach
        </div>
    </div>
@stop