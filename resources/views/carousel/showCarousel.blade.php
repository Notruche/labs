@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Gallerie</h1>
@stop

@section('content')
@if($image->image == "storage/img/01.jpg" || $image->image == "storage/img/02.jpg")
<div><img src="{{asset($image->image)}}" style="max-width:100%"></div>

@else

<div><img src="{{Storage::disk('image')->url($image->image)}}" style="max-width:100%"></div>
@endif
<br>
<a href="{{route('editMainImage',['id'=> $image->id])}}" class="btn btn-success">Changer d'image</a>
<form action="{{route('deleteMainImage',['id'=>$image->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete image</button>
    </form>
@stop