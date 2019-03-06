@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Testimonials</h1>
@stop

@section('content')
<form action="{{route('storeTestimonial')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text"
          class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
      </div>

      @if($errors->has('name'))
      @foreach($errors->get('name') as $error)
      <div class="text-danger">{{$error}}</div>
      @endforeach
      @endif

      <div class="form-group">
        <label for="rank">Profession :</label>
        <input type="text"
          class="form-control" name="rank" id="rank" aria-describedby="helpId" placeholder="">
      </div>

      @if($errors->has('rank'))
      @foreach($errors->get('rank') as $error)
      <div class="text-danger">{{$error}}</div>
      @endforeach
      @endif

    <div class="form-group">
        <label for="comment">Commentaire :</label>
        <textarea type="text"
          class="form-control" name="comment" id="comment" aria-describedby="helpId" placeholder=""></textarea>
      </div>

      @if($errors->has('comment'))
      @foreach($errors->get('comment') as $error)
      <div class="text-danger">{{$error}}</div>
      @endforeach
      @endif

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