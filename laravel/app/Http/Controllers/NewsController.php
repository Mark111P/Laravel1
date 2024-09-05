<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allNews = News::all();

        return view('news.index', compact('allNews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = "empty";
        return view('news.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->summary = $request->get('summary');
        $news->short_description = $request->get('short_description');
        $news->full_text = $request->get('full_text');
        $news->image = $request->get('image');
        $news->save();
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::where('id', $id)->first();
        return view('news.more', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::where('id', $id)->first();
        return view('news.create', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        News::where('id',$id)->update(['summary'=>$request->get('summary'), "short_description"=>$request->get('short_description'), "full_text"=>$request->get('full_text'), "image"=>$request->get('image')]);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
