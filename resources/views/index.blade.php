@extends('theme')

@section('content')

   <!-- Main Slider-->
    @include('main-slider')

      <!-- Top Categories-->
    @include('top-categories')

      <!-- Promo #1-->
    @include('promo-1')

      <!-- Promo #2-->
    @include('promo-2')

    <!-- Featured Products Carousel-->
    @include('featured-products')

    <!-- Product Widgets-->
    @include('product-widget')

    <!-- Popular Brands-->
    @include('popular-brands')

    <!-- Services-->
    @include('services')

      <!-- Site Footer-->
    @include('footer')

@endsection