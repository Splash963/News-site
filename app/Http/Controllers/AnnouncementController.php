<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = News::where('category', 'announcement')->get();
        return view('admin.news.announcement', compact('announcements'));
    }

    public function homepage()
    {
        $announcements = News::where('category', 'announcement')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('announcements'));
    }

    public function edit($id)
    {
        $announcement = News::findOrFail($id);
        return view('admin.add-news', compact('announcement'));
    }

    public function update(Request $request, News $news)
    {
        return "Update method in AnnouncementController called.";
    }

    public function destroy($id)
    {
        $announcement = News::findOrFail($id);
        $announcement->delete();

        return redirect()->route('announcement.index')->with('success', 'Announcement deleted successfully.');
    }

}
