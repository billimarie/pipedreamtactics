@if (Session::has('flash_message'))
<div id="flash-overlay-modal" class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
  @if (Session::has('flash_message_important'))
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  @endif

  <h3>{{ session('flash_message') }}</h3>
  <p>Stay Updated</p>
</div>
</div>
@endif
