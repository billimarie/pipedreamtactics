@extends('app')

@section('content')
  <h1>{{ $pipedream->title }}</h1>
  <hr />
  <article>
    <h3>{{ $pipedream->name }} | {{ $pipedream->location }} | {{ $pipedream->created_at->toDateTimeString() }}</h3>
    <div class="body">
      <p>{{ $pipedream->description }}</p>
      @unless ($pipedream->tags->isEmpty())
      <h4>Tags:</h4>
      <ul>
        @foreach ($pipedream->tags as $tag)
          <li>{{ $tag->name }}</li>
          @endforeach
      </ul>
      @endunless
    </div>
  </article>

  <div class="body">
    Create an Account or Sign In to update your pipe dream.

    <div>
      <ul class="list-inline">
        <li><button disabled class="btn btn-danger btn-sm">
          <span class="text-uppercase">
            <strong>Add Description</strong>
          </span>
        </button></li>
      <li><button disabled class="btn btn-danger btn-sm">
        <span class="text-uppercase">
          <strong>Update Title</strong>
        </span>
      </button></li>
      <li><button class="btn btn-danger btn-sm">
        <span class="text-uppercase">
          <a href="{{ action('PipeDreamsController@edit', [$pipedream->id]) }}"><strong>Edit Tags</strong></a>
        </span>
      </button></li>
      <li><button class="btn btn-success btn-sm">
        <a href="{{ url('pipedreams/create') }}"><span class="text-uppercase">
          <strong>New Pipe Dream</strong></a>
        </span>
      </button></li>
      </ul>
  </div>

  {{ $pipedream->user_id }}
  </div>

@stop
