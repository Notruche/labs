@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
@foreach($articles as $item)
<a href="{{route('showArticle',['id'=> $item->id])}}">{{$item->title}}</a>
<h6>Validation : {{$item->validation}}</h6>
<br>
@endforeach
@can('create', Article::class)
<a href="{{route('createArticle')}}" class="btn btn-primary">Créer Article</a>
@endcan
@stop