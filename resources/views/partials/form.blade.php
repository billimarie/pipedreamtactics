<p class="lead" style="margin-bottom: -20px;">Briefly <span class="text-danger"><strong>describe</strong></span> your pipe dream. <span class="text-danger">*</span></p>

  <div class="form-group">
    {!! Form::label('title', ' ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  <ul class="nav" style="margin-top: -15px">
    <li class="text-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li class="lead">
          <p>Think of your pipe dream as the <span class="text-danger">title</span> of a <span class="text-danger">dare</span>.</p>
          <p>Having trouble distilling your pipe dream? <a href="{{ url('contact') }}">Send us a message</a> and we'll help you get the wording just write.</p>
        </li>
      </ul>
    </li>
  </ul>

  <p class="lead">Need a few examples?</p>
  <h2 class="text-center" id="message">teach myself how to code</h2>

  <div class="text-center">
    <button class="btn btn-danger btn-xs" type="button" value="Suggestions" onclick="newPipeDreamExample();" />
      More Examples
    </button>
  </div>

  <script>
    function newPipeDreamExample() {
      var pipeDreams = [
        "read a new book everyday for an entire year straight",
        "meander through the desert barefoot",
        "live my life as a shaman's apprentice",
        "tell someone I have secretly loved them for over 10yrs",
        "become an Olympic swimmer",
        "move to Antartica for research purposes",
        "master the shakuhachi",
        "only eat the meat I kill",
        "write a novel" ];
      var random = pipeDreams[Math.floor(Math.random() * pipeDreams.length)];

      document.getElementById("message").innerHTML=random;
    }
  </script>

  <div class="clearfix"><br /></div>

  <div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple', 'disabled']) !!}
    <p>(Disabled, for now)</p>
  </div>

  <div class="clearfix"><br /></div>

  <p class="lead">Great! Ready to submit?</p>

  <div class="clearfix"><br /></div>

  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-danger form-control']) !!}
  </div>

@section('footer')

  <script>
    $('#tag_list').select2(
      {
        placeholder: 'Choose a tag',
        tags: true
        /*  url: 'api/tags',
          delay: 250,
          data: function(params) {
            return {
              q: params.term
            }
          },
          processResults: function(data) {
            return { results: data }
          } */
        });
  </script>

@stop
