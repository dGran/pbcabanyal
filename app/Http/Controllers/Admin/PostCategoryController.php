<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostCategoryController extends Controller
{
	public function index()
	{
		$posts = PostCategory::orderBy('id', 'desc')->paginate(10);
		return view('admin.posts.index', compact('posts'));
	}

	public function create()
	{
		$categories = PostCategory::orderBy('name', 'asc')->get();
		return view('admin.posts.create', compact('categories'));
	}
}
