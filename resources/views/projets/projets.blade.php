@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
@foreach($projets as $item)
<a href="{{route('showProjet',['id'=> $item->id])}}">{{$item->title}}</a>
<br>
@endforeach
<a href="{{route('createProjet')}}" class="btn btn-primary">Ajouter Projets</a>
@stop