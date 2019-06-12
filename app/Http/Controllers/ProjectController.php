<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjet;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('edit', Content::class);
        $projets = Project::all();
        return view('projets.projets',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('edit', Content::class);
        return view('projets.createProjet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjet $request)
    {
        $this->authorize('edit', Content::class);
        $new = new Project;
        $new->title = $request->title;
        $new->desc = $request->desc;
        $new->icon=$request->icon;
        $new->image = $request->image->store('','image');
        $new->save(); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $id)
    {
        $this->authorize('edit', Content::class);
        $projet = $id ;
        return view('projets.showProjet',compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $id)
    {
        $this->authorize('edit', Content::class);
        $projet = $id ;
        return view('projets.editProjet',compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjet $request, Project $id)
    {
        $this->authorize('edit', Content::class);
        $id->title = $request->title;
        $id->desc = $request->desc;
        $id->icon = $request->icon;
        $id->image = $request->image->store('','image');
        $id->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
