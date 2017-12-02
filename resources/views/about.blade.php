@extends('layouts.main')

@section('title')
  About
@endsection

@section('page-title')
  <!-- SabiLawyer -->
@endsection

@section('about-active')
  active
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
                About
              </h4>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="box-content-text">
                <p>Sabilawyer tells the Law in stories that can be easily understood by everyone.
                Bringing legal principles from judicial precedents purged of jargons but succinct enough to educate and point in the direction for solution where necessary.
                 Know right, do right. There is a better way when you know.
                In case you have questions, be free to contact us.</p>
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
  @endsection
