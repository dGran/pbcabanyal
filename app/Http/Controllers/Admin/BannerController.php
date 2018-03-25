<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class BannerController extends Controller
{
    public function index() {
    	$banners = Banner::orderBy('id', 'asc')->get();
    	return view('admin.banners.index', compact('banners'));
    }

	public function update(Request $request, $id)
	{
		$banner = Banner::findOrFail($id);

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

		$banner->title = $request->title;
		$banner->detail = $request->detail;
		$banner->color = $request->color;
		$banner->save();

		return redirect()->route('admin.banners')->with('message', 'Se ha modificado correctamente el banner: "' . $request->title . '"');
	}
}
