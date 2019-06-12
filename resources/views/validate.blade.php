@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Validations</h1>
@stop

@section('content')
<h2>ARTICLE</h2>
    @foreach($article as $item)
    <div class="col-2">{{$item->title}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <form action="{{route('validArticle',['id'=>$item->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @csrf
<input type="hidden"
          class="form-control" name="validation" aria-describedby="helpId" value="{{'valide'}}">

      <button type="submit" class="btn btn-success"> Valider </button>
      <br> <br>
    @endforeach

    <h2>COMMENTS</h2>
    @foreach($comment as $item)
    <div class="col-2">{{$item->content}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <form action="{{route('validComment',['id'=>$item->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @csrf
<input type="hidden"
          class="form-control" name="validation" aria-describedby="helpId" value="{{'valide'}}">

      <button type="submit" class="btn btn-success"> Valider </button>
    <br>
    @endforeach

    <h2>TAGS</h2>
    @foreach($tag as $item)
    <div class="col-2">{{$item->name}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <form action="{{route('validTag',['id'=>$item->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @csrf
<input type="hidden"
          class="form-control" name="validation" aria-describedby="helpId" value="{{'valide'}}">

      <button type="submit" class="btn btn-success"> Valider </button>
    <br>
    @endforeach

    <h2>CATEGORIES</h2>
    @foreach($categorie as $item)
    <div class="col-2">{{$item->name}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <form action="{{route('validCategorie',['id'=>$item->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @csrf
<input type="hidden"
          class="form-control" name="validation" aria-describedby="helpId" value="{{'valide'}}">

      <button type="submit" class="btn btn-success"> Valider </button>
    <br>
    @endforeach
@stop