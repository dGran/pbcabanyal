<?php

use App\Http\Models\AdminLog;

function save_admin_log($user, $table, $description, $action)
{
	$log = New AdminLog;
	$log->user_id = $user;
	$log->table = $table;
	$log->description = $description;
	$log->action = $action;
	$log->save();
}