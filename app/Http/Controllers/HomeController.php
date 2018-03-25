<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Banner;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $banners = Banner::orderBy('id', 'asc')->get();
        $opinions = Post::where('category_id', '=', 15)
            ->orderBy('created_at', 'desc')->limit(5)->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('home', compact('banners', 'posts', 'opinions'));
    }

    public function penya()
    {
        return view('penya');
    }
}
