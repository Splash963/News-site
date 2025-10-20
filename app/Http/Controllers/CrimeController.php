<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'crime')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();

        return view('crime', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data(){
        return Home::where('category','crime')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category','crime')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function view_data()
    {
        $crime = Home::where('category', 'crime')->paginate(10);
        return view('admin.news.crime', compact('crime'));
    }

    public function destroy($id)
    {
        $crime = Home::findOrFail($id);
        $crime->delete();

        return redirect()->route('news.crime')->with('success', 'Crime News deleted successfully.');
    }
}
