<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pipe Dream Tactics | an online repository of pipe dreams</title>

	<link rel="stylesheet" href="{{ elixir('css/all.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('') }}">Pipe Dream Tactics</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ action('PipeDreamsController@create') }}"><i class="fa fa-magic"></i> Add</a></li>
					<li><a href="{{ action('PipeDreamsController@index') }}">View</a></li>
					<li><a href="{{ url('about') }}">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="https://pipedreamtactics.wordpress.com/2015/04/22/thinking-about-pipe-dreams-ultimate-self-ricoeur/" target="_blank">Philosophy</a></li>
								<li><a href="http://pipedreamtactics.wordpress.com" target="_blank">Main</a></li>
								<li><a href="http://pipedreamtactics.wordpress.com/about" target="_blank">Abstract</a></li>
								<li><a href="http://pipedreamtactics.wordpress.com/blog" target="_blank">Read More</a></li>
							</ul>
					</li>
					<li><a href="{{ url('contact') }}">Contact</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('home') }}">Dashboard</a></li>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		@include('flash::message')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="content">
					@yield('content')
				</div>
			</div>
		</div>

	</div>

	<script src="{{ elixir('js/all.js') }}"></script>

	<script>
	$('#flash-overlay-modal').modal().Delay(300).fadeOut(300);
	</script>

	<div class="footer container-fluid">
		@yield('footer')
	</div>

</body>
</html>
