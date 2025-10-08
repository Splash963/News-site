<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "This is the index method in NewsController.";
    }

    public function politics()
    {
        return view('admin.news.politics');
    }

    public function crime()
    {
        return view('admin.news.crime');
    }

    public function sports()
    {
        return view('admin.news.sports');
    }

    public function world()
    {
        return view('admin.news.world');
    }

    public function business()
    {
        return view('admin.news.business');
    }

    public function education()
    {
        return view('admin.news.education');
    }

    public function health()
    {
        return view('admin.news.health');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'news_type' => 'required|string',
            'category' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image_path'] = $request->file('image')->store('public/news_images');
        } else {
            $validatedData['image_path'] = null;
        }

        News::create($validatedData);
        return view('admin.add-news')->with('success', 'News item added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
