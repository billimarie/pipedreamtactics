<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PipeDream extends Model {

	protected $fillable = [
		'title',
		'description',
		'name',
		'location',
		'email'
	];

	// A Pipe Dream is created by a User.

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	// Get Tags associated with given article.

	public function tags()
	{
			return $this->belongsToMany('App\Tag')->withTimestamps();
	}

	// Get list of tag ids associated with current pipe dream

	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}

}
