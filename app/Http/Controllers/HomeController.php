<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $announcements = $this->getAnnouncement();
        $recent_news = $this->getRecentNews();
        $main_news = $this->getMainData();
        $recent_politics = $this->getRecentPolitics();
        $recent_sports = $this->getRecentSports();
        $recent_world = $this->getRecentWorld();

        return view('home', compact('announcements', 'recent_news', 'main_news', 'recent_politics', 'recent_sports', 'recent_world'));
    }

    public function getAnnouncement()
    {
        return Home::where('category', 'announcement')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
    }

    public function getRecentNews()
    {
        return Home::where('category', '!=', 'announcement')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function getMainData()
    {
        return Home::where('news_type', 'main')
            ->where('category', '!=', 'announcement')
            ->orderBy('created_at', 'desc')
            ->first();
    }

    public function getRecentPolitics()
    {
        return Home::where('category', 'politics')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function getRecentSports()
    {
        return Home::where('category', 'sports')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function getRecentWorld()
    {
        return Home::where('category', 'world-news')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'news_type' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news_images'), $imageName);
            $imagePath = 'news_images/' . $imageName;
        }

        Home::create([
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $update = Home::findOrFail($id);
        return view('admin.update-news', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'news_type' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $update = Home::findOrFail($id);

        // ✅ Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($update->image_path && file_exists(public_path('news_images/' . $update->image_path))) {
                unlink(public_path('news_images/' . $update->image_path));
            }

            // Save new image to public/news_images
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news_images'), $imageName);

            // ✅ Assign to correct column name
           $validated['image_path'] = 'news_images/' . $imageName;
        }

        // ✅ Update model with all validated fields
        $update->update($validated);

        return redirect()->route('admin-dashboard')->with('Success', 'News Update Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
