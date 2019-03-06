@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tag</h1>
@stop

@section('content')
@foreach($tags as $item)
<a href="{{route('showTag',['id'=> $item->id])}}">{{$item->name}}</a>
<br>
@endforeach
<a href="{{route('createTag')}}" class="btn btn-primary">Créer Catégorie</a>
@stop