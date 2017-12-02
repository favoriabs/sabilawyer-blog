@extends('layouts.main')

@section('title')
  About
@endsection

@section('page-title')
  <!-- SabiLawyer -->
@endsection

@section('contact-active')
  active
@endsection

@section('content')
<div class="hero-body">
  <div class="container">
    <div class="columns is-multiline">
      <div class="column is-8">
        <!-- start of post -->
        <div class="box">
          <!-- box header -->
          <div class="box-header">
            <h4 class="title is-4">
              Contact
              <!-- contact navigation socials -->
              <span class="labels is-pulled-right">
                <div class="nav-center">
                  <a class="nav-item" href="https://www.facebook.com/sabilawyer">
                    <span class="icon">
                      <i class="fa fa-facebook"></i>
                    </span>
                  </a>
                  <a class="nav-item" href="https://www.twitter.com/sabilawyer">
                    <span class="icon">
                      <i class="fa fa-twitter"></i>
                    </span>
                  </a>
                  <a class="nav-item" href="https://www.instagram.com/sabilawyer">
                    <span class="icon">
                      <i class="fa fa-instagram"></i>
                    </span>
                  </a>
                </div>
              </span>
              <!-- end of contact navigation socials -->
            </h4>
          </div>
          <!-- end of box header -->

          <!-- box content -->
          <div class="box-content">
            <div class="box-content-text">
              <small id="text-theme">3rd Floor, TAEN Plaza, opp old NITEL, Yakubu Gowon way, Jos, Plateau State.</small>
              <!-- form begin -->
              <div class="card-content-form">
                @include('layouts.session')
                <form method="post" action="/send/mail">
                  {{ csrf_field() }}
                  <div class="field">
                    <label class="label">Name</label>
                    <p class="control">
                      <input class="input" type="text" placeholder="Your Name" name="sender_name">
                    </p>
                  </div>
                  <div class="field">
                    <label class="label">Email</label>
                    <p class="control">
                      <input class="input" type="email" placeholder="Email" name="email" required>
                    </p>
                  </div>
                  <div class="field">
                    <label class="label">Mail Title</label>
                    <p class="control">
                      <input class="input" type="text" placeholder="Give your mail a title" name="title" required>
                    </p>
                  </div>
                  <div class="field">
                    <label class="label">Mail Message</label>
                    <p class="control">
                      <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                    </p>
                  </div>
                  <div class="field is-grouped">
                    <p class="control">
                      <button class="button is-button-grey">Send</button>
                    </p>
                    <!-- <p class="control">
                      <button class="button is-button-grey">Clear</button>
                    </p> -->
                  </div>
                </form>
              </div>
              <!-- form end -->
            </div>
            <div class="has-text-right">
              <a class="button is-small" href="index.html">Back to Home</a>
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
