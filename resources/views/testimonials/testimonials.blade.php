@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Testimonials</h1>
@stop

@section('content')
@foreach($testimonials as $item)
<a href="{{route('showTestimonial',['id'=> $item->id])}}">{{$item->name}}</a>
<br>
@endforeach
<a href="{{route('createTestimonial')}}" class="btn btn-primary">Ajouter Testimonial</a>
@stop