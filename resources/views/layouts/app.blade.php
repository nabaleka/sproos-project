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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
        background-color:#ed2e56;
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
     
     .widget-light-skin.widget-categories ul > li::before, .widget-light-skin.widget-links ul > li::before {
	color: rgba(231, 231, 232,.7);
}
    /*
      .site-menu > ul > li> a{
        color:#ed2e56;
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
          color: #fff;
      }

      .offcanvas-header{
        background-color:#444;
      }

      .offcanvas-menu ul li.has-children .sub-menu-toggle:hover{
        background-color:#444;
      }


      .topbar .topbar-column a:not(.social-button), .topbar .topbar-column span, .topbar .topbar-column p{
        color:#ed2e56
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
        background-color:#ed2e56;
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
     }*/

    </style>
    <!-- Modernizr-->
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    
</head>
<body>
<!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories" style="background-color:#ed2e56; box-shadow:unset;">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Loafers</a></li>
              <li><a href="#">Boat Shoes</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Flats</a></li>
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Heels</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Shirts &amp; Tops</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Jackets</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Dresses</a></li>
              <li><a href="#">Shirts &amp; Tops</a></li>
              <li><a href="#">Shorts</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Kid's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Boots</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Crib Shoes</a></li>
              <li><a href="#">Loafers</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Handbags</a></li>
              <li><a href="#">Backpacks</a></li>
              <li><a href="#">Luggage</a></li>
              <li><a href="#">Wallets</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sunglasses</a></li>
              <li><a href="#">Hats</a></li>
              <li><a href="#">Watches</a></li>
              <li><a href="#">Jewelry</a></li>
              <li><a href="#">Belts</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="/account-orders"><i class="icon-head"></i><span>Hello</span>, John Doe</a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><a href="index.html"><span>Home</span></a>
          </li>
          <li class="has-children"><span><a href="/shop-grid"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="/shop-categories">Shop Categories</a></li>
              <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="/shop-list"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="/shop-single">Single Product</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="/account-checkout">Checkout</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="/shop-categories">Categories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Loafers</a></li>
                  <li><a href="#">Boat Shoes</a></li>
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">Flats</a></li>
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Heels</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Jackets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Swimwear</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Handbags</a></li>
                  <li><a href="#">Backpacks</a></li>
                  <li><a href="#">Luggage</a></li>
                  <li><a href="#">Wallets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sunglasses</a></li>
                  <li><a href="#">Hats</a></li>
                  <li><a href="#">Watches</a></li>
                  <li><a href="#">Jewelry</a></li>
                  <li><a href="#">Belts</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="/account-orders"><span>Account</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="/account-login">Login / Register</a></li>
                <li><a href="/account-orders">Orders List</a></li>
                <!--li><a href="/account-wishlist">Wishlist</a></li-->
                <li><a href="/account-profile">Profile Page</a></li>
                <li><a href="/account-address">Contact / Shipping Address</a></li>
                
            </ul>
          </li>
          <li class="has-children"><span><a href="blog-rs.html"><span>Blog</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="blog-single-rs.html"><span>Single Post Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                    <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                    <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#"><span>Pages</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="mobile-app.html">Unishop Mobile App</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404</a></li>
              <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
            </ul>
          </li>
          <!--li class="has-children"><span><a href="components/accordion.html"><span>Components</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="components/accordion.html">Accordion</a></li>
                <li><a href="components/alerts.html">Alerts</a></li>
                <li><a href="components/buttons.html">Buttons</a></li>
                <li><a href="components/cards.html">Cards</a></li>
                <li><a href="components/carousel.html">Carousel</a></li>
                <li><a href="components/countdown.html">Countdown</a></li>
                <li><a href="components/forms.html">Forms</a></li>
                <li><a href="components/gallery.html">Gallery</a></li>
                <li><a href="components/google-maps.html">Google Maps</a></li>
                <li><a href="components/images.html">Images &amp; Figures</a></li>
                <li><a href="components/list-group.html">List Group</a></li>
                <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                <li><a href="components/modal.html">Modal</a></li>
                <li><a href="components/pagination.html">Pagination</a></li>
                <li><a href="components/pills.html">Pills</a></li>
                <li><a href="components/progress-bars.html">Progress Bars</a></li>
                <li><a href="components/shop-items.html">Shop Items</a></li>
                <li><a href="components/tables.html">Tables</a></li>
                <li><a href="components/tabs.html">Tabs</a></li>
                <li><a href="components/team.html">Team</a></li>
                <li><a href="components/toasts.html">Toast Notifications</a></li>
                <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                <li><a href="components/typography.html">Typography</a></li>
                <li><a href="components/video-player.html">Video Player</a></li>
                <li><a href="components/widgets.html">Widgets</a></li>
            </ul>
          </li-->
        </ul>
      </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@sproos.co.ke"><i class="icon-mail"></i>&nbsp; support@sproos.co.ke</a><a class="hidden-md-down" href="tel:#"><i class="icon-bell"></i>&nbsp; 00 00 000 000</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
      </div>
      <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
          <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="img/flags/KE.png"></span><span class="currency">KES</span></div>
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
            <a class="dropdown-item" href="#"><img src="img/flags/KE.png" alt="English">English</a>
            <a class="dropdown-item" href="#"><img src="img/flags/FR.png" alt="FranÃ§ais">FranÃ§ais</a>
            <a class="dropdown-item" href="#"><img src="img/flags/DE.png" alt="Deutsch">Deutsch</a>
            <a class="dropdown-item" href="#"><img src="img/flags/IT.png" alt="Italiano">Italiano</a>
          </div>
        </div>
      </div>
    </div>
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
          <!-- Site Logo--><a class="site-logo" href="/"><img src="img/logo/sproos-logo.png" alt="Sproos"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="active"><a href="/"><span>Home</span></a>
          </li>
          <li><a href="/shop-grid"><span>Shop</span></a>
            <ul class="sub-menu">
                <li><a href="/shop-categories">Shop Categories</a></li>
              <li class="has-children"><a href="/shop-grid"><span>New</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="shop-list-ls.html"><span>Used</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li><a href="cart.html">Cart</a></li>
              <li class="has-children"><a href="/checkout-address"><span>Checkout</span></a>
                <ul class="sub-menu">             
                    <li><a href="/checkout-address">Address</a></li>
                    <li><a href="/checkout-shipping">Shipping</a></li>
                    <li><a href="/checkout-payment">Payment</a></li>
                    <li><a href="/checkout-review">Review</a></li>
                    <li><a href="/checkout-complete">Complete</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!--
          <li class="has-megamenu"><a href="#"><span>Mega Menu</span></a>
            <ul class="mega-menu">
              <li><span class="mega-menu-title">Top Categories</span>
                <ul class="sub-menu">
                  <li><a href="#">Men's Shoes</a></li>
                  <li><a href="#">Women's Shoes</a></li>
                  <li><a href="#">Shirts and Tops</a></li>
                  <li><a href="#">Swimwear</a></li>
                  <li><a href="#">Shorts and Pants</a></li>
                  <li><a href="#">Accessories</a></li>
                </ul>
              </li>
              <li><span class="mega-menu-title">Specialty Shops</span>
                <ul class="sub-menu">
                  <li><a href="#">Junior's Shop</a></li>
                  <li><a href="#">Swim Shop</a></li>
                  <li><a href="#">Athletic Shop</a></li>
                  <li><a href="#">Outdoor Shop</a></li>
                  <li><a href="#">Luxury Shop</a></li>
                  <li><a href="#">Accessories Shop</a></li>
                </ul>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                  <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                    <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                    <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                  </div>
                </section>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
                  <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                  <!--
                  <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                    <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                    <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
                  </div>
                </section>
              </li>
            </ul>
          </li>-->
          <li><a href="/account-orders"><span>Profile</span></a>
            <ul class="sub-menu">
                <li><a href="/login">Login / Register</a></li>
                <li><a href="/account-orders">Orders List</a></li>
                <li><a href="account-wishlist.html">Wishlist</a></li>
                <li><a href="/profile">Profile</a></li>
            </ul>
          </li>
          <!--li><a href="blog-rs.html"><span>Blog</span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="blog-rs.html"><span>Blog Layout</span></a>
                <ul class="sub-menu">
                    <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="blog-single-rs.html"><span>Single Post Layout</span></a>
                <ul class="sub-menu">
                    <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                    <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                    <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li-->
          <li><a href="#"><span>More</span></a>
            <ul class="sub-menu">
                <li><a href="/about">About Us</a></li>
                <li><a href="/terms">Terms of use</a></li>
                <li><a href="/contacts-us">Contacts</a></li>
                <li><a href="/faq">Help / FAQ</a></li>
            </ul>
          </li>
          <!--li class="has-megamenu"><a href="components/accordion.html"><span>Components</span></a>
            <ul class="mega-menu">
              <li><span class="mega-menu-title">A - F</span>
                  <ul class="sub-menu">
                    <li><a href="components/accordion.html">Accordion</a></li>
                    <li><a href="components/alerts.html">Alerts</a></li>
                    <li><a href="components/buttons.html">Buttons</a></li>
                    <li><a href="components/cards.html">Cards</a></li>
                    <li><a href="components/carousel.html">Carousel</a></li>
                    <li><a href="components/countdown.html">Countdown</a></li>
                    <li><a href="components/forms.html">Forms</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">F - P</span>
                  <ul class="sub-menu">
                    <li><a href="components/gallery.html">Gallery</a></li>
                    <li><a href="components/google-maps.html">Google Maps</a></li>
                    <li><a href="components/images.html">Images &amp; Figures</a></li>
                    <li><a href="components/list-group.html">List Group</a></li>
                    <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                    <li><a href="components/modal.html">Modal</a></li>
                    <li><a href="components/pagination.html">Pagination</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">P - T</span>
                  <ul class="sub-menu">
                    <li><a href="components/pills.html">Pills</a></li>
                    <li><a href="components/progress-bars.html">Progress Bars</a></li>
                    <li><a href="components/shop-items.html">Shop Items</a></li>
                    <li><a href="components/tables.html">Tables</a></li>
                    <li><a href="components/tabs.html">Tabs</a></li>
                    <li><a href="components/team.html">Team</a></li>
                    <li><a href="components/toasts.html">Toast Notifications</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">T - W</span>
                  <ul class="sub-menu">
                    <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                    <li><a href="components/typography.html">Typography</a></li>
                    <li><a href="components/video-player.html">Video Player</a></li>
                    <li><a href="components/widgets.html">Widgets</a></li>
                  </ul>
              </li>
            </ul>
          </li-->
        </ul>
      </nav>
      <!-- Toolbar-->
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            <div class="search"><i class="icon-search"></i></div>
            <div class="account"><a href="/account-orders"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                <li class="sub-menu-title"><span>Hello,</span></li>
                  <li><a href="/account-profile">My Profile</a></li>
                  <li><a href="/account-orders">Orders List</a></li>
                <li class="sub-menu-separator"></li>
                <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
              </ul>
            </div>
            <div class="cart"><a href="/cart"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
              <div class="toolbar-dropdown">
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/01.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
                </div>
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/02.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
                </div>
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/03.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><span class="text-lg">Total:</span></div>
                  <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="/cart">View Cart</a></div>
                  <div class="column"><a class="btn btn-sm btn-block btn-success" href="/checkout-address">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Content-->
    @yield('content')

    </div>
    @include('inc.footer')

    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/scripts.min.js') }}"></script>
</body>
</html>
