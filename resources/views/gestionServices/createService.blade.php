@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
<form action="{{route('storeService')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="title">Titre :</label>
    <input type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" value="">
  </div>

  @if($errors->has('title'))
  @foreach($errors->get('title') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif

  <div class="form-group">
    <label for="desc">Description :</label>
    <input type="text"
      class="form-control" name="desc" id="desc" aria-describedby="helpId" value="">
  </div>

  @if($errors->has('desc'))
  @foreach($errors->get('desc') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif


  <div class="form-group">
    <label for="icon">Icone :</label>
    <br>
    <div class="row">
    <input type="radio" name="icon" id="icon" value="flaticon-023-flask"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-023-flask"></i>
    </div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-011-compass"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-011-compass"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-037-idea"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-037-idea"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-039-vector"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-039-vector"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-036-brainstorming"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-036-brainstorming"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-026-search"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-026-search"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-018-laptop-1"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-018-laptop-1"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-043-sketch"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-043-sketch"></i>
</div>
</div>

<br>
<div class="row">
<input type="radio" name="icon" id="icon" value="flaticon-012-cube"> <div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="flaticon-012-cube"></i>
</div>
</div>

  </div>

  @if($errors->has('icon'))
  @foreach($errors->get('icon') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif

<button type="submit"> Submit </button>
@stop