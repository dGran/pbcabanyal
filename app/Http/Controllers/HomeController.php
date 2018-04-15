<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Post;
use App\Http\Models\Banner;
use App\Http\Models\GlobalAd;

use App\Http\Models\PostCategory;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $ads = GlobalAd::where('active', '=', 1)->orderBy('id', 'desc')->get();
        $banners = Banner::orderBy('id', 'asc')->get();
        $opinions = Post::where('category_id', '=', 15)
            ->orderBy('created_at', 'desc')->limit(5)->get();
        $posts = Post::where('visible', '=', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('home', compact('banners', 'posts', 'opinions', 'ads'));
    }

    public function penya()
    {
        return view('penya');
    }

    public function page($id) {
        $page = PostCategory::findOrFail($id);

        dd($page->name);
    }
}
