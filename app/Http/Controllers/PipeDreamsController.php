<?php namespace App\Http\Controllers;

use App\PipeDream;
use App\User;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\PipeDreamRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PipeDreamsController extends Controller {

	// Create new pipe dreams instance

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']);
	}

	// Show all pipe dreams

	public function index()
	{
		$pipedreams = PipeDream::latest()->get();

		return view('pipedreams.index', compact('pipedreams'));
	}

	// Show single pipe dream

	public function show(Pipedream $pipedream)
	{
		return view('pipedreams.show', compact('pipedream'));
	}

	// Add pipe dream

	public function create()
	{
		$tags = Tag::lists('name', 'id');

		return view('pipedreams.create', compact('tags'));
	}

	// Store pipe dreams

	public function store(PipeDreamRequest $request)
	{

		PipeDreamsController::create($request->all());

		$this->addPipeDream($request);

		return redirect('pipedreams')->with([
				'flash_message' => 'Your pipe dream has been added!'
				// , 'flash_message_important' => false
			]);
	}

	/* Edit Pipe Dreams

	public function edit(Pipedream $pipedream)
	{
		$tags = Tag::lists('name', 'id');

		return view('pipedreams.edit', compact ('pipedream', 'tags'));
	} */

	/* Update

	public function update(Pipedream $pipedream, PipeDreamRequest $request)
	{

		$pipedream->update($request->all());

		$this->syncTags($pipedream, $request->input('tag_list'));

		return redirect('pipedreams');

	} */

	// Sync list of tags inside database

	private function syncTags(Pipedream $pipedream, array $tags)
	{
		$pipedream->tags()->sync($tags);
	}

	// Save new Pipe Dream

	private function addPipeDream(PipeDreamRequest $request)
	{
		$pipedream = Auth::user()->pipedreams()->create($request->all());

		$this->syncTags($pipedream, $request->input('tag_list'));

		return $pipedream;
	}

}
