<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        $health = Home::where('category', 'health')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('health', compact('health', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','health')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $view_data = Home::where('category', 'health')->get();
        return view('admin.news.health', compact('view_data'));
    }

    public function destroy($id)
    {
        $health = Home::findOrFail($id);
        $health->delete();

        return redirect()->route('news.health')->with('success', 'Health News deleted successfully.');
    }
}
