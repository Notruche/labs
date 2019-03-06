<?php

namespace App\Http\Controllers;

use App\Pivot;
use App\Article;
use App\User;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class PivotController extends Controller
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

    public function content()
    {
        $article = Article::where('user_id','LIKE','%'.Auth::id().'%')->get();
        return view('contenu',compact('article'));

    }

    public function valid()
    {
        $article = Article::where('validation','en attente')->get();
        $comment = Comment::where('validation','en attente')->get();
        return view('validate',compact('article','comment'));

    }

    public function utili()
    {
        $user = User::all();
        return view('users',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pivot  $pivot
     * @return \Illuminate\Http\Response
     */
    public function show(Pivot $pivot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pivot  $pivot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pivot $pivot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pivot  $pivot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pivot $pivot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pivot  $pivot
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        Pivot::where('article_id',$id->article->id)->delete();
        Comment::where('user_id',$id->id)->delete();
        Article::where('user_id',$id->id)->delete();
        $id->delete();
        return $this->index();
    }
}
