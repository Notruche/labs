@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
<h4>{{$service->title}}</h4>
<h5>{{$service->desc}}</h5>
<div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="{{$service->icon}}"></i>
</div>

<a href="{{route('editService',['id'=> $service->id])}}" class="btn btn-success">Edit</a>
<a href="{{route('editServiceicon',['id'=> $service->id])}}" class="btn btn-success">Edit icon</a>
<form action="{{route('deleteService',['id'=>$service->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete service</button>
    </form>


@stop