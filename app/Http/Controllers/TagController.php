<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Pivot;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTag;

class TagController extends Controller
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
        $this->authorize('view', Tag::class);
        $tags = Tag::all();
        return view('tags.tags',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Tag::class);
        return view('tags.createTag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTag $request)
    {
        $this->authorize('create', Tag::class);
        $new = new Tag;
        $new->user_id = Auth::id();
        $new->name = $request->name;
        $new->save(); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $id)
    {
        $this->authorize('view', Tag::class);
        $tag = $id ;
        return view('tags.showTag',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $id)
    {
        $this->authorize('create', Tag::class);
        $tag = $id ;
        return view('tags.editTag',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTag $request, Tag $id)
    {
        $this->authorize('update', $id);
        $id->name = $request->name;
        $id->save();
        return $this->index();
    }

    public function valid(Request $request, Tag $id)
    {
        $id->validation = $request->validation;
        $id->save();
        return back();
    }

    /**
     * Remove the specified re    //source from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $id)
    {
        $this->authorize('delete', $id);
        Pivot::where('tag_id',$id->id)->delete();
        $id->delete();
        return $this->index();
    }
}
