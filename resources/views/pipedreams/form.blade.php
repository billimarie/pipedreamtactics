<div class="form-group">
  {!! Form::label('title', 'Title: *') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Description:') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="row">
<div class="form-group col-md-4">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4">
  {!! Form::label('location', 'Location:') !!}
  {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4">
  {!! Form::label('tag_list', 'Tags: *') !!}
  {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-danger form-control']) !!}
</div>

@section('footer')
<script>
  $('#tag_list').select2({
    placeholder: 'Choose a tag',
    tags: false
  });
</script>
@endsection
