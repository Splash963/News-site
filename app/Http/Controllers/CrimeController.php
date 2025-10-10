<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function index()
    {
        $crime = Home::where('category', 'crime')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('crime', compact('crime', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','crime')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $crime = Home::where('category', 'crime')->get();
        return view('admin.news.crime', compact('crime'));
    }

    public function destroy($id)
    {
        $crime = Home::findOrFail($id);
        $crime->delete();

        return redirect()->route('news.crime')->with('success', 'Crime News deleted successfully.');
    }
}
