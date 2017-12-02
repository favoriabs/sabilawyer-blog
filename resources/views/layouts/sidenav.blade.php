<div class="column is-4 is-narrow">
  <!-- sidebar subscriptions -->
  <div class="card-wrapper">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title has-text-white-bis" id="theme">
          Recently Added
        </p>
      </header>
      <div class="card-content">
        <div class="content">
          @foreach($posts->take(5) as $post)
            <p><span class="tag is-black"><a class="has-text-white" href="{{route('view_post', $post->slug)}}">{{$post->title}}</a></span></p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- end of sidebar subscriptions -->

  <!-- sidebar labels -->
  <div class="card-wrapper">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title" id="theme">
          Categories
        </p>
      </header>
      <div class="card-content">
        <div class="content">
          <div class="labels">
            @foreach($categories as $category)
              <span class="tag is-black"><a class="has-text-white" href="{{route('view_posts_in_category', $category->id)}}">{{$category->name}}</a></span>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- end of sidebar labels -->
  </div>
  <!-- end of sidebar content -->
</div>
