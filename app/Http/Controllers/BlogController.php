<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Article;
use App\Categorie;
use App\Tag;
use App\Pivot;
use App\User;
use DB;
use Auth;
use App\Comment;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::where('validation','valide')->paginate(3);
        $categorie = Categorie::has('article')->get();
        $tags = Tag::has('articles')->get();
        return view('blog.blog', compact('article','categorie','tags'));
    }

    public function filter(Request $request)
    {
            $search = Input::get ( 'search' );
            $article = Article::where([
                ['title','LIKE','%'.$search.'%'],
                ['validation','valide']])->paginate(3);
                $categorie = Categorie::has('article')->get();
                $tags = Tag::has('articles')->get();
            if(count($article) > 0)
                return view('blog.blog',compact('article','categorie','tags'));
            else return view ('blog.blog',compact('article','categorie','tags'))->withMessage('No Details found. Try to search again !');
    }

    public function filterCate(Categorie $id)
    {
            $search = $id->id;
            $article = Article::where([
                ['categorie_id',$search],
                ['validation','valide']])->paginate(3);
                $categorie = Categorie::has('article')->get();
                $tags = Tag::has('articles')->get();
            if(count($article) > 0)
                return view('blog.blog',compact('article','categorie','tags'));
            else return view ('blog.blog',compact('article','categorie','tags'))->withMessage('No Details found. Try to search again !');
    }

    public function filterTag(Tag $tag)
    {
        $id = $tag->id;
        $article = Article::whereHas('tags',function($q) use ($id) {$q->where([['tag_id',$id],['validation','valide']]);
        })->paginate(3);
        $categorie = Categorie::has('article')->get();
        $tags = Tag::has('articles')->get();
        if(count($article) > 0)
            return view('blog.blog',compact('article','categorie','tags'));
        else return view ('blog.blog',compact('article','categorie','tags'))->withMessage('No Details found. Try to search again !');
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
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Article $id)
    {
        $article = $id ;
        $comment = Comment::where([
            ['article_id',$article->id],
            ['validation','valide'],
        ])->get();
        $categorie = Categorie::has('article')->get();
        $tags = Tag::has('articles')->get();
        return view('blog.showBlog',compact('article','categorie','tags','comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
