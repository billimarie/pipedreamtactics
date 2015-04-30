@extends('app')

@section('content')
  <h1>{{ $article->title }}</h1>
  <p>{{ $article->published_at}}</p>
  <hr />
    <article>
      <div class="body">{{ $article->body }}</div>
    </article>
@endsection

@stop
