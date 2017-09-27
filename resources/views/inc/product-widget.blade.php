      <!-- Product Widgets-->
<section class="container padding-top-3x ">
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="widget widget-featured-products">
        <h3 class="widget-title">Top Sellers This Week</h3>
          @foreach( $best_sellers as $best)
        <!-- Entry-->
        <div class="entry">
          <div class="entry-thumb"><a href="/shop-single/{{$best->product_id}}"><img src="{{asset('uploads/'.$best->image) }}" alt="Product"></a></div>
          <div class="entry-content">
            <h4 class="entry-title"><a href="/shop-single/{{$best->product_id}}">{{$best->name}}</a></h4><span class="entry-meta">From Ksh {{$best->price}}</span>
          </div>
        </div>
          @endforeach
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="widget widget-featured-products">
        <h3 class="widget-title">New Products</h3>
        <!-- Entry-->
          @foreach($latest_products as $latest)
        <div class="entry">
          <div class="entry-thumb"><a href="/shop-single/{{$latest->id}}"><img src="{{asset('uploads/'.$latest->image) }}" alt="Product"></a></div>
          <div class="entry-content">
            <h4 class="entry-title"><a href="/shop-single/{{$latest->id}}">{{$latest->name}}</a></h4><span class="entry-meta">Ksh. {{$latest->price}}</span>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="widget widget-featured-products">
        <h3 class="widget-title">Best Rated</h3>
        <!-- Entry-->
          @foreach($top_rated as $top)
        <div class="entry">
          <div class="entry-thumb"><a href="/shop-single/{{$top->id}}"><img src="{{asset('uploads/'.$top->image) }}" alt="Product"></a></div>
          <div class="entry-content">
            <h4 class="entry-title"><a href="/shop-single/{{$top->id}}">{{$top->name}}</a></h4><span class="entry-meta">Ksh. {{$top->price}}</span>
          </div>
        </div>
       @endforeach
      </div>
    </div>
    
  </div>
</section>
