<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $fillable = [
		'name'
	];

	// Gets pipe dreams associated with given tag.

	public function pipedreams()
	{
		return $this->belongsToMany('App\PipeDream');
	}

}
