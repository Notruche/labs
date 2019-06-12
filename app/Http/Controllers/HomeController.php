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
use App\Http\Requests\StoreContent;
use App\Http\Requests\StoreContact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
        //$this->middleware('auth');
    //}

    public function mail(StoreContact $request)
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
        $use=User::where('role_id',2)->get();
        $user1 = $use->random(1);
        $user2=User::where('role_id',1)->paginate(1);
        $user3=$use->random(1);
        if($user1 == $user3){
            return $this->index();
        }
        else{
        $randomserv= $services->random(3);
        return view('welcome',compact('content','mainImage','logo','testimonials','services','randomserv','user1','user2','user3'));
    }
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
        $this->authorize('edit', Content::class);
        $content = $id ;
        return view('editContent',compact('content'));
    }

    public function editLogo()
    {
        $this->authorize('edit', Content::class);
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
    public function update(StoreContent $request, Content $id)
    {
        $this->authorize('edit', Content::class);
        $id->title = $request->title;
        $id->save();
        return $this->index();
    }

    public function updateLogo(Request $request, Logo $id)
    {
        $this->authorize('edit', Content::class);
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

