<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'health')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();

        return view('health', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data(){
        return Home::where('category','health')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category','health')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function view_data()
    {
        $view_data = Home::where('category', 'health')->paginate(10);
        return view('admin.news.health', compact('view_data'));
    }

    public function destroy($id)
    {
        $health = Home::findOrFail($id);
        $health->delete();

        return redirect()->route('news.health')->with('success', 'Health News deleted successfully.');
    }
}
