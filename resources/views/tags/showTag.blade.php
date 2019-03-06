@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tags</h1>
@stop

@section('content')
<h4>{{$tag->name}}</h4>
<a href="{{route('editTag',['id'=> $tag->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteTag',['id'=>$tag->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@stop