@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Content</h1>
    @can('Editor')
<a href="{{route('createArticle')}}" class="btn btn-primary">Créer Article</a>
<br>
<a href="{{route('createCategorie')}}" class="btn btn-primary">Créer Catégorie</a>
<br>
<a href="{{route('contenu')}}" class="btn btn-primary">Contenu créé</a>
<br>
<a href="{{route('createTag')}}" class="btn btn-primary">Créer Tag</a>
<br>
@endcan

@can('Admin')
<a href="{{route('validate')}}" class="btn btn-success">Contenu à valider</a>
<br>
<a href="{{route('articlelist')}}" class="btn btn-primary">Liste Article</a>
<br>
<a href="{{route('categorielist')}}" class="btn btn-primary">Liste Catégories</a>
<br>
<a href="{{route('taglist')}}" class="btn btn-primary">Liste Tags</a>
<br>

<a href="{{route('users')}}" class="btn btn-success">Liste d'utilisateurs</a>
@endcan
@stop

@section('content')

@stop