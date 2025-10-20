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
        $all_news = $this->all_data();

        return view('politics', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data(){
        return Home::where('category','politics')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category','politics')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function view_data()
    {
        $politics = Home::where('category', 'politics')->paginate(10);
        return view('admin.news.politics', compact('politics'));
    }

    public function destroy($id)
    {
        $politics = Home::findOrFail($id);
        $politics->delete();

        return redirect()->route('news.politics')->with('success', 'Politic News deleted successfully.');
    }
}
