<?php

namespace App;

use App\Traits\DatesTranslator;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'category_id', 'title', 'detail',
    ];

	public function category()
	{
		return $this->hasOne(PostCategory::class, 'id', 'category_id');
	}

	public function scopeTitle($query, $title)
	{
		if (trim($title) !="") {
			$query->where("title", "LIKE", "%$title%");
		}
	}

	public function formattedDate()
	{
		$date = Carbon::now();
		$date = $date->format('l jS \\of F Y h:i:s A');
		return $date;
	    // return Carbon::createFromFormat('m-d-Y', $this->created_at);
	}

}
