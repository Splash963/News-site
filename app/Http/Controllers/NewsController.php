<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Home;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recent_news = $this->getRecentNews();
        $main_news = $this->getMainData();
        $all_news = $this->all_data();

        return view('news', compact('recent_news', 'main_news', 'all_news'));
    }

    public function all_data()
    {
        return Home::where('category', '!=', 'announcement')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category', '!=', 'announcement')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function getMainData()
    {
        return Home::where('news_type', 'main')
            ->where('category', '!=', 'announcement')
            ->orderBy('created_at', 'desc')
            ->first();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $main_news = Home::findOrFail($id);
        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();
        return view('news', compact('main_news', 'recent_news', 'all_news'));
    }
}
