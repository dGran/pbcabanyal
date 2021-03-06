<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Post;
use App\Http\Models\PostCategory;

class PostController extends Controller
{
	public function index(Request $request)
	{
		$posts = Post::title($request->get('title'))->orderBy('created_at', 'DESC')->paginate(10);
		$title = $request->get('title');
		return view('admin.posts.index', compact('posts', 'title'));
	}

	public function create()
	{
		$categories = PostCategory::orderBy('name', 'asc')->get();
		return view('admin.posts.create', compact('categories'));
	}

	public function save(Request $request)
	{
		// validation
		$rules = [
		    'title' => 'required|unique:posts',
		    'detail' => 'required',
		];
		$messages = [
		    'title.required' => 'El campo título es obligatorio.',
		    'title.unique' => 'El título ya existe.',
		    'detail.required' => 'El campo detalle es obligatorio.',
		];
		$this->validate($request, $rules, $messages);
		// /validation

		$post = new Post;
		$post->user_id = 1; //temporaly
		$post->title = $request->title;
		$post->detail = $request->detail;
		$post->slug = str_slug($request->title, "-");
		if ($request->category > 0) {
			$post->category_id = $request->category;
		}
		if ($request->visible == "on") {
			$post->visible = 1;
		} else {
			$post->visible = 0;
		}
		if ($request->author_view == "on") {
			$post->author_view = 1;
		} else {
			$post->author_view = 0;
		}
		$post->save();

		$user = auth()->user()->id;
		$table = "Publicaciones";
		$description = $post->title;
		$action = 'POST';
		save_admin_log($user, $table, $description, $action);

		return redirect()->route('admin.posts')->with('message', 'Se ha agregado una nueva publicación: "' . $request->title . '"');
	}

	public function edit($slug)
	{
		$post = Post::where('slug','=', $slug)->firstOrFail();
		$categories = PostCategory::orderBy('name', 'asc')->get();
		return view('admin.posts.edit', compact('post', 'categories'));
	}

	public function update(Request $request, $slug)
	{
		$post = Post::where('slug','=', $slug)->firstOrFail();

		// validation
		$rules = [
		    'title' => 'required',
		    'detail' => 'required',
		];
		$messages = [
		    'title.required' => 'El campo título es obligatorio.',
		    'detail.required' => 'El campo detalle es obligatorio.',
		];
		$this->validate($request, $rules, $messages);

		$post = Post::where('slug','=', $slug)->firstOrFail();
		$post->title = $request->title;
		$post->detail = $request->detail;
		$post->slug = str_slug($request->title, "-");
		if ($request->category > 0) {
			$post->category_id = $request->category;
		}
		if ($request->visible == "on") {
			$post->visible = 1;
		} else {
			$post->visible = 0;
		}
		if ($request->author_view == "on") {
			$post->author_view = 1;
		} else {
			$post->author_view = 0;
		}
		$post->save();


		$user = auth()->user()->id;
		$table = "Publicaciones";
		$description = $post->title;
		$action = 'UPDATE';
		save_admin_log($user, $table, $description, $action);

		return redirect()->route('admin.posts')->with('message', 'Se ha modificado correctamente la publicación: "' . $request->title . '"');
	}

	public function delete($slug)
	{
		$post = Post::where('slug','=', $slug)->firstOrFail();
		$title = $post->title;

		$user = auth()->user()->id;
		$table = "Publicaciones";
		$description = $post->title;
		$action = 'DELETE';
		save_admin_log($user, $table, $description, $action);

		$post->delete();

		return redirect()->route('admin.posts')->with('message', 'Se ha eliminado la publicación: "' . $title . '"' );
	}
}