<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 * The magazines in this category
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function magazines(){
		return $this->hasMany(Magazine::class);
	}
}
