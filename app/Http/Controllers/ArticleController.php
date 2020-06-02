<?php

namespace App\Http\Controllers;

use App\Article;
use App\Logo;
use App\Navigator;
use App\Reaction;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Article'])->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();
        $tag=Tag::all();
        return view('backoffice.article',compact('article','tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag=Tag::all();
        $article=Article::all();
        return view('backoffice.articleCreate',compact('article','tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'date' => 'required',
            'author' => 'required',
            'text' => 'required',
            'job' => 'required',
            ]);
        // if ($request->hasFile('url')&&$request->hasFile('authorUrl')) {
        //     $imageName = $request->image->store('public');
        // }else{
        //     return 'No';
        // }
        $articleImage = $request->file('url');
        $newName = Storage::disk('public')->put('', $articleImage);
        $articleImage2 = $request->file('authorUrl');
        $newName2 = Storage::disk('public')->put('', $articleImage2);

        $article = new Article;
        $article->url = $newName;
        $article->authorUrl=$newName2;
        $article->title = $request->title;
        $article->date = $request->date;
        $article->author = $request->author;
        $article->job = $request->job;
        $article->text = $request->text;
        $article->description=$request->description;

        $article->save();
        $article->tags()->sync($request->tag);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag=Tag::all();
        $article=Article::find($id);
        $logo=Logo::all();
        $navigator=Navigator::all();
        $reaction=Reaction::all();
        return view('/BlogPost',compact('reaction','article','tag','logo','navigator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag=Tag::all();
        $article=Article::find($id);
        return view('backoffice.articleEdit',compact('tag','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'date' => 'required',
            'author' => 'required',
            'text' => 'required',
            'job' => 'required',
            ]);
        // if ($request->hasFile('url')&&$request->hasFile('authorUrl')) {
        //     $imageName = $request->image->store('public');
        // }else{
        //     return 'No';
        // }
        $articleImage = $request->file('url');
        $newName = Storage::disk('public')->put('', $articleImage);
        $articleImage2 = $request->file('authorUrl');
        $newName2 = Storage::disk('public')->put('', $articleImage2);

        $article = Article::find($id);
        $article->url = $newName;
        $article->authorUrl=$newName2;
        $article->title = $request->title;
        $article->date = $request->date;
        $article->author = $request->author;
        $article->job = $request->job;
        $article->text = $request->text;
        $article->description=$request->description;
        $article->tags()->sync($request->tag);
        $article->save();
      
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Article::find($id);
        Storage::disk('public')->delete($table->url);
        Storage::disk('public')->delete($table->authorUrl);
        $table->delete();
        return redirect()->back();
    }
    
    // public function tag(){
    //    return $this->belongsToMany(Tag::class);
    // }
}
