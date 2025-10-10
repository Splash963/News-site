<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "This is the index method in NewsController.";
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
