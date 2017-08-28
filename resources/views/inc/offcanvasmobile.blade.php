    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="/account-orders"><i class="icon-head"></i><span>Hello</span>, John Doe</a>

      <nav class="offcanvas-menu">

        <ul class="menu">
          <li class="active"><a href="/"><span>Home</span></a></li>

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

                    <li><a href="/shop-grid">List Left Sidebar</a></li>

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

          @if(Auth::guest)
          @else

          <li class="has-children"><span><a href="/account-orders"><span>Account</span></a><span class="sub-menu-toggle"></span></span>

            <ul class="offcanvas-submenu">

                <li><a href="/account-login">Login / Register</a></li>

                <li><a href="/account-orders">Orders List</a></li>

                <!--li><a href="/account-wishlist">Wishlist</a></li-->

                <li><a href="/account-profile">Profile Page</a></li>

                <li><a href="/account-address">Contact / Shipping Address</a></li>

                

            </ul>

          </li>
          
          @endif



          <li class="has-children"><span><a href="/login"><span>Sproos Accounts</span></a><span class="sub-menu-toggle"></span></span>

            <ul class="offcanvas-submenu">

              <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span class="sub-menu-toggle"></span></span>

                <ul class="offcanvas-submenu">

                    <li><a href="/login">Buyer</a></li>

                    <li><a href="/register">Seller</a></li>

                    <li><a href="/login">Sign in</a></li>


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

          <li class="has-children"><span><a href="#"><span>More </span></a><span class="sub-menu-toggle"></span></span>

            <ul class="offcanvas-submenu">

                <li><a href="/about-us">About Us</a></li>

                <li><a href="/">Mobile App</a></li>

                <li><a href="#l">Services</a></li>

                <li><a href="#">Contacts</a></li>

                <li><a href="/faq">Help / FAQ</a></li>

                <li><a href="#">Seller's Guide</a></li>

                <li><a href="#">Terms Of Use</a></li>


            </ul>

          </li>



        </ul>

    </div>