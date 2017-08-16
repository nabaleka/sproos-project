@extends('layouts.app')
@section('content')
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Shop List No Sidebar</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Shop List No Sidebar</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="column">
                <div class="shop-sorting">
                  <label for="sorting">Sort by:</label>
                  <select class="form-control" id="sorting">
                    <option>Popularity</option>
                    <option>Low - High Price</option>
                    <option>High - Low Price</option>
                    <option>Avarage Rating</option>
                    <option>A - Z Order</option>
                    <option>Z - A Order</option>
                  </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
                </div>
              </div>
              <div class="column">
                <div class="shop-view"><a class="grid-view" href="/shop-grid"><span></span><span></span><span></span></a><a class="list-view active" href="/shop-list"><span></span><span></span><span></span></a></div>
              </div>
            </div>
            <!-- Product-->
            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html">
                <div class="product-badge text-danger">50% Off</div><img src="img/shop/products/01.jpg" alt="Product"></a>
              <div class="product-info">
                <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
                <h4 class="product-price">
                  <del>$99.99</del>$49.99
                </h4>
                <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/02.jpg" alt="Product"></a>
              <div class="product-info">
                <h3 class="product-title"><a href="shop-single.html">Cole Haan Crossbody</a></h3>
                <h4 class="product-price">$200.00</h4>
                <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html">
                  <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                  </div><img src="img/shop/products/03.jpg" alt="Product"></a>
              <div class="product-info">
                <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
                <h4 class="product-price">$155.00</h4>
                <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/04.jpg" alt="Product"></a>
              <div class="product-info">
                <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
                <h4 class="product-price">$47.00</h4>
                <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html">
                <div class="product-badge text-muted">Out of stock</div><img src="img/shop/products/10.jpg" alt="Product"></a>
              <div class="product-info">
                <h3 class="product-title"><a href="shop-single.html">Daily Fabric Cap</a></h3>
                <h4 class="product-price">$31.99</h4>
                <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button><a class="btn btn-outline-secondary btn-sm" href="shop-single.html">View Details</a>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html">
                  <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                  </div><img src="img/shop/products/11.jpg" alt="Product"></a>
              <div class="product-info">
                <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
                <h4 class="product-price">$90.00</h4>
                <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
            <div class="pt-2">
              <!-- Pagination-->
              <nav class="pagination">
                <div class="column">
                  <ul class="pages">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>...</li>
                    <li><a href="#">12</a></li>
                  </ul>
                </div>
                <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    @include('inc.footer')
@endsection