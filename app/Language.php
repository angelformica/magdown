<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	/**
	 * The magazines for this language
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function magazines(){
    	return $this->hasMany(Magazine::class);
    }
}
