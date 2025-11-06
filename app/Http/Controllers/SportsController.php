<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'sports')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();

        return view('sports', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data(){
        return Home::where('category','sports')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category','sports')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function view_data()
    {
        $sports = Home::where('category', 'sports')->paginate(10);
        return view('admin.news.sports', compact('sports'));
    }

    public function destroy($id)
    {
        $data = Home::find($id);

        $image = public_path('news_images/' .$data->image_path);
        if (file_exists($image)) {
            unlink($image);
        }

        $data->delete();
        return redirect()->route('news.sports')->with('success', 'Sports News deleted successfully.');
    }
}
