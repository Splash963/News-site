<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Home::where('category', 'announcement')->get();
        return view('admin.news.announcement', compact('announcements'));
    }

    public function edit($id)
    {
        $announcement = Home::findOrFail($id);
        return view('admin.add-news', compact('announcement'));
    }

    public function update(Request $request, Home $news)
    {
        return "Update method in AnnouncementController called.";
    }

    public function destroy($id)
    {
        $announcement = Home::findOrFail($id);
        $announcement->delete();

        return redirect()->route('announcement.index')->with('success', 'Announcement deleted successfully.');
    }
}
