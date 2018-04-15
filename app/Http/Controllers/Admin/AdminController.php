<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\AdminLog;

class AdminController extends Controller
{
    public function index()
    {
    	$logs = AdminLog::orderBy('id', 'desc')->paginate(20);
        return view('admin.index', compact('logs'));
    }


}
