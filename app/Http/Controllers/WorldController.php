<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'world-news')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();

        return view('world', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data(){
        return Home::where('category','world-news')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category','world-news')
            ->orderBy('created_at', 'desc')
            ->take(5)
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
