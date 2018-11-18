<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	/**
	 * The attributes that are mass assignable
	 * @var array
	 */
	protected $fillable = [
		'url'
	];
	/**
	 * The magazine of this link
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function magazine() {
		return $this->belongsTo(Magazine::class);
	}
}
