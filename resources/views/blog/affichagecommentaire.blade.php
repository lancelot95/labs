@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
    
   
@stop

@section('content')



<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">commentaire</th>
        @can('admin')
        <th scope="col">Delete</th>
        <th scope="col">Validation</th>
        @endcan
        
      </tr>
    </thead>
    <tbody>
      @foreach ($commentaires as $item)
      <tr>
      <th scope="row">{{$item->id}} </th>
        <td>{{$item->name}}</td>
        <td>{{$item->message}}</td>
   
        <td>
          @can('admin')
            {{-- <form action="{{route('blog.destroy',['id'=>$item->id])}}" method="post">
                    @method('delete')
                    @csrf --}}
                    <button class="btn btn bg-danger text-white" type="submit">Delete</button>
            {{-- </form> --}}   
            @endcan 
        </td>

        <td>
         
            
          @can('admin')
          <form action="{{route('validation', ['commentaire'=> $item->id])}}" method="post">
              @method('PUT')
              @csrf
                  <button class="btn btn bg-success" type="submit">Validation</button>
                  
          </form>
         @endcan
        </td>
        <td>
          @if ($item->action)
          {{$item->action}}
           
            
        @endif
      </td>
        <td>
       
        </td>
      </tr>
        @endforeach

    </tbody>
  </table>
  
@stop