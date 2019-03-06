@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Gallerie</h1>
@stop

@section('content')
<div class="row">
@foreach($mainImage as $item)
    @if($item->image == "storage/img/01.jpg" || $item->image == "storage/img/02.jpg")
    <div class="col-4">
            <a href="{{route('showMainImage',['id'=> $item->id])}}">
                <img src="{{asset($item->image)}}" style="max-width:100%" class="mb-2">
            </a>
            </div>
    @else
<div class="col-4">
<a href="{{route('showMainImage',['id'=> $item->id])}}">
    <img src="{{Storage::disk('image')->url($item->image)}}" style="max-width:100%" class="mb-2">
</a>
</div>
@endif
@endforeach
</div>
<a href="{{route('createMainImage')}}" class="btn btn-primary">Ajouter une image au carousel</a>
@stop