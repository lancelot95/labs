{{-- @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Image du Carousel</h1>
@stop

@section('content')
<form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
              <label for="">Image</label>
              @if($errors->has('image'))
                    @foreach ($errors->get('image') as $error)
                          <div class="text-danger">
                                {{$errors->first('image')}}
                          </div>
                    @endforeach
              @endif
              <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
        </div>
</form>

@stop --}}