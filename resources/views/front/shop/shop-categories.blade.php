@extends('layouts.app')

@section('content')
<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Shop Categories</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Shop Categories</li>
            </ul>
          </div>
        </div>
      </div>

<!-- Page Content-->

      <div class="container padding-bottom-2x mb-2">

        <div class="row">

          <!-- Categories-->

          <div class="col-xl-9 col-lg-8 push-xl-3 push-lg-4">

            <!-- Promo banner-->
            <div class="row">

            <h6 class="text-muted text-normal text-uppercase padding-top-2x mt-2">All Categories</h6>
            <hr class="margin-bottom-1x">
            <div class="gallery-wrapper isotope-grid cols-3">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              @foreach($products as $product)
              <div class="grid-item gallery-item"><a href="{{ asset('uploads/'.$product->image ) }}" data-size="1000x1000"><img src="../img/gallery/th07.jpg" alt="Image"></a><span class="caption">T-Shirt Collection</span></div>
              @endforeach
            </div>

            </div>

          </div>

          <!-- Sidebar          -->

          <div class="col-xl-3 col-lg-4 pull-xl-9 pull-lg-8">

            <aside class="sidebar">

              <div class="padding-top-2x hidden-lg-up"></div>

              <section class="widget widget-categories">

                <h3 class="widget-title">Popular Brands</h3>

                <ul>

                  <li><a href="#">Adidas</a><span>(254)</span></li>

                  <li><a href="#">Bilabong</a><span>(39)</span></li>

                  <li><a href="#">Brooks</a><span>(205)</span></li>

                  <li><a href="#">Calvin Klein</a><span>(128)</span></li>

                  <li><a href="#">Cole Haan</a><span>(104)</span></li>

                  <li><a href="#">Columbia</a><span>(217)</span></li>

                  <li><a href="#">New Balance</a><span>(95)</span></li>

                  <li><a href="#">Nike</a><span>(310)</span></li>

                  <li><a href="#">Nine West</a><span>(134)</span></li>

                  <li><a href="#">Oakley</a><span>(73)</span></li>

                  <li><a href="#">Puma</a><span>(446)</span></li>

                  <li><a href="#">Scechers</a><span>(87)</span></li>

                  <li><a href="#">Tommy Bahama</a><span>(42)</span></li>

                  <li><a href="#">Tommy Hilfiger</a><span>(289)</span></li>

                  <li><a href="#">Valentino</a><span>(68)</span></li>

                </ul>

              </section>

            </aside>

          </div>

        </div>

      </div>

@endsection