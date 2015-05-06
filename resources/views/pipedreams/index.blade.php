@extends('app')

@section('content')

  <section>

    <div class="body">

      <h1 class="text-center text-danger">Pipe Dream Collection</h1>

      <ul class="list-inline text-center">
        <li><a href="{{ url('pipedreams/create') }}" class="btn btn-primary btn-danger">Add</a></li>
        <li><a disabled class="btn btn-primary btn-block">Random</a></li>
        <li><a disabled class="btn btn-primary btn-block">Keywords</a></li>
        <li><a disabled class="btn btn-primary btn-block">Search</a></li>
      </ul>

      <br style="clear:both" />

      <hr />

      @foreach ($pipedreams as $pipedream)
          <h2>
            <a href="{{ url('pipedreams', $pipedream->id) }}">{{ $pipedream->title }}</a>
          </h2>
          <div class="clearfix"><br /></div>
      @endforeach

    </div>

	</section>

@stop
