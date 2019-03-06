@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Liste utilisateurs</h1>
@stop

@section('content')
    @foreach($user as $item)
<a href="{{route('showUser',['id'=> $item->id])}}">{{$item->name}}</a> 
    {{$item->role->name}}
    <br>
    @endforeach

    <a href="{{route('createUser')}}" class="btn btn-primary">Créer User</a>
@stop