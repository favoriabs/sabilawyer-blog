<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bulma-0.4.0.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SabiLawyer @yield('title')</title>

    <!-- Styles -->
    <style>
      #login{
        margin-top: 200px;
        /*border: 0.05px solid;*/
        box-shadow: 2px 2px #E0675B;
      }
      button{
        float: right;
      }
    </style>
</head>
<body>
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-half is-offset-one-quarter" id="login">
        @include('layouts.errors')
        @include('layouts.session')
        <div class="">
          <img src="{{asset('img/sabilawyer1.png')}}" alt="Sabilawyer Logo">
        </div>
        <form class="" action="{{route('handle_login')}}" method="post">
          {{ csrf_field() }}
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Email" name="email">
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password" name="password">
              <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="">
            <div class="field">
              <p class="control">
                <button class="button is-dark is-medium">
                  Login
                </button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
