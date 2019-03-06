<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\MainImage;
use App\Service;
use App\User;
use App\Logo;
use App\Subscriber;
use App\Testimonial;
use App\Events\MailEvent;
use App\Http\Requests\StoreNewsletter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mail(Request $request)
    {
        event(new MailEvent($request));
        return redirect()->back();
    }


    public function news(StoreNewsletter $request)
    {
        $new = new Subscriber;
        $new->email = $request->email;
        $new->save(); 
        event(new MailEvent($request));
        return redirect()->back();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $content = Content::all();
        $mainImage = MainImage::all();
        $logo = Logo::all();
        $testimonials = Testimonial::all();
        $services = Service::paginate(9);
        $users = User::paginate(3);
        $randomserv= $services->random(3);
        return view('home',compact('content','mainImage','logo','testimonials','services','randomserv','users'));
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
     * @param  \App\Content  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Content $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $id)
    {
        $content = $id ;
        return view('editContent',compact('content'));
    }

    public function editLogo()
    {
        $logo = Logo::all();
        return view('editLogo',compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $id)
    {
        $id->title = $request->title;
        $id->save();
        return $this->index();
    }

    public function updateLogo(Request $request, Logo $id)
    {
        $id->img = $request->img->store('','image');
        $id->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $blog)
    {
        //
    }
}

