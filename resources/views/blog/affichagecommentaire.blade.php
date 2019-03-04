@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
    
   
@stop

@section('content')

<div>
  <input type="checkbox" id="scales" name="scales"
         checked>
  <label for="scales">encours de validation</label>
</div>

<div>
  <input type="checkbox" id="horns" name="horns">
  <label for="horns">valider</label>
</div>
<div>
        <input type="checkbox" id="horns" name="horns">
        <label for="horns">delete</label>
      </div>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">commentaire</th>
        <th scope="col">Delete</th>
        <th scope="col">Validation</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($commentaires as $item)
      <tr>
      <th scope="row">{{$item->id}} </th>
        <td>{{$item->name}}</td>
        <td>{{$item->message}}</td>
   
        <td>
            {{-- <form action="{{route('blog.destroy',['id'=>$item->id])}}" method="post">
                    @method('delete')
                    @csrf --}}
                    <button class="btn btn bg-danger text-white" type="submit">Delete</button>
            {{-- </form> --}}    
        </td>

        <td>
        <form action="{{route('validation', ['commentaire'=> $item->id])}}" method="post">
            @method('PUT')
            @csrf
                <button class="btn btn bg-success" type="submit">Validation</button>
                
            </form>
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