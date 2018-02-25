<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opinions = Post::where('category_id', '=', 2)
            ->orderBy('created_at', 'desc')->paginate(5);
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('home', compact('posts', 'opinions'));
    }

    public function penya()
    {
        return view('penya');
    }
}
