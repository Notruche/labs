@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
<form action="{{route('updateArticle',['id'=>$article->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group">
    <label for="title">Titre :</label>
    <input type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" value="{{old('title',$article->title)}}">
  </div>

  @if($errors->has('title'))
  @foreach($errors->get('title') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif

  <div class="form-group">
    <label for="content">Contenu :</label>
    <textarea class="form-control" id="summary-ckeditor" name="content">{{old('content',$article->content)}}</textarea>
  </div>

  @if($errors->has('content'))
  @foreach($errors->get('content') as $error)
  <div class="text-danger">{{$error}}</div>
  @endforeach
  @endif


  <div class="form-group">
    <select name="categorie_id" id="categorie_id">
        @foreach($categorie as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
    </select>
</div>

<input type="file"
name="image" id="image" placeholder="">

<div class="form-group">
@foreach($tags as $tag)
  <br>
  <input type="checkbox" name="tag_id[]" value="{{$tag->id}}">
  <h6>{{$tag->name}}</h6>
  @endforeach
</div> 

@if($errors->has('image'))
@foreach($errors->get('image') as $error)
<div class="text-danger">{{$error}}</div>
@endforeach
@endif

<button type="submit"> Submit </button>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

@stop