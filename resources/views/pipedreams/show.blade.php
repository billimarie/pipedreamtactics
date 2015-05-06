@extends('app')

@section('content')

<section>
  <h1>{{ $pipedream->title }}</h1>
  <hr />
  <article>

    <ul class="list-inline lead">
      <li>{{ $pipedream->name }}</li>
      <li>{{ $pipedream->location }}</li>
      <li>{{ $pipedream->created_at->toDateTimeString() }}</li>

    </ul>

    @unless ($pipedream->tags->isEmpty())
      <h3>Tags</h3>
      <ul class="list-inline">
        @foreach ($pipedream->tags as $tag)
          <li><p class="lead"><a href="{{ url('tags', $tag->name) }}">{{ $tag->name }}</a></p></li>
        @endforeach
      </ul>
    @endunless

    <div class="body">
      <p>{{ $pipedream->description }}</p>
    </div>

  </article>

</section>

@stop
