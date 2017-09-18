<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags-->

    <meta name="description" content="Sproos - Buy and sell">

    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, clothes">

    <meta name="author" content="Nabaleka">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/favicon.png') }}">

<!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    
    <title>Sproos</title>

     <!-- Favicon and Apple Icons-->

    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="apple-touch-icon" href="touch-icon-iphone.png">

    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">

    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">

    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->

    <link rel="stylesheet" media="screen" href="{{ asset('css/vendor.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">

    <!-- Main Styles-->

    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('css/styles.min.css')}}">
<style>

.owl-carousel .owl-dots .owl-dot{
    background : #ee2659;
}
.site-menu > ul > li > a {
    letter-spacing:3px;
}
.site-menu > ul > li > a:hover{
    color:#ee2956;
    background-color:#fff;
}
.offcanvas-toggle{
    color : #fff;
}

.topbar{
    background-color:#fff;
}

.navbar{
    background-color : #ee2956;
}

.toolbar .search{
    color : #fff;
    border: 1px solid #fff;
}

.card-img-tiles{
    border:0;
}

.toolbar .account{
    color : #fff;
    border: 1px solid #fff;
}

.toolbar .cart:hover, .toolbar .account:hover{
    color:#ee2956;
}

.toolbar .cart{
    color : #fff;
    border: 1px solid #fff;
}

.hero-slider > .owl-carousel.dots-inside .owl-dots{
    background-color : transparent;
}

.site-menu > ul > li> a{
    color:#fff;
    letter-spacing:2px;
}

.site-menu ul > li.active > a{

color:#444;

}

.site-menu > ul > li.active > a{

border-top-color: #ed2e56;

}

.btn-primary{

background-color:#ed2e56;

}

.offcanvas-menu ul li.back-btn > a {

    background-color: #444;

    color: #000;

}



    .offcanvas-header{

    background-color:#444;

    }



    .offcanvas-menu ul li.has-children .sub-menu-toggle:hover{

    background-color:#444;

    }



    .topbar .topbar-column a:not(.social-button), .topbar .topbar-column span, .topbar .topbar-column p{

    color:#000;

    }



    .page-title{

    color:#fff;

    background-color:#ed2e56;

    }



    .breadcrumbs > li > a{

    color:#fff;

    }

    .categories:hover{
    background-blend-mode: none !important;
    background-color:transparent !important;
    transition:1s;
    }



    .breadcrumbs > li{

    color:#efefef;

    } 



    .page-title h1, .page-title h2, .page-title h3{

    color:#fff;

    }



    .site-footer{

    background-color:#ee2956;

    }



    .list-group-item.active{

    background-color:#ed2e56;

    border-color:#444;

    }



    .badge.badge-primary{

    background-color:#ed2e56;

    }



    .custom-control .custom-control-input:checked ~ .custom-control-indicator{

    background-color:#ed2e56;

    }

    

    .widget-light-skin .widget-title{

    color:#fff;

    }



    .btn-outline-primary{

    border-color:#ed2e56;

    color:#ed2e56;

    }



    .btn-outline-primary:hover{

    background-color:#ed2e56;

    color:#fff;

    }



    .checkout-steps > a.active{

    background-color:#ed2e56;

    }



    .angle{

    display:hidden;

    }

    

    .offcanvas-toggle:hover{

    color:#ed2e56;

    }



    .offcanvas-menu ul li a:hover{

    color:#ededed;

    }



    .offcanvas-container{

    background-color:#ed2e56;

    letter-spacing:3px;

    }



    .offcanvas-menu ul li.active > a{

    color:#fff;

    }

    

    .market-button.mb-light-skin{

        background-color : #fff;

    }

    

    .market-button.mb-light-skin .mb-title{

        color : #ee2956;

    }

    

    .market-button.mb-light-skin .mb-subtitle{

        color : #000;

    }



    .btn-success {

    background-color: rgba(0,0,0,0.3);

    }



    .sb-light-skin.shape-circle{

    border-color: rgba(255,255,255,0.72);

    }



    .shop-view > a {

    border : 1px solid #ee2956;

    }



    .shop-view > a span{

    background-color : #ee2956;

    }


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


    .shop-view > a span::before {

    background-color : #ee2956;

    }



    .shop-view > a span::after{

    background-color : #ee2956;

    }



    .img-thumbnail {

    border : 1px solid #ee2956;

    }



    .list-group-item.active{

    border-color : #e1e7ec;

    }

    

    .widget-light-skin.widget-categories ul > li::before, .widget-light-skin.widget-links ul > li::before {

color: rgba(231, 231, 232,.7);

}


.cat:hover{
background-color:#efefef;
}



</style>
  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
      </div>
     <nav class="offcanvas-menu">
        <ul class="menu">
        @foreach($categories as $category)
         <li style=""><span><a href="/shop/{{ $category->id }}/category">{{ $category->title}}</a></span></li>
        @endforeach
        </ul>
        </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html"><i class="icon-head"></i><span>Hello</span>
    @if(Auth::guard('buyer')->check())
        {{Auth::guard('buyer')->user()->first_name ." ".Auth::guard('buyer')->user()->last_name  }}
    @else
    There!

    @endif
    </a>
      <nav class="offcanvas-menu">
        <ul class="menu">
            <li style="padding:10px; background-color:#5d5d5d;">
                <form class="input-group form-group " style="margin-bottom:-5px;" method="post" action="/search"><span class="input-group-btn" >
                {{ csrf_field()}}
                    <button type="submit" class=" btn-primary" style="color:#ee2956;"><i class="icon-search"></i></button></span>
                    <input class="form-control" style="border:unset; border-bottom:1px ;" type="search" placeholder="Search for anything">
                </form>
            </li>

         <li class="active"><a href="/"><span><i class="fa fa-home" style="font-size:150%;"></i> Home</span></a></li>

          <li class="has-children"><span><a href="/shop-grid"><span><i class="fa fa-navicon" style="font-size:150%; letter-spacing:8px;"></i>Categories</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              @foreach($categories as $category)
              <li><span><a href="/shop/{{ $category->id }}/category"><span>{{ $category->title}}</span></a><span></span></span></li>
              @endforeach
            </ul>
          </li>

          <li><span><a href="/shop-grid"><i class="fa fa-shopping-cart" style="font-size:150%; letter-spacing:8px;"></i> SHop Now</a></span></li>

          <li class="has-children"><span><a href="/account-profile"><span><i class="fa fa-user" style="font-size:150%; letter-spacing:8px;"></i> My Account</span></a><span class="sub-menu-toggle"></span></span>
          
            <ul class="offcanvas-submenu">
               
                @if(Auth::guest())

                <li><a href="/login">Login / Register</a></li>
                <li><a href="/seller">Seller</a></li>

                @else

                <li><a href="/account-orders">Orders List</a></li>

                <li><a href="/account-profile">Profile Page</a></li>

                <li><a href="/account-address"><i class="fa fa-address-book" style="font-size:150%; letter-spacing:8px;"></i>Address</a></li>
                
                <li><a href="{{ route('buyer.logout') }}"> Logout</a></li>

                @endif

            </ul>

          </li>
          
          <li><span><a href="/contact-us"><i class="fa fa-address-book" style="font-size:150%; letter-spacing:8px;"></i>Contact Us</a></span></li>

          <li><span><a href="#"><span><i class="fa fa-book" style="font-size:150%; letter-spacing:8px;"></i>Seller Guide</span></a></li>

          <li><span><a href="#"><span><i class="fa fa-reply" style="font-size:150%; letter-spacing:8px;"></i>Return Policy</span></a></li>

          <li><span><a href="#"><span><i class="fa fa-users"></i> Share App</span></a></li>

          <li><span><a href="/faq"><span><i class="fa fa-info-circle" style="font-size:150%; letter-spacing:8px;"></i>FAQ / Help</span></a></li>
          

        </ul>

      </nav>
    </div>
   <div class="topbar">

      <div class="topbar-column">
      <a class="hidden-md-down" href="mailto:info@sproos.com"><i class="icon-mail"></i>&nbsp;info@sproos.com</a>
      

      <a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a>
      <a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a>
      <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a>
      <a class="social-button sb-whatsapp shape-none sb-dark" href="#" target="_blank"><i class="socicon-whatsapp"></i></a>

      </div>

      <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>

        <div class="lang-currency-switcher-wrap">

          <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="{{ asset('img/flags/KE.png') }}"></span><span class="currency">KES</span></div>

          <div class="dropdown-menu">

            <div class="currency-select">

              <select class="form-control form-control-rounded form-control-sm">

                <option value="usd">KES </option>

              </select>

            </div>

            <a class="dropdown-item" href="#"><img src="{{ asset('img/flags/KE.png') }}" alt="English">English</a>


          </div>

        </div>

      </div>

    </div>

    <!-- Navbar-->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->
   @include('inc.navbar')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">

    @yield('content')


    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/scripts.min.js') }}"></script>
  </body>
</html>