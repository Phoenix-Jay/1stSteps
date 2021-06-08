<header class="banner">
  <!--   <div class="container">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div> -->

  <div class="wrapper">
    <div class="header-wrapper">
      <a class="brand" href="https://www.bergheim41.de/en/">Bergheim41</a>
      <div class="right-wrapper">
        <!-- Hamburger menu with OnClick() animation-->
        <div class="hamburger-wrapper"> 
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <span class="hamburger-menu" >menu</span>
        </div>
        <!-- Opens the booking app in US english locale -->
        <a class="buchen" href="https://book-qres.qr-hotels.com/?chain=19763&amp;hotel=75005&amp;level=Hotel&amp;locale=en-US" target="_blank">book</a>
        <div class="language-switcher">
          <div class="desktop">
            	<li class="lang-item lang-item-2 lang-item-de lang-item-first"><a lang="de-DE" hreflang="de-DE" href="https://www.bergheim41.de/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGzSURBVHjaYvTxcWb4+53h3z8GZpZff/79+v3n/7/fDAz/GHAAgABi+f37e3FxOZD1Dwz+/v3z9y+E/AMFv3//+Qumfv9et241QACxMDExAVWfOHkJJAEW/gUEP0EQDn78+AHE/gFOQJUAAcQiy8Ag8O+fLFj1n1+/QDp+/gQioK7fP378+vkDqOH39x9A/RJ/gE5lAAhAYhzcAACCQBDkgRXRjP034R0IaDTZTFZn0DItot37S94KLOINerEcI7aKHAHE8v/3r/9//zIA1f36/R+o4tevf1ANYNVA9P07RD9IJQMDQACxADHD3z8Ig4GMHz+AqqHagKp//fwLVA0U//v7LwMDQACx/LZiYFD7/5/53/+///79BqK/EMZ/UPACSYa/v/8DyX9A0oTxx2EGgABi+a/H8F/m339BoCoQ+g8kgRaCQvgPJJiBYmAuw39hxn+uDAABxMLwi+E/0PusRkwMvxhBGoDkH4b/v/+D2EDyz///QB1/QLb8+sP0lQEggFh+vGXYM2/SP6A2Zoaf30Ex/J+PgekHwz9gQDAz/P0FYrAyMfz7wcDAzPDtFwNAgAEAd3SIyRitX1gAAAAASUVORK5CYII=" title="DE" alt="DE" width="16" height="11"><span style="margin-left:0.3em;">DE</span></a></li>
	            <li class="lang-item lang-item-5 lang-item-en current-lang"><a lang="en-US" hreflang="en-US" href="https://www.bergheim41.de/en/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC" title="EN" alt="EN" width="16" height="11"><span style="margin-left:0.3em;">EN</span></a></li>
          </div>
          <div class="mobile">
            <select name="lang_choice_1" id="lang_choice_1" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
	            <option value="de">DE</option>
	            <option value="en" selected="selected">EN</option>
            </select>
            <span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;">
                <span class="selection">
                  <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-lang_choice_1-container">
                    <span class="select2-selection__rendered" id="select2-lang_choice_1-container" title="EN">
                      EN
                    </span>
                    <span class="select2-selection__arrow" role="presentation">
                    <b role="presentation"></b>
                    </span>
                  </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true">
                </span>
              </span>
            <script type="text/javascript">
            //<![CDATA[
              var urls_1 = {"de":"https:\/\/www.bergheim41.de\/","en":"https:\/\/www.bergheim41.de\/en\/"};
              document.getElementById( "lang_choice_1" ).onchange = function() {
                location.href = urls_1[this.value];
              }
            //]]>
				    </script> 
          </div>
        </div>
        <a class="kontakt" href="https://www.bergheim41.de/en/contact/">
          Contact
        </a> 
        
        <a class="anfahrt" href="https://www.bergheim41.de/en/location/">
          Approach 
        </a>
        </div>
        <nav class="nav-primary-wrapper"> 
          <div class="primary-menu-en-container">
          </div>
          <nav class="nav-secondary-wrapper">
            <div class="secondary-menu-en-container">
            </div>
          </nav>
          <div class="social-icons-container">
          </div>
        </nav>
        <div class="active-helpdesk-overlay">
        </div>
        <div class="helpdesk">
        <!-- here goes contact form -->
        </div>
      </div>
      <div class="heldesk-toggle helpdesk-overlay">
    <!-- Helpdesk contact form visibility toggle button  -->
      </div>
  </div> 
</header>
