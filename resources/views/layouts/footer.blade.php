<footer class="footer" id="theme">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <span class="icon">
          <a href="https://www.facebook.com/sabilawyer" target="_blank">
            <img src="{{asset('img/1.png')}}" alt="sabilawyer facebook">
          </a>
        </span>
        <span class="icon">
          <a href="https://www.twitter.com/sabilawyer" target="_blank">
            <img src="{{asset('img/3.png')}}" alt="sabilawyer twitter">
          </a>
        </span>
        <span class="icon">
          <a href="https://www.instagram.com/sabilawyer" target="_blank">
            <img src="{{asset('img/IG.png')}}" alt="sabilawyer instagram">
          </a>
        </span>
      </p>
      <p>
        &copy; SabiLawyer {{date('Y')}}. All rights reserved.
      </p>
   </div>
 </div>
</footer>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

      // Add a click event on each of them
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

          // Get the target from the "data-target" attribute
          var target = $el.dataset.target;
          var $target = document.getElementById(target);

          // Toggle the class on both the "navbar-burger" and the "navbar-menu"
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }

    });
</script>
