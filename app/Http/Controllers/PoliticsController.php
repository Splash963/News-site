<?php

namespace App\Http\Controllers;

use App\Models\Home;

use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class PoliticsController extends Controller
{

    public function index()
    {
        $main_news = Home::where('category', 'politics')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('politics', compact('main_news', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','politics')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $politics = Home::where('category', 'politics')->get();
        return view('admin.news.politics', compact('politics'));
    }

    public function destroy($id)
    {
        $politics = Home::findOrFail($id);
        $politics->delete();

        return redirect()->route('news.politics')->with('success', 'Politic News deleted successfully.');
    }
}
