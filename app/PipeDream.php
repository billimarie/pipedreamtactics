<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PipeDream extends Model {

	protected $fillable = [
		'title',
		'description',
		'name',
		'location',
		'email',
		'user_id' // temporary;
	];

/*	protected $dates = ['created_at'];

	// set*Attribute (* = name of attribute)

	public function setCreatedAtAttribute($date)
	{
		$this->attributes['created_at'] = Carbon::parse($date);
	} */

	// A PipeDream is dreamt by a User

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	// Get the tags associated with given article

	public function tags()
	{
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}

	// Get list of tag ids associated with current article
	// @return array

	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}

}
