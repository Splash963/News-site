<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'education')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();

        return view('education', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data()
    {
        return Home::where('category', 'education')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category', 'education')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function view_data()
    {
        $view_data = Home::where('category', 'education')->paginate(10);
        return view('admin.news.education', compact('view_data'));
    }

    public function destroy($id)
    {
       $data = Home::find($id);

        $image = public_path('news_images/' .$data->image_path);
        if (file_exists($image)) {
            unlink($image);
        }

        $data->delete();
        return redirect()->route('news.education')->with('success', 'Education News deleted successfully.');
    }
}
