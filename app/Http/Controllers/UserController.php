<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Article;
use App\Role;
use App\Pivot;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $role = Role::all();
        return view('user.createUser',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new User;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->password = $request->password;
        $new->image = $request->image->store('','image');
        $new->role_id = $request->role_id;
        $new->save(); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        $user = $id ;
        $article = Article::where("user_id",$user->id)->get();
        $comment = Comment::where("user_id",$user->id)->get();
        return view('user.showUser',compact('article','comment','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        
        foreach($id->article as $item){
        Pivot::where('article_id',$item->id)->delete();
        };
        Comment::where('user_id',$id->id)->delete();
        Article::where('user_id',$id->id)->delete();
        $id->delete();
        return $this->index();
    }
}
