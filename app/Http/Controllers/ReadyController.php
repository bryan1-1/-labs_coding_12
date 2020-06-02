<?php

namespace App\Http\Controllers;

use App\Ready;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReadyController extends Controller
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
        $ready=Ready::all();
        return view('backoffice.ready',compact('ready'));
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
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ready=Ready::find($id);
        return view('backoffice.readyEdit',compact('ready'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ready = Ready::find($id);
        $ready->title=request('title');
        $ready->subtitle=request('subtitle');
        $ready->button=request('button');
        $ready->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
