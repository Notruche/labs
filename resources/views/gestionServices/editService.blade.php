@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
<form action="{{route('updateService',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group">
    <label for="title">Titre :</label>
    <input type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" value="{{old('title',$service->title)}}">
  </div>

  @if($errors->has('title'))
  @foreach($errors->get('title') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif

  <div class="form-group">
    <label for="desc">Description :</label>
    <input type="text"
      class="form-control" name="desc" id="desc" aria-describedby="helpId" value="{{old('desc',$service->desc)}}">
  </div>

  @if($errors->has('desc'))
  @foreach($errors->get('desc') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif

<button type="submit"> Submit </button>
@stop