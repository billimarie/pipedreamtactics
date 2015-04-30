<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $fillable = [
		'name'
	];

	/* Get the Pipe Dreams associated with given tag. */

	public function pipe_dreams()
	{
		return $this->belongsToMany('App\PipeDream');
	}

}
