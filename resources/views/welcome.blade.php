@extends('app')

@section('content')

				<div class="body center-block text-center" style="margin-top: 50px">


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

	<div class="text-center" style="margin-bottom: 20px">
		<ul class="list-inline">
			<li><a href="#carousel-example-generic" role="button" data-slide="prev"><button class="btn btn-default  btn-sm" type="button" value="Suggestions" /><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></button></a></li>
			<li><a href="{{ url('pipedreams') }}"><button class="btn btn-default btn-sm" type="button" style="text-transform: uppercase" />All</button></a></li>
			<li><a href="#carousel-example-generic" role="button" data-slide="next"><button class="btn btn-default btn-sm" type="button" value="Suggestions" /><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span></button></a></li>
	</ul>
	</div>

  <div class="carousel-inner" role="listbox">
		<div class="item active">
			<h1 style="font-size: 60px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">What's Your Pipe Dream?</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">read a new book everyday for an entire year straight</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">meander through the desert barefoot</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
		<div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">write a novel</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
		<div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">become an Olympic swimmer</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
		<div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">move to Antartica for research purposes</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
		<div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">only eat the meat I kill</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
		<div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">tell someone I have secretly loved them for over 10yrs</a></h1>
      <div class="carousel-caption">
      </div>
    </div>
		<div class="item">
			<h1 style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}">live my life as a shaman's apprentice</a></h1>
      <div class="carousel-caption">
      </div>
    </div>

  </div>

</div>

</div>
@stop

@section('footer')
<script>
$('.carousel').carousel({
	interval: 3500
});
</script>
@stop
