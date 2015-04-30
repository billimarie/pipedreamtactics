@extends('app')

@section('content')
  <h1>Edit: {!! $pipedream->title !!}</h1>

  <hr />

  @include('errors.list')

  {!! Form::model($pipedream, ['method' => 'PATCH', 'action' => [ 'PipeDreamsController@update', $pipedream->id]]) !!}

  @include('pipedreams.partials', ['submitButtonText' => 'Update Pipe Dream'])

  {!! Form::close() !!}

@stop
