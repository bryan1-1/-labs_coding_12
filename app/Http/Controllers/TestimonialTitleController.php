<?php

namespace App\Http\Controllers;

use App\TestimonialTitle;
use Illuminate\Http\Request;

class TestimonialTitleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','ifAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonialTitle = TestimonialTitle::all();
        return view('backoffice.testimonialt',compact('testimonialTitle'));
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
     * @param  \App\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialTitle $testimonialTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonialTitle = TestimonialTitle::find($id);
        return view('backoffice.testimonialtEdit',compact('testimonialTitle'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonialTitle = TestimonialTitle::find($id);
        $testimonialTitle->title=request('title');
        
        

        $testimonialTitle->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialTitle $testimonialTitle)
    {
        //
    }
}
