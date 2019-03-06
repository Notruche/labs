@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
@section('title', 'AdminLTE')

@section('content_header')
    <h1>Projets</h1>
@stop

@section('content')
<h4>{{$projet->title}}</h4>
<h5>{{$projet->desc}}</h5>
<div class="icon" style="font-size: 40px;
margin-right: 30px;">
    <i class="{{$projet->icon}}"></i>
</div>
@if($projet->image == "storage/img/card-1.jpg" || $projet->image == "storage/img/card-2.jpg"|| $projet->image == "storage/img/card-3.jpg")
<div><img src="{{asset($projet->image)}}" style="max-width:100%"></div>

@else

<div><img src="{{Storage::disk('image')->url($projet->image)}}" style="max-width:100%"></div>
@endif

<a href="{{route('editProjet',['id'=> $projet->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteProjet',['id'=>$projet->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete projet</button>
    </form>


@stop