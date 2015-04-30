@extends('app')

@section('content')

	<div class="body">

		<h1>About</h1>

		<hr />

		<h2>The Collection&nbsp;<a href="{{ url('pipedreams') }}"><span class="text-uppercase btn btn-danger btn-xs" style="margin-top: -5px">View</span></a></h2>

		<p class="lead">We've been curating a collection of user-submitted pipe dreams. <a href="{{ url('pipedreams') }}">Take a look</a>.</p>

		<div class="clearfix"></div>

		<h2>Add Your Pipe Dream&nbsp;<a href="{{ url('pipedreams/create') }}"><span class="text-uppercase btn btn-danger btn-xs" style="margin-top: -5px">Add</span></a></h2>

		<p class="lead">You can <a href="{{ url('pipedreams/create') }}">add your pipe dream</a> to our growing database.</p>

		<div class="clearfix"></div>

		<h2>Share The Collection&nbsp;<a href="#"><span class="text-uppercase btn btn-danger btn-xs" style="margin-top: -5px" disabled>Share</span></a></h2>

		<small>(Disabled, for now. Will fix soon.)</small>

		<p class="lead">Come up with clever bullshit and insert here.</p>


		<div class="clearfix"></div>

		<h2>Send Comments&nbsp;<a href="{{ url('contact') }}"><span class="text-uppercase btn btn-danger btn-xs" style="margin-top: -5px" disabled>Suggestions</span></a></h2>

		<small>(Disabled, for now. Will fix soon.)</small>

		<p class="lead">Have a comment, criticism, complaint, compliment, or other curious 'c' word? Send a message and we'll get back to you.</p>

	</div>

@stop
