<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Home::where('category', 'business')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('business', compact('business', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','business')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $view_data = Home::where('category', 'business')->get();
        return view('admin.news.business', compact('view_data'));
    }

    public function destroy($id)
    {
        $business = Home::findOrFail($id);
        $business->delete();

        return redirect()->route('news.business')->with('success', 'Business News deleted successfully.');
    }
}
