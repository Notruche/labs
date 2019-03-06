@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
<form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-012-cube">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-012-cube"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-043-sketch">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-043-sketch"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-018-laptop-1">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-018-laptop-1"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-026-search">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-026-search"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-036-brainstorming">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-036-brainstorming"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-039-vector">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-039-vector"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-037-idea">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-037-idea"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-011-compass">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-011-compass"></i>
    </div></button>

</form>



    <form action="{{route('updateServiceicon',['id'=>$service->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group" style="visibility: hidden">
    <label for="icon"></label>
    <input type="text"
      class="form-control" name="icon" id="icon" aria-describedby="helpId" value="flaticon-023-flask">
  </div>

<button type="submit"> <div class="icon" style="font-size: 40px;
    margin-right: 30px;">
        <i class="flaticon-023-flask"></i>
    </div></button>

</form>

@stop