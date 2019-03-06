@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
<h4>{{$article->title}}</h4>
<h5>{{$article->content}}</h5>
@if($article->image == "storage/img/blog/blog-2.jpg" || $article->image == "storage/img/blog/blog-1.jpg"|| $article->image == "storage/img/blog/blog-3.jpg")
<div><img src="{{asset($article->image)}}" style="max-width:100%"></div>

@else

<div><img src="{{Storage::disk('image')->url($article->image)}}" style="max-width:100%"></div>
@endif
<a href="{{route('editArticle',['id'=> $article->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteArticle',['id'=>$article->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete article</button>
    </form>
@stop