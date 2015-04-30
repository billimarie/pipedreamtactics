@extends('app')

@section('content')
  <h1>Add Your Pipe Dream</h1>
  <hr />

  @include('errors.list')

  {!! Form::open(['url' => 'pipedreams']) !!}

  @include('partials.form', ['submitButtonText' => 'Add Pipe Dream'])

  {!! Form::close() !!}
@endsection

@stop
