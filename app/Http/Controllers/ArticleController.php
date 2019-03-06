<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Tag;
use App\Pivot;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;
use Carbon\Carbon;

class ArticleController extends Controller
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
        $articles=Article::all();
    return view('article.article',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie= Categorie::all();
        $tags=Tag::all();
        return view('article.createArticle', compact('categorie','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $new = new Article;
        $new->title = $request->title;
        $new->content = $request->content;
        $new->categorie_id = $request->categorie_id;
        $new->image = $request->image->store('','image');
        $new->day = Carbon::now()->format('d');;
        $new->rest = Carbon::now()->format('M Y');
        $new->user_id = Auth::id();
        if(Auth::user()->role_id == 1){
            $new->validation = 'valide';
        };
        $new->save(); 
        $tag = Tag::find($request->tag_id);
        $new->tags()->attach($tag);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $id)
    {
        
        $article = $id ;
        return view('article.showArticle',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $id)
    {
        $article = $id ;
        $categorie= Categorie::all();
        $tags=Tag::all();
        return view('article.editArticle',compact('article','categorie','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticle $request, Article $id)
    {
        $id->title = $request->title;
        $id->content = $request->content;
        $id->categorie_id = $request->categorie_id;
        $id->image = $request->image->store('','image');
        $id->save();
        $tag = Tag::find($request->tag_id);
        $id->tags()->attach($tag);
        return $this->index();
    }

    public function valid(Request $request, Article $id)
    {
        $id->validation = $request->validation;
        $id->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $id)
    {
       
        Pivot::where('article_id',$id->id)->delete();
        $id->delete();
        return $this->index();
    }
}
