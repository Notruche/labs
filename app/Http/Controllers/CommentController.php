<?php

namespace App\Http\Controllers;

use Auth;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('edit', Content::class);
        $comments = Comment::all();
        return view('comment.comment', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Article::class);
        return view('comment.createComment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Article::class);
        $new = new Comment;
        $new->content = $request->content;
        $new->article_id = $request->article_id;
        $new->user_id = Auth::id();
        $new->date = Carbon::now()->format('d M Y');;
        $new->save(); 
        return back();
    }

    public function valid(Request $request, Comment $id)
    {
        $id->validation = $request->validation;
        $id->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $id)
    {
        $this->authorize('view', $id);
        $comment = $id ;
        return view('comment.showComment',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $id)
    {
        $comment = $id ;
        return view('comment.editComment',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $id)
    {
        $this->authorize('update', $id);
        $id->comment = $request->comment;
        $id->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $id)
    {
        $this->authorize('delete', $id);
        $id->delete();
        return $this->index();
    }
}
