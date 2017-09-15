
@extends('layouts.theme')
@section('content')
    <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
          @if($search)
            <h1>{{$msg}}</h1>
          @else
            <h1>All Products</h1>
          @endif
          </div>
          <div class="column">
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
        
          <!-- Results-->
          <div class="col-xl-9 col-lg-8">
          @if(count($products) > 0)
          @foreach($products as $product)
            <div class="card mb-4">
              <div class="card-header"><span class="badge badge-pill badge-primary">Product</span></div>
                <div class="card-block">
                  <div class="d-flex"><a class="pr-4 hidden-xs-down" href="shop-single.html" style="max-width: 225px;"><img src="{{ asset('uploads/'.$product->image2 ) }}" alt="Product"></a>
                    <div>
                      <h5><a class="navi-link" href="/shop-single/{{$product->id}}">{{$product->name}} </a></h5>
                      <h6>
                        Ksh .{{ $product->price}}<br>
                        <small>{{$product->stock}} Available</small>
                      </h6>
                      <p>{{$product->title}}</p>
                      <p>{{$product->description}}</p>
                      <div><button class="btn btn-outline-primary">View</button></div>
                    </div>
                    
                  </div>
                </div>
            </div>
            @endforeach
            
          @endif
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
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Shop Categories-->
              <div class="gallery-wrapper isotope-grid cols-3">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              @foreach($categories as $category)
              <div class="grid-item gallery-item"><a href="{{ asset('uploads/'.$product->image ) }}" data-size="1000x1000"><img src="{{ asset('uploads/'.$category->image ) }}" alt="Image"></a><span class="caption">T-Shirt Collection</span></div>
              @endforeach
            </div>
            </aside>
          </div>
        </div>
      </div>
@endsection