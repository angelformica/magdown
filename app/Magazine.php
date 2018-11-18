<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
	/**
	 * The attributes that are mass assignable.
	 * @var array
	 */
	protected $fillable = [
		'name',
		'publication_date',
		'description',
		'user_id',
		'language_id',
		'category_id'
	];


	/**
	 * The owner of the magazine
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user(){
        return $this->belongsTo('App\User');
    }

	/**
	 * This magazine's category
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function category(){
    	return $this->belongsTo(Category::class);
    }

	/**
	 * The language of this magazine
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function language(){
    	return $this->belongsTo(Language::class);
    }

	/**
	 *
	 * A Magazine may have many links
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function links(){
    	return $this->hasMany(Link::class);
    }
}
