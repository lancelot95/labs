@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>modifier home</h1>

@stop

@section('content')
<h3>Services</h3>
{{-- <a class="btn btn bg-blue" href="{{route('serviceadmin.create')}}">Ajouter un service</a> --}}
@section('content')
<h3>Services</h3>
{{-- <a class="btn btn bg-blue" href="{{route('contactadmin.create')}}">Ajouter un service</a> --}}

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
              <a class="btn btn bg-blue" href="{{route('contact.edit',['id'=>$item->id])}}">Editer</a>
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



{{-- <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">DataBase</th>
            <th scope="col">Description</th>
            <th scope="col">action</th>
            
          </tr>
        </thead>
        <tbody>
            <h1 class="text-danger">Contact </h1>
          @foreach($acceuils as $item)
           
          <tr>
             <th scope="row">1</th>
              <td>{{$item->contactus}}</td>
              <th><h4>Titre Contact</h3></th>
          </tr>
          <tr>
             <th scope="row">2</th>
              <td>{{$item->texte}}</td>
              <th><h4>Text Contact</h3></th>
          </tr>
          <tr>
             <th scope="row">3</th>
              <td>{{$item->mainoffice}}</td>
              <th><h4>Titre</h3></th>
          </tr>
          <tr>
             <th scope="row">4</th>
              <td>{{$item->addresse}}</td>
              <th><h4>Adresse</h3></th>
          </tr>
          <tr>
             <th scope="row">5</th>
              <td>{{$item->phone}}</td>
              <th><h4>téléphone</h3></th>
          </tr>
          <tr>
             <th scope="row">6</th>
              <td>{{$item->email}}</td>
              <th><h4>email</h3></th>
          </tr>
          <tr>
                 <a href="{{route('contact.edit',['id'=>$item->id])}}" class="btn btn-danger">Edit</a>
          </tr>
          
          @endforeach
        </tbody>
      </table>     --}}