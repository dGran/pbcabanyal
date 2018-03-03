<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCategory;

class PostCategoryController extends Controller
{
	public function index()
	{
		$categories = PostCategory::orderBy('name', 'asc')->paginate(10);
		return view('admin.posts_categories.index', compact('categories'));
	}

	public function create()
	{
		return view('admin.posts_categories.create');
	}

	public function save(Request $request)
	{
        try{
        	$this->validate($request, [
        		'name' => 'required',
        	]);
        } catch(\Exception $e) {
            return back()->with('error', 'Debes completar todos los campos obligatorios');
        }
		$category = new PostCategory;
		$category->name = $request->name;
		$category->slug = str_slug($request->name, "-");
		$category->save();

		return redirect()->route('admin.categories')->with('message', 'Se ha agregado una nueva categoría: "' . $request->name . '"');
	}

	public function delete($id)
	{
		$category = PostCategory::find($id);
		$name = $category->name;

		$category->delete();

		return redirect()->route('admin.categories')->with('message', 'Se ha eliminado la categoría: "' . $name . '"' );
	}

}
