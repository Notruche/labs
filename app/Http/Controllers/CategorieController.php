<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Article;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('change');
    }

    public function indexlist()
    {
        $categories = Categorie::all();
        return view('categories.categorie',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Categorie::class);
        return view('categories.createCategorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorie $request)
    {
        $this->authorize('create', Categorie::class);
        $new = new Categorie;
        $new->name = $request->name;
        $new->user_id = Auth::id();
        $new->save(); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $id)
    {
        $this->authorize('view', Categorie::class);
        $categorie = $id ;
        return view('categories.showCategorie',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $id)
    {
        $this->authorize('create', Categorie::class);
        $categorie = $id ;
        return view('categories.editCategorie',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategorie $request, Categorie $id)
    {
        $this->authorize('update', $id);
        $id->name = $request->name;
        $id->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $id)
    {
        $this->authorize('delete', $id);
        Article::where('categorie_id',$id->id)->delete();
        $id->delete();
        return $this->index();
    }

    public function valid(Request $request, Categorie $id)
    {
        $id->validation = $request->validation;
        $id->save();
        return back();
    }
}
