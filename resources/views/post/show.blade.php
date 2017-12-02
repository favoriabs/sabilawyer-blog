@extends('layouts.main')

@section('title')
  Home
@endsection

@section('page-title')
  <!-- SabiLawyer -->
@endsection

@section('post-active')
  active
@endsection

@section('content')

  <!-- main page content -->
  <div class="hero-body">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column is-8">

          <!-- start of post -->
          <div class="box" id="box-bound">
            <!-- box header -->
            <div class="box-header">
              <h4 class="title is-4">
                {{$post->title}}
                <span class="labels is-pulled-right">
                  <span class="tag is-black is-medium"><a class="has-text-white" href="{{route('view_posts_in_category', $post->category->id)}}">{{$post->category->name}}</a></span>
                </span>
              </h4>
              <small id="text-theme">Posted by Sabilawyer at {{$post->created_at}}</small>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="columns">
                <div class="column is-12">
                  <img src="{{$post->post_picture}}">

                  <hr>
                  <div class="box-content-text">
                    <p>{!!$post->content!!}</p>
                  </div>
                  <div class="has-text-right">
                    <a class="button is-small" href="{{route('index_page')}}">Back to Home</a>
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

        </div>
        <!-- sidebar content -->
        @include('layouts.sidenav')
      </div>
    </div>
  </div>
  <!-- end of main page content -->
  @endsection
