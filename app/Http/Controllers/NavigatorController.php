<?php

namespace App\Http\Controllers;

use App\Navigator;
use Illuminate\Http\Request;

class NavigatorController extends Controller
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
        $link = Navigator::all();
        return view('backoffice.link',compact('link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.linkCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    
        $link = new Navigator();
        $link->name=request('name');
        $link->link=request('link');
        $link->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navigator  $navigator
     * @return \Illuminate\Http\Response
     */
    public function show(Navigator $navigator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navigator  $navigator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Navigator::find($id);
        return view('backoffice.linkEdit',compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navigator  $navigator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $link = Navigator::find($id);
        $link->name=request('name');
        $link->link=request('link');
        
        $link->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navigator  $navigator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Navigator::find($id);
       
        $table->delete();
        return redirect()->back();
    }
}
