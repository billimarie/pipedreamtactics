@extends('app')

@section('content')

				<h1 class="title text-center" style="color: #B0BEC5; margin-bottom: 50px;">What's Your Pipe Dream?</h1>

				<div class="body center-block text-center">

					<div class="text-center" style="margin-bottom: 50px">
		        <ul class="list-inline">
							<li><a href="{{ url('pipedreams') }}"><button class="btn btn-danger btn-lg" type="button" value="Suggestions" />Add</button></a></li>
							<li><button class="btn btn-danger btn-lg" type="button" value="Suggestions" onclick="newPipeDreamExample();" />Refresh</button></li>
							<li><a href="{{ url('pipedreams') }}"><button class="btn btn-danger btn-lg" type="button" value="Suggestions" />All</button></a></li>
		      </div>

					<div style="font-size: 47px; font-family: 'Lato', font-weight: 100; line-height: 1em"><a href="{{ url('pipedreams') }}"><span class="text-center" id="message">teach myself how to code</span></a></div>

		      <script>
		        function newPipeDreamExample() {
		          var pipeDreams = [
		            "read a new book everyday for an entire year straight",
		            "meander through the desert barefoot",
		            "live my life as a shaman's apprentice",
		            "tell someone I have secretly loved them for over 10yrs",
		            "become an Olympic swimmer",
		            "move to Antartica for research purposes",
		            "master the shakuhachi",
		            "only eat the meat I kill",
		            "write a novel" ];
		          var random = pipeDreams[Math.floor(Math.random() * pipeDreams.length)];

		          document.getElementById("message").innerHTML=random;
		        }
		      </script>



			</div>
		</div>

@stop
