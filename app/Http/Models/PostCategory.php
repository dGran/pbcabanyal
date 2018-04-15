<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
	protected $table = 'posts_categories';
	public $timestamps = false;

    protected $fillable = [
        'name',
    ];

	public function posts()
	{
		return $this->hasMany(Post::class, 'category_id', 'id');
	}

	public function scopeName($query, $name)
	{
		if (trim($name) !="") {
			$query->where("name", "LIKE", "%$name%");
		}
	}
}
