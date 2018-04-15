<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
	protected $table = 'polls';
	public $timestamps = false;

    protected $fillable = [
        'title',
    ];
}
