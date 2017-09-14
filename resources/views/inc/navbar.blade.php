    <!-- Navbar-->

    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->

    <header class="navbar navbar-sticky" style="margin-bottom:0;">
      <!-- Search-->
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

          <li><a href="/shop-grid"><span>SHOP NOW</span></a>
          </li>


          
          @if(!Auth::guard('buyer')->check())
          <li><a href="/register"><span>REGISTER</span></a>
          <ul class="sub-menu">
                <li><a href="/seller-register">Seller</a></li>
                <li><a href="/login">Buyer</a></li>

            </ul>
            </li>
          <li><a href=""><span>Login</span></a>
            <ul class="sub-menu">
                <li><a href="/seller-login">Seller</a></li>
                <li><a href="/login">Buyer</a></li>

            </ul>

          </li>
          @endif

          <li style="display:flex-box; min-width:400px;"><form class="input-group form-group " style="margin-bottom:0;" method="post" action="/search"><span class="input-group-btn" >
                {{ csrf_field()}}
                    <button type="submit" class=" btn-primary" style="color:#ee2956;"><i class="icon-search"></i></button></span>
                  <input class="form-control" style="border:unset; border-bottom:1px ;" type="search" name="search_data" placeholder="Search by Category, Name, Price">
                </form></li>
        </ul>

      </nav>
      <!-- Toolbar-->

      <div class="toolbar">

        <div class="inner">

          <div class="tools">           

            <div class="account"><a href="/account-orders"></a><i class="icon-head"></i>
            @if(!Auth::guard('buyer')->check())
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
                <li><a href="{{ route('buyer.logout') }}"> Logout</a></li>
              </ul>
              @endif
            </div>
        


                

            @include('inc.cart')

            

          </div>

        </div>

      </div>

    </header>