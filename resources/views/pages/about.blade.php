@extends('app')

@section('content')
<div class="body">

  <h1>About</h1>

  <hr />

  <div class="text-center" style="padding: 50px 0">
    <h1>“You have to be careful about who you share your dreams with. They might collapse when criticized.<br /><br />Your dreams are more vulnerable than you are.”</h1>
  </div>

  <h3>Wishful Thinking meets Foolish Stumbling</h3>

	<p class="lead">Pipe Dream Tactics is <a class="text-danger" href="{{ url('pipedreams') }}">an online repository</a> for pipe dreams (and the people who have them). It is also a <a class="text-danger"  href="http://pipedreamtactics.wordpress.com" target="_blank">blog</a>, an app, an art project, and a philosophy (see <a class="text-danger"  href="https://pipedreamtactics.wordpress.com/2015/04/22/thinking-about-pipe-dreams-ultimate-self-ricoeur/" target="_blank">"Thinking About Pipe Dreams"</a>).</p>

  <div class="text-center" style="padding: 200px 0">
    <img src="/img/butterfly-pipe-dream-tactics.png" class="img-circle" width="300px" height="290px" />
  </div>

  <div style="padding-bottom: 100px">
    <h3>What is a pipe dream?</h3>

    <p class="lead">A pipe dream is a goal, vision, or lifestyle which outsiders often categorize as silly, unrealistic, or even impossible.</p>
  </div>

  <div style="padding: 100px 0 100px 0">
    <h3>What is Pipe Dream Tactics?</h3>

    <p class="lead">Pipe Dream Tactics is a foolhardy attempt to embrace impracticality and override fear through the playful exploration of pipe dreams.</p>
  </div>

  <div class="text-left" style="padding: 100px 0">
    <h1>Pipe Dream Tactics is not about "achieving" pipe dreams.</h1>
    <p class="lead">It’s not about the arriving. It’s not even about the journey. It’s just about showing up. And I don’t mean that in some inspirational banner sort of way. I just mean here is your self, and your self has a pipe dream, maybe even two or three or twenty, and here that self is shouting “LET’S DO THIS.”</p>
    <p class="lead">And instead of engaging, you ignore. Prioritize. Analyze. Fall into other things. Soon life continues without you. Dreams are deferred–but that’s not the worst of it. Dreams go undreamed.</p>
    <p class="lead">What would life be like if we actively encouraged pipe dreaming? What would <em>we</em> be like?</p>
  </div>

  <div class="text-center" style="padding: 100px 0 200px 0">
    <h1>Let’s dream for the sake of dreaming.</h1>
  </div>


  <br class="clearfix" /><br /><br />


  <div class="row text-center" style="padding: 100px 0 300px 0">

    <div class="col-xs-6 col-sm-3" style="padding: 20px 0;">
		   <i class="fa fa-magic fa-5x"></i>
		   <div class="clearfix"><br /></div>
		<a href="{{ url('pipedreams/create') }}">
			<button class="btn btn-danger btn-lg">
				<span class="text-uppercase">
					<strong>Add</strong>
				</span>
			</button>
		</a>

	</div>

	<div class="col-xs-6 col-sm-3" style="padding: 20px 0;">
		<i class="fa fa-eye fa-5x"></i>
		<div class="clearfix"><br /></div>
		<a href="{{ url('pipedreams') }}">
			<button class="btn btn-danger btn-lg">
				<span class="text-uppercase">
					<strong>View</strong>
				</span>
			</button>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3" style="padding: 20px 0;">
    <i class="fa fa-pencil fa-5x"></i>
		<div class="clearfix"><br /></div>
		<a href="http://pipedreamtactics.wordpress.com" target="_blank">
			<button class="btn btn-danger btn-lg">
				<span class="text-uppercase">
					<strong>Blog</strong>
				</span>
			</button>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3" style="padding: 20px 0;">
		<i class="fa fa-paper-plane-o fa-5x"></i>
		<div class="clearfix"><br /></div>
		<a href="{{ url('contact') }}">
			<button class="btn btn-danger btn-lg">
				<span class="text-uppercase">
					<strong>Comments</strong>
				</span>
			</button>
		</a>
	</div>

</div>

</div>
@stop
