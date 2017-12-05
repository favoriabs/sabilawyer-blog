@extends('layouts.main')

@section('title')
  Home
@endsection

@section('page-title')
  You searched for <b>"{{$query}}"</b>
@endsection

@section('content')

  <!-- main page content -->
  <div class="hero-body">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column is-8">

          @foreach($searchedPosts as $post)
          <!-- start of post -->
          <div class="box" id="box-bound">
            <!-- box header -->
            <div class="box-header">
              <h4 class="title is-4">
                {{$post->title}}
                <span class="labels is-pulled-right">
                  <span class="tag is-black is-medium"><a class="has-text-white" href="#">{{$post->category->name}}</a></span>
                </span>
              </h4>
              <small id="text-theme">Posted by Sabilawyer at {{$post->created_at}}</small>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="columns">
                <div class="column is-4">
                  <img src="{{$post->post_picture}}">
                </div>
                <div class="column">
                  <div class="box-content-text">
                    <p>{!!str_limit($post->content, 300)!!}</p>
                  </div>
                  <div class="has-text-right">
                    <a class="button is-small" href="{{route('view_post', $post->slug)}}">Read More</a>
                    @if (Auth::check())
                      <a class="button is-small is-warning" href="{{route('edit_post', $post->id)}}">Edit Post</a>
                      <a class="button is-small is-danger" href="{{route('delete_post', $post->id)}}">Delete Post</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- end box content -->
          </div>
          <!-- end of post -->
          @endforeach

          <!-- pagination -->
          <nav class="pagination">
            {{ $searchedPosts->links('vendor.pagination.bulma') }}
          </nav>
          <!-- end of pagination -->
        </div>
        <!-- sidebar content -->
        @include('layouts.sidenav')
      </div>
    </div>
  </div>
  <!-- end of main page content -->
  @endsection
