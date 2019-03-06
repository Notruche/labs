@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenu créé</h1>
@stop

@section('content')
    @foreach($article as $item)
    <div class="col-2">{{$item->title}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <br>
    <a href="{{route('editArticle',['id'=> $item->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteArticle',['id'=>$item->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete article</button>
    </form>
    @endforeach
@stop