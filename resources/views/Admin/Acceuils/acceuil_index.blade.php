@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>acceuil</h1>
@stop

@section('content')
<table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">question</th>
            <th scope="col">reponse</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($questions as $item)
          <tr>
          <th scope="row">{{$item->id}}</th>
            <td>{{$item->question}}</td>
            <td>
              @if ($item->réponse)
              {{$item->réponse}}
                @else
                    ya pas de reponse
                
            @endif
          </td>
            <td>
            <a href="{{route('question.edit',['id'=>$item->id])}}" class="btn btn-blue">Edit</a>
            </td>
          </tr>
            @endforeach
    
        </tbody>
      </table>
@stop