<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $main_news = Home::where('category', 'business')
            ->where('news_type', 'main')
            ->orderBy('created_at', 'desc')
            ->first();

        $recent_news = $this->getRecentNews();
        $all_news = $this->all_data();

        return view('business', compact('main_news', 'recent_news', 'all_news'));
    }

    public function all_data(){
        return Home::where('category','business')->paginate(10);
    }

    public function getRecentNews()
    {
        return Home::where('category','business')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function view_data()
    {
        $view_data = Home::where('category', 'business')->paginate(10);
        return view('admin.news.business', compact('view_data'));
    }

    public function destroy($id)
    {
        $data = Home::find($id);

        $image = public_path('news_images/' .$data->image_path);
        if (file_exists($image)) {
            unlink($image);
        }

        $data->delete();

        return redirect()->route('news.business')->with('success', 'Business News deleted successfully.');
    }
}
