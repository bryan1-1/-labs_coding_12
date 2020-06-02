<?php

namespace App\Http\Controllers;

use App\Prime;
use Illuminate\Http\Request;

class PrimeController extends Controller
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
        $prime=Prime::all();
        return view('backoffice.prime',compact('prime'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function show(Prime $prime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prime=Prime::find($id);
        return view('backoffice.primeEdit',compact('prime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $prime = Prime::find($id);
        $prime->title=request('title');
        $prime->button=request('buttom');
        $prime->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prime $prime)
    {
        //
    }
}
