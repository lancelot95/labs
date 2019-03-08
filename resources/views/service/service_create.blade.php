 @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<a class="btn btn bg-blue" href="{{route('serviceadmin.index')}}">Page précédente</a> 


    
  <form action="{{route('serviceadmin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="">Titre</label>
        @if($errors->has('titre'))
            @foreach ($errors->get('titre') as $error)
                    <div class="text-danger">
                        {{$errors->first('titre')}}
                    </div>
            @endforeach
        @endif
      <input type="text" class="form-control" name="titre" id="" aria-describedby="helpId" value="">
      
    </div>

    <div class="form-group">
        <label for="">Text</label>
        @if($errors->has('texte'))
            @foreach ($errors->get('texte') as $error)
                <div class="text-danger">
                    {{$errors->first('texte')}}
                </div>
            @endforeach
        @endif
        <input type="text" class="form-control" name="texte" id="" aria-describedby="helpId" value="">
    </div>

    <div class="form-group">
        <label>Icon</label>
             <div>
               
                    @foreach ($icons as $icon)
                        @if($errors->has('icon_id'))
                            @foreach ($errors->get('icon_id') as $error)
                                <div class="text-danger">
                                    {{$errors->first('icon_id')}}
                                </div>
                            @endforeach
                        @endif
                        <input type="checkbox" value="{{$icon->id}}" name="icon_id">
                    
                        <label><i  class="{{$icon->code}}"></i></label>
                    @endforeach
                 
            </div>
    </div>
              

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>

 
  @stop 