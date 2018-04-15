<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\GlobalAd;

class GlobalAdController extends Controller
{
	public function index(Request $request)
	{
		$ads = globalAd::detail($request->get('detail'))->orderBy('active', 'DESC')->orderBy('id', 'DESC')->paginate(10);
		$detail = $request->get('detail');
		return view('admin.global_ads.index', compact('ads', 'detail'));
	}

	public function create()
	{
		return view('admin.global_ads.create');
	}

	public function save(Request $request)
	{
		$short_detail = strip_tags(substr($request->detail, 0, 20) . '...');
		// validation
		$rules = [
		    'detail' => 'required',
		];
		$messages = [
		    'detail.required' => 'El campo detalle es obligatorio.',
		];
		$this->validate($request, $rules, $messages);
		// /validation

		$ad = new globalAd;
		$ad->detail = $request->detail;
		$ad->active = 1;
		$ad->save();

		$user = auth()->user()->id;
		$table = "Anuncios generales";
		$description = $short_detail;
		$action = 'POST';
		save_admin_log($user, $table, $description, $action);

		return redirect()->route('admin.ads')->with('message', 'Se ha agregado un nuevo anuncio general: "' . $short_detail . '"');
	}

	public function edit($id)
	{
		$ad = globalAd::findOrFail($id);
		return view('admin.global_ads.edit', compact('ad'));
	}

	public function update(Request $request, $id)
	{
		$short_detail = strip_tags(substr($request->detail, 0, 20) . '...');
		// validation
		$rules = [
		    'detail' => 'required',
		];
		$messages = [
		    'detail.required' => 'El campo detalle es obligatorio.',
		];
		$this->validate($request, $rules, $messages);

		$ad = globalAd::findOrFail($id);
		$ad->detail = $request->detail;
		if ($request->active == "on") {
			$ad->active = 1;
		} else {
			$ad->active = 0;
		}

		$ad->save();

		$user = auth()->user()->id;
		$table = "Anuncios generales";
		$description = $short_detail;
		$action = 'UPDATE';
		save_admin_log($user, $table, $description, $action);

		return redirect()->route('admin.ads')->with('message', 'Se ha modificado correctamente el anuncio general: "' . $short_detail . '"');
	}

	public function delete($id)
	{
		$ad = globalAd::findOrFail($id);
		$title = $ad->shortDetail();

		$user = auth()->user()->id;
		$table = "Anuncios generales";
		$description = $ad->shortDetail();
		$action = 'DELETE';
		save_admin_log($user, $table, $description, $action);

		$ad->delete();

		return redirect()->route('admin.ads')->with('message', 'Se ha eliminado el anuncio general: "' . $title . '"' );
	}
}
