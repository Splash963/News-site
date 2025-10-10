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

        return view('news', compact('recent_news', 'main_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category', '!=', 'announcement')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function getMainData()
    {
        return Home::where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();
    }

    public function crime()
    {
        return view('admin.news.crime');
    }

    public function sports()
    {
        return view('admin.news.sports');
    }

    public function world()
    {
        return view('admin.news.world');
    }

    public function business()
    {
        return view('admin.news.business');
    }

    public function education()
    {
        return view('admin.news.education');
    }

    public function health()
    {
        return view('admin.news.health');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    }

    
}
