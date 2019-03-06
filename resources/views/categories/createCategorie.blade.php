@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Catégories</h1>
@stop

@section('content')
<form action="{{route('storeCategorie')}}" method="POST" enctype="multipart/form-data">
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

    <button type="submit"> Submit </button>
    </form>
@stop