@extends('app')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding: 100px 0; height: 300px">

  <div class="carousel-inner text-center" role="listbox">

		<div class="item active">
			<h1 style="font-weight: 100">We're <strong>collecting</strong>, <strong>sharing</strong>, and <strong>building</strong> Pipe Dreams.</h1>
		</div>

		@foreach ($pipedreams as $pipedream)
    <div class="item">
			<h1>
				<a href="{{ url('pipedreams', $pipedream->id) }}">"{{ $pipedream->title }}"</a>
			<h1>
			<p class="lead"><a href="{{ url('pipedreams', $pipedream->id) }}">{{ $pipedream->name }}</a><br />{{ $pipedream->location }}<br /></p>
		</div>
		@endforeach

		<div class="item">
			<h1>
				<a href="{{ url('pipedreams/create') }}">Add Your Pipe Dream</a>
			</h1>
		</div>

		<div class="item">
			<h1>
				<a href="{{ url('pipedreams') }}">View All Pipe Dreams</a>
			</h1>
		</div>

  </div>

</div>

<br class="clearfix" />

<div class="row text-center">

	<div class="col-xs-6 col-sm-6" style="padding: 20px 0;">
		<a class="iconLink" href="{{ url('pipedreams/create') }}"><i class="fa fa-magic fa-5x" style="font-size: 100pt"></i></a>
		<div class="clearfix"><br /></div>
		<a class="btn btn-danger btn-lg" href="{{ url('pipedreams/create') }}">
				<span class="text-uppercase">
					<strong>Add</strong>
				</span>
		</a>

	</div>

	<div class="col-xs-6 col-sm-6" style="padding: 20px 0;">
		<a class="iconLink" href="{{ url('pipedreams') }}"><i class="fa fa-eye fa-5x" style="font-size: 100pt"></i></a>
		<div class="clearfix"><br /></div>
		<a class="btn btn-danger btn-lg" href="{{ url('pipedreams') }}">
				<span class="text-uppercase">
					<strong>View</strong>
				</span>
		</a>
	</div>

</div>

@stop

@section('footer')
<script>
$('.carousel').carousel({
	interval: 3500,
	pause: false
})
</script>
@stop
