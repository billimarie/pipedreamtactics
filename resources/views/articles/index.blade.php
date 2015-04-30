@extends('app')

@section('content')
  <h1>Articles</h1>
  <hr />
  @foreach ($articles as $article)
    <article>
      <h2><a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a></h2>
      <div class="body">
        <p>{{ $article->body }}</p>
        <p>{{ $article->published_at}}</p>
      </div>
    </article>
  @endforeach
  <br />
  <section>
    <div class="body"><button class="btn"><a href="{{ action('ArticlesController@create')}}">Post An Article</a></button></div>
  </section>
@endsection

@stop
