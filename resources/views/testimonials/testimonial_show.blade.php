 @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   

@stop

@section('content')
<h3>Testimonials</h3>
{{-- @can('editor') --}}
<a class="btn btn bg-blue" href="{{route('testimonialsadmin.index')}}"> Page précédente</a>

{{-- @endcan --}}
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Nom Client</th>
      <th>Fonction</th>
      <th>Testimonial</th>
      <th>Action</th> 
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($client->testimonials as $testimonial)
    <tr>
      <td scope="row">{{$client->id}}</td>
      <td>{{$client->nom}}</td>
      <td>{{$client->fonction}}</td>
      <td>{{$testimonial->texte}}</td>

      <td>
         {{-- <a class="btn btn bg-blue" href="{{route('testimonialsadmin.edit',['id'=>$testimonial->id])}}">Editer</a>  --}}
         <a class="btn btn bg-black text-white" href="{{route('testimonialsadmin.edit',['id'=>$testimonial->id])}}">Edit</a> 
      </td>
      <td>
          <form action="{{route('testimonialsadmin.destroy',['id'=>$testimonial->id])}}" method="post">
              @method('delete')
              @csrf
              <button class="btn btn bg-danger text-white" type="submit">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach   

  </tbody>
</table>     

@stop