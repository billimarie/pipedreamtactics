@extends('app')

@section('content')

<h1 class="title">What's Your Pipe Dream?</h1>

<hr />

<div class="body center-block">

<p class="lead"><strong>Pipe Dream Tactics</strong> is <span class="text-danger">an online repository of pipe dreams</span> (...and a resource for the people who have them)</p>

<div class="clearfix"><br /></div>

<div class="row text-center">

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
		<i class="fa fa-users fa-5x"></i>
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

@stop
