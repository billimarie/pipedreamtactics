@extends('app')

@section('content')
  <div class="body">
    <h1>About</h1>

    <hr />

		<h3>Pipe Dream Tactics is an attempt to <span class="text-danger">embrace impracticality</span> and <span class="text-danger">override fear</span> through the <span class="text-danger">playful exploration</span> of pipe dreams.</h3>

    <div class="clearfix"><br /></div>

		<p class="lead">Wishful Thinking meets Foolish Stumbling.</p>

    <div class="clearfix"><br /></div>

    <p><a href="{{ url('pipedreams/create') }}"><span class="text-uppercase btn btn-danger btn-lg">Add Your Pipe Dream</span></a></p>

    <div class="clearfix"><br /></div>

    <p><a href="{{ url('pipedreams') }}"><span class="text-uppercase btn btn-danger btn-lg">Browse the Collection</span></a></p>

    <div class="clearfix"><br /></div>

    <p><span class="text-uppercase btn btn-danger btn-lg" disabled>Follow the Process</span></p>

    <div class="clearfix"><br /></div>

		<p><a href="http://pipedreamtactics.wordpress.com"><span class="text-uppercase btn btn-danger btn-lg">Read the Blog</span></a></p>

		<div class="clearfix"><br /></div>

		<p><a href="{{ url('contact') }}"><span class="text-uppercase btn btn-danger btn-lg">Introduce Yourself</span></a></p>

  </div>
@stop
