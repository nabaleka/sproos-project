    <!-- Navbar-->
<style>
       .site-search .search-tools{
         top : 27px;
       }
       .custom-select{
         border-radius : 22px;
         border-color : #ee2956;
       }
       .clear-search {
         border-radius: 22px;
         border-color : #ee2956;
         padding : 4px 15px;
         color : #ee2956;
       }
      
</style>
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->

    <header class="navbar navbar-sticky" style="margin-bottom:0;">

      <!-- Search-->

      <form class="site-search" method="get" action="/search" id="search" onsubmit="checkform(this)">

        <input type="text" name="site_search" placeholder="Type to search and press Enter">

        <div class="search-tools">
        <script>
          function checkform(form) {
              // get all the inputs within the submitted form
              var inputs = form.getElementsByTagName('site_search');
              for (var i = 0; i < inputs.length; i++) {
                  // only validate the inputs that have the required attribute
                  if(inputs[i].value == ""){
                      // found an empty field that is required
                      alert("Please fill all required fields");
                      return false;
                  }
              }
              return true;
          }

          function search(){
            var x = document.getElementById("search").submit();
          }
        </script>
        <select class=" custom-select">
<option selected>African</option>
<option value="1">Men</option>
<option value="2">Women</option>
<option value="3">Kids</option>
</select>
          <span class="clear-search" onclick="search();"><a class="btn btn-outline-primary btn-sm">SEARCH </a></span>
          <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    

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
          @if(Auth::guest())
          <li><a href="/register"><span>REGISTER</span></a></li>
          <li><a href=""><span>Login</span></a>
            <ul class="sub-menu">
                <li><a href="/seller-login">Seller</a></li>
                <li><a href="/login">Buyer</a></li>

            </ul>

          </li>
          @endif
        </ul>

      </nav>

      <!-- Toolbar-->

      <div class="toolbar">

        <div class="inner">

          <div class="tools">

            <div class="search"><i class="icon-search"></i></div>
            

            <div class="account"><a href="/account-orders"></a><i class="icon-head"></i>
            @if(Auth::guard('buyer')->guest())
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
                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> <i class="icon-unlock"></i>Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
              </ul>
              @endif
            </div>
        


                

            @include('inc.cart')

            

          </div>

        </div>

      </div>

    </header>