@if (count($errors) > 0)
  <div class="columns">
    <ul>
        @foreach ($errors->all() as $error)
          <div class="notification is-danger column is-12">
              <span>{{session('error')}}</span>
          </div>
        @endforeach
    </ul>
  </div>
@endif
