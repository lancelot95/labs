@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   

@stop

@section('content')

{
@section('content')
<h3>Contact</h3>


<table class="table">
        <thead class="thead-dark">
          <tr>
            <th>id</th>
            <th>titre concatus</th>
            <th>texte de contactus</th>
            <th>Mainoffice</th>
            <th>Addresse</th>
            <th>Phone</th>
            <th>email</th>
            <th>Editer</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contacts as $item)       
          <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->contactus}}</td>
            <td>{{$item->texte}}</td>
            <td>{{$item->mainoffice}}</td>
            <td>{{$item->addresse}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>

            
            <td>
              
                
              <a class="btn btn bg-blue" href="{{route('contactadmin.edit',['id'=>$item->id])}}">Editer</a>
              
            </td>
            <td>
                {{-- <form action="{{route('serviceadmin.destroy',['id'=>$item->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn bg-danger text-white" type="submit">Delete</button>
                </form> --}}
              </td>
          </tr>
          @endforeach
      
        </tbody>
      </table>  

@stop