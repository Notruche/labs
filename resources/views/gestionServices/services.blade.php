@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
@foreach($services as $item)
<a href="{{route('showService',['id'=> $item->id])}}">{{$item->title}}</a>
<br>
@endforeach
<a href="{{route('createService')}}" class="btn btn-primary">Ajouter Service</a>
@stop