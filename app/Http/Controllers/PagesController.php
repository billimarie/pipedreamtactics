<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()

	{
		$first = 'Billi';
		$last = 'R';

		$city = 'Los Angeles';
		$state = 'CA';

		$pipe_dream = 'Lorem epsum blah blah bloohey';

		$explorers = [
			'Billimarie Robinson', 'Terri Heiggdigger', 'Mart Cart'
		];

		return view('pages.about', compact('first', 'last', 'city', 'state', 'pipe_dream', 'explorers'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
