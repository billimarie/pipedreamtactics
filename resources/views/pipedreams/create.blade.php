@extends('app')

@section('content')
  <h1>Add Your Pipe Dream</h1>

  <hr />

  {!! Form::open(['url' => 'pipedreams']) !!}

    @include ('pipedreams.form', ['submitButtonText' => 'Add Pipe Dream'])

  {!! Form::close() !!}

  @include ('errors.list')

@stop
