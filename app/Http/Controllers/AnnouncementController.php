<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Home::where('category', 'announcement')->paginate(10);
        return view('admin.news.announcement', compact('announcements'));
    }

    public function edit($id)
    {
       
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
