@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
@foreach($categories as $item)
<a href="{{route('showCategorie',['id'=> $item->id])}}">{{$item->name}}</a>
<br>
@endforeach
<a href="{{route('createCategorie')}}" class="btn btn-primary">Créer Catégorie</a>
@stop