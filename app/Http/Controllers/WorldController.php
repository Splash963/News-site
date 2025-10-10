<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    public function index()
    {
        $world = Home::where('category', 'world-news')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('world', compact('world', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','world-news')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $world = Home::where('category', 'world-news')->get();
        return view('admin.news.world', compact('world'));
    }

    public function destroy($id)
    {
        $world = Home::findOrFail($id);
        $world->delete();

        return redirect()->route('news.world')->with('success', 'World News deleted successfully.');
    }
}
