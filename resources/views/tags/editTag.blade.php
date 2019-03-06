@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tags</h1>
@stop

@section('content')
<form action="{{route('updateTag',['id'=>$tag->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group">
    <label for="name">Name :</label>
    <input type="text"
      class="form-control" name="name" id="name" aria-describedby="helpId" value="{{old('name',$tag->name)}}">
  </div>

  @if($errors->has('name'))
  @foreach($errors->get('name') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif

<button type="submit"> Submit </button>
@stop