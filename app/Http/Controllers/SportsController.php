<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'sports')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('sports', compact('main_news', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','sports')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $sports = Home::where('category', 'sports')->get();
        return view('admin.news.sports', compact('sports'));
    }

    public function destroy($id)
    {
        $sports = Home::findOrFail($id);
        $sports->delete();

        return redirect()->route('news.sports')->with('success', 'Sports News deleted successfully.');
    }
}
