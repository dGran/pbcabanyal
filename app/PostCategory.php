<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
        'name',
    ];

	public function posts()
	{
		return $this->hasMany(Post::class, 'category_id', 'id');
	}
}
