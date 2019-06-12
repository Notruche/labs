<?php

namespace App\Http\Controllers;

use App\Service;
use App\Content;
use App\Project;
use App\Http\Requests\StoreService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::all();
        $services = Service::paginate(9);
        $projets = Project::paginate(3)->sortByDesc('created_at');
        $projets2 = Project::paginate(6)->sortByDesc('created_at')->slice(3);
        return view('services.services',compact('content','services','projets','projets2'));
    }

    public function home()
    {
        $this->authorize('edit', Content::class);
        $services = Service::all();
        return view('gestionServices.services',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('edit', Content::class);
        return view('gestionServices.createService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreService $request)
    {
        $this->authorize('edit', Content::class);
        $new = new Service;
        $new->title = $request->title;
        $new->desc = $request->desc;
        $new->icon=$request->icon;
        $new->save(); 
        return $this->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $id)
    {
        $this->authorize('edit', Content::class);
        $service = $id ;
        return view('gestionServices.showService',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $id)
    {
        $this->authorize('edit', Content::class);
        $service = $id ;
        return view('gestionServices.editService',compact('service'));
    }

    public function editIcon(Service $id)
    {
        $this->authorize('edit', Content::class);
        $service = $id ;
        return view('gestionServices.editIcon',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(StoreService $request, Service $id)
    {
        $this->authorize('edit', Content::class);
        $id->title = $request->title;
        $id->desc = $request->desc;
        $id->icon = $request->icon;
        $id->save();
        return $this->home();
    }

    public function updateIcon(StoreService $request, Service $id)
    {

        return $this->home();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $id)
    {
        $this->authorize('edit', Content::class);
        $id->delete();
        return $this->home();
    }
}
