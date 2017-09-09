<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

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



    <title>Sproos</title>



    <!-- Styles -->

     <!-- Favicon and Apple Icons-->

    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="apple-touch-icon" href="touch-icon-iphone.png">

    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">

    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">

    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->

    <link rel="stylesheet" media="screen" href="{{ asset('css/vendor.min.css') }}">

    <!-- Main Styles-->

    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->

    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('css/styles.min.css')}}">

    <style>

.row .product-card,
.row .product-thumb {
  flex:1 0 auto;
  flex-direction:column;
}
.product-text {
  flex-grow:1
}
.flex-row img {
  height:auto;
  width:100%
}
.owl-carousel .owl-dots .owl-dot{
  background : #ee2659;
  
}

    img{
      width : 100%;
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



    .toolbar .account{

      color : #fff;

      border: 1px solid #fff;

    }

  .cat:hover{
    background-color:#fefefe;
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


body{

  display:none;
}

.cat:hover{
  background-color:#efefef;
}



    </style>

    <!-- Modernizr-->
     <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Styles -->
        <script>
        $( document ).ready(function() {
            $("body").show('slow').fadeIn(10000).delay(3000);
        });
    </script>


    

</head>

<body>

<!-- Off-Canvas Category Menu-->

    <div class="offcanvas-container" id="shop-categories" style="background-color:#ed2e56; box-shadow:unset;">

      <div class="offcanvas-header">

        <h3 class="offcanvas-title">Shop by Categories</h3>

      </div>
    {{-- Load cateories dynamically --}}
      <nav class="offcanvas-menu">
        <ul class="menu">
        @foreach($categories as $category)
         <li><span><a href="/shop/{{ $category->id }}/category">{{ $category->title}}</a></span></li>
        @endforeach

        </ul>

      </nav>

    </div>

    <!-- Off-Canvas Mobile Menu-->

    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="/account-orders"><i class="icon-head"></i>@if(Auth::guest())<span>Hello</span>@else Welcome @endif</a>

      <nav class="offcanvas-menu">

        <ul class="menu">

          <li class="active"><a href="/"><span>Home</span></a></li>

          <li class="has-children"><span><a href="/shop-grid"><span>Categories</span></a><span class="sub-menu-toggle"></span></span>

            <ul class="offcanvas-submenu">
              @foreach($categories as $category)
              <li><span><a href="/shop/{{ $category->id }}/category"><span>{{ $category->title}}</span></a><span></span></span></li>
              @endforeach
            </ul>

          </li>

          <li><span><a href="/shop-grid">SHop Now</a></span></li>

          <li class="has-children"><span><a href="/account-profile"><span>My Account</span></a><span class="sub-menu-toggle"></span></span>
          
            <ul class="offcanvas-submenu">
               
                @if(Auth::guest())

                <li><a href="/login">Login / Register</a></li>
                <li><a href="/seller">Seller</a></li>

                @else

                <li><a href="/account-orders">Orders List</a></li>

                <li><a href="/account-profile">Profile Page</a></li>

                <li><a href="/account-address">Contact / Shipping Address</a></li>

                @endif

            </ul>

          </li>
          
          <li><span><a href="/contact-us">Contact Us</a></span></li>

          <li></i><a href="#"><span>Seller Guide</span></a></li>

          <li></i><a href="#"><span>Return Policy</span></a></li>

          <li></i><a href="#"><span>Share App</span></a></li>

          <li></i><a href="/faq"><span>FAQ / Help</span></a></li>
          

        </ul>

      </nav>

    </div>

    <!-- Topbar-->

    <div class="topbar">

      <div class="topbar-column">
      <a class="hidden-md-down" href="mailto:info@sproos.com"><i class="icon-mail"></i>&nbsp;info@sproos.com</a>
      <a class="hidden-md-down" href="tel:#"><i class="icon-bell"></i>&nbsp; (+254)715-725-418</a>

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

                <option value="usd">$ USD</option>

                <option value="usd">â‚¬ EUR</option>

                <option value="usd">Â£ UKP</option>

                <option value="usd">Â¥ JPY</option>

              </select>

            </div>

            <a class="dropdown-item" href="#"><img src="{{ asset('img/flags/KE.png') }}" alt="English">English</a>

            <a class="dropdown-item" href="#"><img src="{{ asset('img/flags/FR.png') }}" alt="FranÃ§ais">FranÃ§ais</a>

            <a class="dropdown-item" href="#"><img src="{{ asset('img/flags/DE.png') }}" alt="Deutsch">Deutsch</a>

            <a class="dropdown-item" href="#"><img src="{{ asset('img/flags/IT.png') }}" alt="Italiano">Italiano</a>

          </div>

        </div>

      </div>

    </div>

    @include('inc.navbar')

    <!-- Off-Canvas Wrapper-->

    <div class="offcanvas-wrapper">

      <!-- Page Content-->

    @yield('content')

@include('inc.footer')

    </div>

 



    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>

    <!-- Backdrop-->

    <div class="site-backdrop"></div>



    <!-- Scripts -->
    

    

    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/scripts.min.js') }}"></script>


</body>

</html>

