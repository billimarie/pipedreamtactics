@extends('app')

@section('content')
  <h1>Edit: {!! $pipedream->title !!}</h1>

  <hr />

  {!! Form::model($pipedream, ['method' => 'PATCH', 'action' => ['PipeDreamsController@update', $pipedream->id]]) !!}

    @include ('pipedreams.form', ['submitButtonText' => 'Update Pipe Dream'])

  {!! Form::close() !!}

  @include ('errors.list')

@stop
