<?php

namespace App\Http\Controllers;

use App\MainImage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarousel;

class MainImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainImage = MainImage::all();
        return view('carousel.carousel',compact('mainImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carousel.createCarousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarousel $request)
    {
        $newimg = new MainImage;
        $newimg->image = $request->image->store('','image');
        $newimg->save(); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainImage  $mainImage
     * @return \Illuminate\Http\Response
     */
    public function show(MainImage $id)
    {
        $image = $id ;
        return view('carousel.showCarousel',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainImage  $mainImage
     * @return \Illuminate\Http\Response
     */
    public function edit(MainImage $id)
    {
        $image = $id ;
        return view('carousel.editCarousel',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainImage  $mainImage
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCarousel $request, MainImage $id)
    {
        $id->image = $request->image->store('','image');
        $id->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainImage  $mainImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainImage $id)
    {
        $id->delete();
        return $this->index();
    }
}
