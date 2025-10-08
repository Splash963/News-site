<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

class PoliticsController extends Controller
{
    public function index()
    {
        $politics = News::where('category', 'politics')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first(); // or ->get() if expecting multiple

        return view('politics', compact('politics'));

        return view('admin.news.politics');
    }

    public function view_data()
    {
        $politics = News::where('category', 'politics')->get();
        return view('admin.news.politics', compact('politics'));
    }

    public function destroy($id)
    {
        $politics = News::findOrFail($id);
        $politics->delete();

        return redirect()->route('news.politics')->with('success', 'Politic News deleted successfully.');
    }

}
