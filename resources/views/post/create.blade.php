@extends('layouts.main')

@section('title')
  New Post
@endsection

@section('page-title')
  SabiLawyer
@endsection

@section('post-active')
  active
@endsection

@section('editor_script')
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
@endsection

@section('content')

  <!-- main page content -->
  <div class="hero-body">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column is-8">
          <!-- start of post -->
          <div class="box">
            <!-- box header -->
            <div class="box-header">
              <h4 class="title is-4">
                New Post
              </h4>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="box-content-text">
                <!-- form begin -->
                @include('layouts.errors')
                @include('layouts.session')
                <div class="card-content-form">
                  {{Form::open(array('route' => 'save_post', 'method' => 'POST', 'files' => 'true'))}}
                    {{ csrf_field() }}
                    <div class="field">
                      <label class="label">Title</label>
                      <p class="control">
                        <input class="input" type="text" placeholder="Title" name="title" required>
                      </p>
                    </div>
                    <div class="field">
                      <label class="label">Content</label>
                      <p class="control">
                        <textarea class="textarea" placeholder="Content" name="content" required></textarea>
                      </p>
                    </div>
                    <div class="field">
                      <label class="label">Add a Picture</label>
                        <input class="input" type="file" name="post_picture" accept="image/*" required>
                    </div>
                    <div class="field">
                      <label class="label">Category</label>
                      <p class="control">
                        <div class="select is-fullwidth">
                          <select class="" name="category">
                            <option value="">No Category</option>
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </p>
                    </div>
                    <div class="field is-grouped">
                      <p class="control">
                        <button class="button is-button-grey">Send</button>
                      </p>
                    </div>
                  </form>
                </div>
                <!-- form end -->
              </div>
              <div class="has-text-right">
                <a class="button is-small" href="{{route('index_page')}}">Back to Home</a>
              </div>
            </div>
            <!-- end box content -->
          </div>
          <!-- end of post -->
        </div>
        <!-- sidebar content -->
        @include('layouts.sidenav')
      </div>
    </div>
  </div>
  <!-- end of main page content -->

    <script>
			CKEDITOR.replace( 'content' );
		</script>
  @endsection
