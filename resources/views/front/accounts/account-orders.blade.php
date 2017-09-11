@extends('layouts.app')

@section('content')

<div class="page-title">

<div class="container">

    <div class="column">

    <h1>My Orders</h1>

    </div>

    <div class="column">

    <ul class="breadcrumbs">

        <li><a href="/">Home</a>

        </li>

        <li class="separator">&nbsp;</li>

        <li><a href="/account-orders">Account</a>

        </li>

        <li class="separator">&nbsp;</li>

        <li>My Orders</li>

    </ul>

    </div>

</div>

</div>

<!-- Page Content-->

<div class="container padding-bottom-3x mb-2">

<div class="row">

    <div class="col-lg-4">

    <aside class="user-info-wrapper">

        <div class="user-cover" style="background-image: url(img/account/user-cover-img.jpg);">

        

        </div>

        <div class="user-info">

        <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="img/account/user-ava.jpg" alt="User"></div>

        <div class="user-data">

            @if (Auth::guest())
                <h4>Please login first</h4>
                @else
                  <h4>{{Auth::user()->name}}</h4><span>Joined {{Auth::user()->created_at}}</span>
                  @endif

        </div>

        </div>

    </aside>

        <!-- Account navigation -->

        <nav class="list-group"><a class="list-group-item justify-content-between active" href="account-orders"><span><i class="icon-bag"></i>Orders</span><span class="badge badge-primary badge-pill">{{$count}}</span></a><a class="list-group-item" href="account-profile"><i class="icon-head"></i>Profile</a><a class="list-group-item" href="account-address"><i class="icon-map"></i>Addresses</a><a class="list-group-item justify-content-between" href="#"><span><i class="icon-heart"></i>Wishlist</span><span class="badge badge-primary badge-pill">3</span></a></nav>

        </div>
 @if (isset($orders))
    <div class="col-lg-8">

    <div class="padding-top-2x mt-2 hidden-lg-up"></div>

    <div class="table-responsive">

        <table class="table table-hover margin-bottom-none">

        <thead>

            <tr>

            <th>Order #</th>

            <th>Date Purchased</th>

            <th>Status</th>

            <th>Total</th>

            </tr>

        </thead>
  @foreach ($orders as $order)
        <tbody>

            <tr>

            <td><span class="text-medium">{{$order->unique_order_id}}</span></td>

            <td>August 08, 2017</td>

            <td><span class="text-danger"> <?php if($order->status=1)
            { 
                echo "Cancelled";
        }
                 else
                 {
                    echo "Pending";
                 }


            ?></span></td>

            <td><span class="text-medium">Ksh {{$order->total_price}}</span></td>

            </tr>

          

        </tbody>
  @endforeach
        </table>

    </div>
     @else
    <div class="text-center">
    <h2>You haven't placed any order yet!</h2>
    <p>Your orders will be added here. Please <a href="/register">register</a> for an account or <a href="/login">log in</a>login</p>
    </div>
    <hr>

    <div class="text-right"><a class="btn btn-link-primary margin-bottom-none" href="#"><i class="icon-download"></i>&nbsp;Order Details</a></div>
 @endif
    </div>

</div>

</div>

@endsection