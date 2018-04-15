<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AdminLog extends Model
{
	protected $table = 'admin_logs';

    protected $fillable = [
        'user_id', 'table', 'register', 'action',
    ];

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
}
