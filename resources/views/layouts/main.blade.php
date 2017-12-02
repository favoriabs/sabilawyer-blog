<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sabilawyer: Law For Everyone - @yield('title')</title>
    <!-- styles and fonts -->
    <link rel="stylesheet" href="{{asset('css/bulma-0.4.0.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <!-- end of styles and fonts -->
    @yield('editor_script')
  </head>
  <body>
    @include('layouts.navbar')

    <!-- page header -->
    <div class="page-header">
      <div class="section">
        <div class="container">
          <div class="has-text-left">
            <h3 class="title is-size-4">@yield('page-title')</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- end of page header -->

    @yield('content')

    <!-- footer: will stick at the bottom -->
    @include('layouts.footer')
    <!-- end footer -->
  </body>
</html>
