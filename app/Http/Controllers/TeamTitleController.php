<?php

namespace App\Http\Controllers;

use App\TeamTitle;
use Illuminate\Http\Request;

class TeamTitleController extends Controller
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
        $teamTitle = TeamTitle::all();
        return view('backoffice.teamtitle',compact('teamTitle'));
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
     * @param  \App\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function show(TeamTitle $teamTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teamTitle = TeamTitle::find($id);
        return view('backoffice.teamtitleEdit',compact('teamTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teamTitle = TeamTitle::find($id);
        $teamTitle->title=request('title');
        $teamTitle->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamTitle $teamTitle)
    {
        //
    }
}
