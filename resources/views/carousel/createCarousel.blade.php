@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Gallerie</h1>
@stop

@section('content')
<form action="{{route('storeMainImage')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file"
    name="image" id="image" placeholder="">


    <button type="submit"> Submit </button>
    </form>
@stop