<?php

namespace App\Http\Controllers;

use App\Icon;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $icon = Icon::all();
        $service=Service::all();
        return view('backoffice.service',compact('icon','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icon = Icon::all();
        $service=Service::all();
       return view('backoffice.serviceCreate',compact('icon','service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $table = new Service();
        $table->title=request('title');
        $table->description=request('description');
        $table->icon_id=$request->icon_id;
        $table->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $icon = Icon::find($id);
        $service=Service::find($id);
        return view('backoffice.serviceEdit',compact('icon','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $service = Service::find($id);
        $service->title=request('title');
        $service->description=request('description');
        // $service->icon_id=$request->icon_id;
        $service->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Service::find($id);
        $table->delete();
        return redirect()->back();
    }
}
