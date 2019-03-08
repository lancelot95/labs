@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE USER</h1>
@stop

@section('content')
{{-- <a class="btn btn bg-blue" href="{{route('home')}}">Page précédente</a> --}}
<a class="btn btn bg-blue" href="{{route('user.index')}}">Base de donnée</a>
  <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">

  @csrf
      <div class="form-group">
            <label for="">Name</label>
            @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control {{$errors-> has('name')?'border-danger':''}}" name="name" id="" rows="3" value="{{old('name')}}"></textarea>
      </div>

      <div class="form-group">
            <label for="">Email</label>
            @if($errors->has('email'))
                  @foreach ($errors->get('email') as $error)
                        <div class="text-danger">
                              {{$errors->first('email')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control{{$errors-> has('email')?'border-danger':''}}" name="email" id="" rows="3" value="{{old('email')}}"></textarea>
      </div>

      <div class="form-group">
            <label for="">password</label>
            @if($errors->has('password'))
                  @foreach ($errors->get('password') as $error)
                        <div class="text-danger">
                              {{$errors->first('password')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control{{$errors-> has('password')?'border-danger':''}}" name="password" id="" rows="3" value="{{old('password')}}"></textarea>
      </div>
      
      <div class="form-group">
                  <label for="">Image</label>
                  @if($errors->has('image'))
                        @foreach ($errors->get('image') as $error)
                              <div class="text-danger">
                                    {{$errors->first('image')}}
                              </div>
                        @endforeach
                  @endif
                  <input type="file" class="form-control {{$errors-> has('image')?'border-danger':''}}" name="image" id="" rows="3" value="{{old('image')}}">
      </div>
      <div class="form-group">
            <label for="">role</label>
            <select name="role_id">
                  @foreach ($roles as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
            </select>
           
      </div>
     

      <button class="btn-warning" type="submit">Submit</button>
    
  </form>
@stop