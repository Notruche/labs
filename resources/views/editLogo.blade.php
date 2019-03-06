@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content</h1>
@stop

@section('content')
<form action="{{route('updateLogo',['id'=>$logo[0]->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<input type="file"
name="img" id="img" placeholder="">
<button type="submit"> Submit </button>
</form>
@stop