@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Gallerie</h1>
@stop

@section('content')
<form action="{{route('updateMainImage',['id'=>$image->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<input type="file"
name="image" id="image" placeholder="">

@if($errors->has('image'))
@foreach($errors->get('image') as $error)
<div class="text-danger">{{$error}}</div>
@endforeach
@endif

<button type="submit"> Submit </button>
</form>
@stop