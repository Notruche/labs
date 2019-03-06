@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content</h1>
@stop

@section('content')
<form action="{{route('updateContent',['id'=>$content->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group">
    <label for="title"></label>
    <textarea type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">{{$content->title}}</textarea>
  </div>
<button type="submit"> Submit </button>
</form>
@stop