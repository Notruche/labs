@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Catégories</h1>
@stop

@section('content')
<h4>{{$categorie->name}}</h4>
<a href="{{route('editCategorie',['id'=> $categorie->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteCategorie',['id'=>$categorie->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@stop