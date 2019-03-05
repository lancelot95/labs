 @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
{{-- <a class="btn btn bg-blue" href="{{route('acceuiladmin_index')}}">Page précédente</a> --}} 


    
  <form action="{{route('serviceadmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="">Titre</label>
      <input type="text" class="form-control" name="titre" id="" aria-describedby="helpId" value="">
      
    </div>

    <div class="form-group">
        <label for="">Text</label>
        <input type="text" class="form-control" name="texte" id="" aria-describedby="helpId" value="">
        
    </div>

    <div class="form-group">
        <label>Icon</label>
            {{-- <input type="file" class="form-control" name="icon" id="" aria-describedby="helpId" value="{{$item->code}}">
            <i class="{{$item->code}}"></i>        --}}
             <div>
                    @foreach ($icons as $icon)
                        <input type="checkbox" value="{{$icon->id}}" name="icon_id">
                    
                        <label><i  class="{{$icon->code}}"></i></label>
                    @endforeach
            </div>
    </div>
              

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

 
  @stop 