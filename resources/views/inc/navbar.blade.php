    <!-- Navbar-->

    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->

    <header class="navbar navbar-sticky" style="margin-bottom:0;">

      <!-- Search-->

      <form class="site-search" method="get">

        <input type="text" name="site_search" placeholder="Type to search...">

        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>

      </form>

      <div class="site-branding">

        <div class="inner">

          <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>

          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>

          <!-- Site Logo--><a class="site-logo" href="/"><img src="{{ asset('img/logo/sproos-logo.png') }}" alt="Sproos"></a>

        </div>

      </div>

      <!-- Main Navigation-->

      <nav class="site-menu">

        <ul>

          <li><a href="/"><span>Home</span></a>

          </li>

          <li><a href="/shop-grid"><span>Buy</span></a>
          </li>

          <li><a href="#"><span>More</span></a>

            <ul class="sub-menu">

                <li><a href="/about">About Us</a></li>

                <li><a href="/terms">Terms of use</a></li>

                <li><a href="/contacts-us">Contacts</a></li>

                <li><a href="/faq">Help / FAQ</a></li>

            </ul>

          </li>
        </ul>

      </nav>

      <!-- Toolbar-->

      <div class="toolbar">

        <div class="inner">

          <div class="tools">

            <div class="search"><i class="icon-search"></i></div>
            

            <div class="account"><a href="/account-orders"></a><i class="icon-head"></i>
            @if(Auth::guest())
             <ul class="toolbar-dropdown">

                <li class="sub-menu-title"><span>Need an account?</span></li>

                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
            @else

              <ul class="toolbar-dropdown">

                <li class="sub-menu-title"><span>Hello,</span></li>

                  <li><a href="/account-profile">My Profile</a></li>

                  <li><a href="/account-orders">Orders List</a></li>

                <li class="sub-menu-separator"></li>
                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> <i class="icon-unlock"></i>Logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </ul>
                @endif
            </div>
        


                

            @include('inc.cart')

            

          </div>

        </div>

      </div>

    </header>