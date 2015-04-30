@extends('app')

@section('content')
  <section>
    <div class="body">
      <h1 class="text-center text-danger">Pipe Dream Collection</h1>
      <ul class="list-inline text-center">
        <li><a href="{{ action('PipeDreamsController@create')}}" class="btn btn-primary btn-danger">Add</a></li>
        <li><a disabled class="btn btn-primary btn-block">Random</a></li>
        <li><a disabled class="btn btn-primary btn-block">Keywords</a></li>
        <li><a disabled class="btn btn-primary btn-block">Search</a></li>
      </ul>
    </div>
  </section>
  <br style="clear:both" />
  <hr />
  @foreach ($pipedreams as $pipedream)
    <article>
      <h3><a href="{{ action('PipeDreamsController@show', [$pipedream->id]) }}">{{ $pipedream->title }}</a></h3>
      <div class="body">From , {{ $pipedream->location }} on {{ $pipedream->created_at->toDateTimeString() }}</div>
    </article>
  @endforeach
@endsection

@stop
