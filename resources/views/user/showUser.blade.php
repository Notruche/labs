@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>{{$user->name}}</h1>
@stop

@section('content')
Role : {{$user->role->name}}
<br>
<h3>Articles créés</h3>

@foreach($article as $item)
{{$item->title}}
<br>
@endforeach

<h4>Commentaires écrits</h4>
@foreach($comment as $item)
{{$item->content}}
<br>
@endforeach

<form action="{{route('deleteUser',['id'=>$user->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete User</button>
    </form>


@stop