<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = [
        'category_id', 'title', 'description',
    ];

	public function category()
	{
		return $this->hasOne(PostCategory::class, 'category_id', 'id');
	}
}
