<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $education = Home::where('category', 'education')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();

        return view('education', compact('education', 'recent_news'));
    }

    public function getRecentNews()
    {
        return Home::where('category','education')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
    }

    public function view_data()
    {
        $view_data = Home::where('category', 'education')->get();
        return view('admin.news.education', compact('view_data'));
    }

    public function destroy($id)
    {
        $education = Home::findOrFail($id);
        $education->delete();

        return redirect()->route('news.education')->with('success', 'Education News deleted successfully.');
    }
}
