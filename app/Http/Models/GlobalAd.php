<?php

namespace App\http\models;

use Illuminate\Database\Eloquent\Model;

class GlobalAd extends Model
{
	protected $table = 'global_ads';
	public $timestamps = false;

    protected $fillable = [
        'detail', 'active',
    ];

	public function scopeDetail($query, $detail)
	{
		if (trim($detail) !="") {
			$query->where("detail", "LIKE", "%$detail%");
		}
	}

	public function shortDetail() {
		return $detail = strip_tags(substr($this->detail, 0, 20) . '...');
	}

	public function isActive() {
		if ($this->active) {
			return true;
		} else {
			return false;
		}
	}
}
