@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contenu créé</h1>
@stop

@section('content')

<h2>Articles écrits</h2>
    @foreach($article as $item)
    <div class="col-2">{{$item->title}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <br>
    <a href="{{route('editArticle',['id'=> $item->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteArticle',['id'=>$item->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete article</button>
    </form>
    @endforeach
    <br><br>


<h2>Commentaires écrits</h2>
    @foreach($comment as $item)
    <div class="col-2">{{$item->title}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <br>
    <a href="{{route('editComment',['id'=> $item->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteComment',['id'=>$item->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete comment</button>
    </form>
    @endforeach
    <br><br>


<h2>Tags créés</h2>
    @foreach($tag as $item)
    <div class="col-2">{{$item->title}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <br>
    <a href="{{route('editTag',['id'=> $item->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteTag',['id'=>$item->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete tag</button>
    </form>
    @endforeach
    <br><br>


<h2>Catégories créées</h2>
    @foreach($categorie as $item)
    <div class="col-2">{{$item->title}}</div>
    <div class="col-2">Etat</div>
    <div class="col-2">{{$item->validation}}</div> 
    <br>
    <a href="{{route('editCategorie',['id'=> $item->id])}}" class="btn btn-success">Edit</a>
<form action="{{route('deleteCategorie',['id'=>$item->id])}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Delete catégorie</button>
    </form>
    @endforeach
    <br><br>
@stop