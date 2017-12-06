@extends('layouts.main')

@section('title')
  {{$post->slug}}
@endsection

@section('page-title')
  <!-- SabiLawyer -->
@endsection

@section('post-active')
  active
@endsection

@section('content')
<style media="screen">
  @media screen and (min-width: 600px){
    #mobile-share {
      visibility: hidden;
      clear: both;
      float: left;
      margin: 10px auto 5px 20px;
      display: none;
    }
  }

  li{
    display:inline-block;
  }

  /*#twiitter{
    background-color: red;
  }*/

</style>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=474774889527650';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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
                  @if($post->category)
                    <span class="tag is-black is-medium"><a class="has-text-white" href="{{route('view_posts_in_category', $post->category->id)}}">{{$post->category->name}}</a></span>
                  @endif
                </span>
              </h4>
              <small id="text-theme">Posted by Sabilawyer at {{ $post->created_at->format('M d Y, g:i:A') }}</small>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="columns">
                <div class="column is-12">
                  <img src="{{$post->post_picture}}">

                  <hr>
                  <div class="box-content-text">
                    {!! ($post->content) !!}
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
          <?php
            $url = urlencode("http://sabilawyer.com/".$post->slug);
           ?>
          <ul>
            <p>Share Post:</p>
            <li id="facebook">
              <div class="fb-share-button"
                data-href="http://sabilawyer.com/{{$post->slug}}"
                data-layout="button_count" data-size="large" data-mobile_iframe="true">
              </div>
            </li>
            <li id="twitter">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-via="sabilawyer"
                data-hashtags="sabilawyer" data-show-count="false">Tweet</a>
            </li>
            <!-- <li> -->
                <a id="mobile-share" href="whatsapp://send?text=http://www.sabilawyer.com"
                  data-action="share/whatsapp/share"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                </a>
            <!-- </li> -->
          </ul>
        </div>
        <!-- sidebar content -->
        @include('layouts.sidenav')
      </div>


    </div>
  </div>
  <!-- end of main page content -->

  <section>
    <div class="container">
      <div class="fb-comments" data-href="http://sabilawyer.com/{{$post->slug}}" data-numposts="5"></div>
    </div>
  </section>

  @endsection
