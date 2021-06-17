<header class="banner">
  <!-- <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div> -->
  <div class="wrapper">
    <div class="header-wrapper">
      <a class="brand" href="http>//www.bergheim41.de">Bergheim41</a>
      <div class="right-wrapper">
        <div class="hamburger-wrapper">
            <div class="hamburger-anim">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <script>
            $('.hamburger-anim').click(function(){
              $('.hamburger-anim').toggleClass('open');
            });
            </script>
            <span class="hamburger-text">menu</span>
        </div>
        
        <a class="book" href="#">BOOK</a>
        <a class="contact" href="#">Contact</a>
        <a class="arrival" href="#">Arrival</a>
      </div>
    </div>
  </div>
</header>
