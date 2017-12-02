<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="{{asset('img/sabilawyer1.png')}}" alt="Sabilawyer: Law For Everyone" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <a class="navbar-item has-text-black @yield('home-active')" id="link-nav" href="{{route('index_page')}}">
              Home
            </a>
            <a class="navbar-item has-text-black @yield('about-active')" href="{{route('about_page')}}">
              About
            </a>
            <a class="navbar-item has-text-black @yield('contact-active')" href="{{route('contact_page')}}">
              Contact
            </a>
            @if (Auth::check())
              <a class="navbar-item has-text-black @yield('post-active')" href="{{route('create_post')}}">
                New Post
              </a>
              <a class="navbar-item has-text-black @yield('category-active')" href="{{route('manage_categories')}}">
                Manage Categories
              </a>
              <a class="navbar-item has-text-black" href="{{route('logout')}}">
                Logout
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </nav>
