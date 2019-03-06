@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<form action="{{route('storeUser')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text"
          class="form-control" name="name"  aria-describedby="helpId" placeholder="">
      </div>

      @if($errors->has('title'))
      @foreach($errors->get('title') as $error)
      <div class="text-danger">{{$error}}</div>
      @endforeach
      @endif

      <div class="form-group">
        <label for="email">Email :</label>
        <input class="form-control" name="email">
      </div>

      <div class="form-group">
        <label for="password">Password :</label>
        <input class="form-control" name="password">
      </div>

      @if($errors->has('content'))
      @foreach($errors->get('content') as $error)
      <div class="text-danger">{{$error}}</div>
      @endforeach
      @endif

      <div class="form-group">
        <select name="role_id">
            @foreach($role as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
        </select>
    </div>

    <input type="file"
    name="image" id="image" placeholder="">


    @if($errors->has('image'))
    @foreach($errors->get('image') as $error)
    <div class="text-danger">{{$error}}</div>
    @endforeach
    @endif

    <button type="submit"> Submit </button>
    </form>
@stop