<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PostCategory;

class PostCategoryController extends Controller
{
	public function index(Request $request)
	{
		$categories = PostCategory::name($request->get('name'))->orderBy('name', 'ASC')->paginate(10);
		$name = $request->get('name');
		return view('admin.posts_categories.index', compact('categories', 'name'));
	}

	public function create()
	{
		return view('admin.posts_categories.create');
	}

	public function save(Request $request)
	{
		// validation
		$rules = [
		    'name' => 'required|unique:posts_categories',
		];
		$messages = [
		    'name.required' => 'El campo nombre es obligatorio.',
		    'name.unique' => 'El nombre ya existe.',
		];
		$this->validate($request, $rules, $messages);


		$category = new PostCategory;
		$category->name = $request->name;
		$category->slug = str_slug($request->name, "-");
		$category->save();

		$user = auth()->user()->id;
		$table = "Categorías";
		$description = $category->name;
		$action = 'POST';
		save_admin_log($user, $table, $description, $action);

		return redirect()->route('admin.categories')->with('message', 'Se ha agregado una nueva categoría: "' . $request->name . '"');
	}

	public function edit($slug)
	{
		$category = PostCategory::where('slug','=', $slug)->firstOrFail();
		return view('admin.posts_categories.edit', compact('category'));
	}

	public function update(Request $request, $slug)
	{
		// validation
		$rules = [
		    'name' => 'required|unique:posts_categories',
		];
		$messages = [
		    'name.required' => 'El campo nombre es obligatorio.',
		    'name.unique' => 'El nombre ya existe.',
		];
		$this->validate($request, $rules, $messages);

		$category = PostCategory::where('slug','=', $slug)->firstOrFail();
		$category->name = $request->name;
		$category->slug = str_slug($request->name, "-");
		$category->save();

		$user = auth()->user()->id;
		$table = "Categorías";
		$description = $category->name;
		$action = 'UPDATE';
		save_admin_log($user, $table, $description, $action);

		return redirect()->route('admin.categories')->with('message', 'Se ha modificado correctamente la categoría: "' . $request->name . '"');
	}

	public function delete($slug)
	{
		$category = PostCategory::where('slug','=', $slug)->firstOrFail();
		$name = $category->name;

		$user = auth()->user()->id;
		$table = "Categorías";
		$description = $category->name;
		$action = 'DELETE';
		save_admin_log($user, $table, $description, $action);

		$category->delete();

		return redirect()->route('admin.categories')->with('message', 'Se ha eliminado la categoría: "' . $name . '"' );
	}

}
