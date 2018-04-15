<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	protected $table = 'banners';
	public $timestamps = false;

    protected $fillable = [
        'color', 'title', 'detail'
    ];
}
