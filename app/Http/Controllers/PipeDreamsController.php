<?php namespace App\Http\Controllers;

use App\PipeDream;
use App\Tag;
use Auth;

use App\Http\Requests;
use App\Http\Requests\PipeDreamRequest;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Controllers\Controller;

class PipeDreamsController extends Controller {

  // Create a new pipe dreams controller instance

  public function __construct()
  {
    $this->middleware('auth', ['only' => 'create']);
  }

  //  Show all Pipe Dreams (latest, first)

  public function index()
  {
    $pipedreams = PipeDream::latest('created_at')->get();

    return view('pipedreams.index', compact('pipedreams', 'user'));
  }

  /* Show a single Pipe Dream */

  public function show(PipeDream $pipedream)
  {
    return view('pipedreams.show', compact('pipedream'));
  }

  // Create a single new Pipe Dream

  public function create()
  {
    $tags = Tag::lists('name', 'id');

    return view('pipedreams.create', compact('tags'));
  }

  /* Save a new Pipe Dream
     - Checks Pipe Dream Form validation
     - Stores a new Pipe Dream
     - Creates Flash Message upon creation */

  public function store(PipeDreamRequest $request)
  {

    $this->createPipeDream($request);

    flash('Your Pipe Dream was added!');

    return redirect('pipedreams')->with('flash_message');

  }

  // Edit Method

  public function edit(PipeDream $pipedream)
  {
    $tags = Tag::lists('name', 'id');

    return view('pipedreams.edit', compact('pipedream', 'tags'));
  }

  // "Update" Method

  public function update(PipeDreamRequest $request, PipeDream $pipedream)
  {

    $pipedream->update($request->all());

    $this->syncTags($pipedream, $request->input('tag_list'));

    return redirect('pipedreams');
  }

  /* Sync up list of tags in database

  private function syncTags(PipeDream $pipedream)
  {
    $tags=Array();
    $pipedream->tags()->syncTags($tags);
  } */

  // Save a new Pipe Dream (create & persist)

  private function createPipeDream(PipeDreamRequest $request)
  {
    $pipedream = Auth::user()->pipedreams()->create($request->all());

//    $this->syncTags($pipedream, $request->input('tag_list'));

    return $pipedream;
  }

}
