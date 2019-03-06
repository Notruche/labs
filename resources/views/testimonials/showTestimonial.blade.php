@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Testimonials</h1>
@stop

@section('content')
<h4>{{$testimonial->name}}</h4>
<h5>{{$testimonial->rank}}</h5>
<h6>{{$testimonial->comment}}</h6>
@if($testimonial->image == "storage/img/avatar/02.jpg" || $testimonial->image == "storage/img/avatar/01.jpg"|| $testimonial->image == "storage/img/avatar/03.jpg")
<div><img src="{{asset($testimonial->image)}}" style="max-width:100%"></div>

@else

<div><img src="{{Storage::disk('image')->url($testimonial->image)}}" style="max-width:100%"></div>
@endif
<a href="{{route('editTestimonial',['id'=> $testimonial->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteTestimonial',['id'=>$testimonial->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete testimonial</button>
    </form>
@stop