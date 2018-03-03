<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(10);
		return view('admin.posts.index', compact('posts'));
	}

	public function create()
	{
		$categories = PostCategory::orderBy('name', 'asc')->get();
		return view('admin.posts.create', compact('categories'));
	}

	public function save(Request $request)
	{
        try{
        	$this->validate($request, [
        		'title' => 'required',
        		'detail' => 'required'
        	]);
        } catch(\Exception $e) {
            return back()->with('error', 'Debes completar todos los campos obligatorios');
        }
		$post = new Post;
		$post->title = $request->title;
		$post->detail = $request->detail;
		$post->slug = str_slug($request->title, "-");
		if ($request->category > 0) {
			$post->category_id = $request->category;
		}
		$post->visible = 1;
		$post->save();

		return redirect()->route('admin.posts')->with('message', 'Se ha agregado una nueva publicación');
	}
}
