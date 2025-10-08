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


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'news_type' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news_images'), $imageName);
            $imagePath = 'news_images/' . $imageName;
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'news_type' => $request->news_type,
            'category' => $request->category,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('add-news')->with('success', 'News added successfully!');
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
