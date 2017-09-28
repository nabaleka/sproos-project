
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

      <div class="container padding-bottom-1x mb-2">
      <!-- Create buttons to handle sorting -->
        <div class="column">

        <script>
          function validate() {
              var x, y;

              // Get the value of the input field with id="numb"
              x = document.getElementById("maxPrice").value;
              y = document.getElementById("minPrice").value;

              // If x is Not a Number or less than one or greater than 10
              if (isNaN(x) && isNaN(y)) {
                  return true;
              } else {
                  return false;
              }
              //document.getElementById("demo").innerHTML = text;
          }
        </script>

            <div class="shop-sorting">
            <form method="post" action="/sortSearch" onsubmit="validate()">
            {{ csrf_field() }}

              <label for="sorting">Sort by:</label>

              <select class="form-control" id="sorting" name="sortBy">

                <option value="search" >Search</option>

                <option value="lotohi" >Low - High Price</option>

                <option value="hitolo">High - Low Price</option>

                <option value="atoz" >A - Z Order</option>

                <option value="ztoa" >Z - A Order</option>

              </select>

              <label>Search by price</label>
              <input type="number" id="minPrice" required="" name="minPrice" class="form-control " placeholder="Miminum" >
              <input type="number" id="maxPrice" required="" name="maxPrice" class="form-control " placeholder="Maximum" >

              <input type="submit" class="btn btn-primary" value="sort">

              </form>

            </div>

          </div>
      </div>
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
        
          <!-- Results-->
          <div class="col-xl-9 col-lg-8">
          @if(count($products) > 0)
          @foreach($products as $product)
            <div class="card mb-4">
              <div class="card-header"><span class="badge badge-pill badge-primary">Product</span> <span class="badge badge-pill badge-primary">{{$product->title}}</span></div>
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
                      <div><a href="/shop-single/{{$product->id}}" class="btn btn-outline-primary">View</a></div>
                    </div>
                    
                  </div>
                </div>
            </div>
            @endforeach
            
          @endif
            <!-- Pagination-->
             {{$products->links('vendor.pagination.bootstrap-4')}}
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