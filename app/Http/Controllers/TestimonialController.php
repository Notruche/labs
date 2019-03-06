<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestimonials;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
    return view('testimonials.testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.createTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonials $request)
    {
        $new = new Testimonial;
        $new->name = $request->name;
        $new->rank = $request->rank;
        $new->comment = $request->comment;
        $new->image = $request->image->store('','image');
        $new->save(); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $id)
    {
        $testimonial = $id ;
        return view('testimonials.showTestimonial',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $id)
    {
        $testimonial = $id ;
        return view('testimonials.editTestimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTestimonials $request, Testimonial $id)
    {
        $id->name = $request->name;
        $id->rank = $request->rank;
        $id->comment = $request->comment;
        $id->image = $request->image->store('','image');
        $id->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $id)
    {
        $id->delete();
        return $this->index();
    }
}
