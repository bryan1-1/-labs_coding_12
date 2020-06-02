<?php

namespace App\Http\Controllers;

use App\Baner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanerController extends Controller
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
        $baner=Baner::all();
        return view('backoffice.baner',compact('baner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.banerCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baner = $request->file('url');
        $newName = Storage::disk('public')->put('', $baner);
        $table = new Baner();
        $table->url = $newName;
        $table->slogan=request('slogan');
        $table->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baner=Baner::find($id);
        return view('backoffice.banerEdit',compact('baner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $baner = Baner::find($id);
        $baner->slogan=request('slogan');
        //
        if($request->hasFile('url')){
            
        Storage::disk('public')->delete($baner->url);
        $file = $request->file('url');
        $filename = Storage::disk('public')->put('', $file);
        $baner->url = $filename;
        }
        $baner->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Baner::find($id);
        Storage::disk('public')->delete($table->url);
        $table->delete();
        return redirect()->back();
    }
}
