@if (session('success'))
  <div class="columns">
    <div class="notification is-success column is-12">
        <span>{{session('success')}}</span>
    </div>
  </div>
@endif

@if (session('error'))
  <div class="columns">
    <div class="notification is-danger column is-12">
        <span>{{session('error')}}</span>
    </div>
  </div>
@endif
