<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Pipe Dream Tactics <span class="text-muted"><sup>Beta</sup></span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('pipedreams/create') }}"><i class="fa fa-magic"></i> Add</a></li>
        <li><a href="{{ url('pipedreams') }}">View</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
        <li><a href="http://pipedreamtactics.wordpress.com" target="_blank">Blog</a></li>
        <li><a href="http://www.github.com/billimarie/pipedreamtactics" target="_blank">GitHub</a></li>
      </ul>
    </div>
  </div>
</nav>
