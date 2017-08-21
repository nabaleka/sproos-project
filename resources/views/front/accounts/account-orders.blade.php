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

            <h4>Guest</h4><span>You haven't joined us yet</span>

        </div>

        </div>

    </aside>

        <!-- Account navigation -->

        <nav class="list-group"><a class="list-group-item justify-content-between active" href="account-orders"><span><i class="icon-bag"></i>Orders</span><span class="badge badge-primary badge-pill">6</span></a><a class="list-group-item" href="account-profile"><i class="icon-head"></i>Profile</a><a class="list-group-item" href="#"><i class="icon-map"></i>Addresses</a><a class="list-group-item justify-content-between" href="#"><span><i class="icon-heart"></i>Wishlist</span><span class="badge badge-primary badge-pill">3</span></a></nav>

        </div>

    <div class="col-lg-8">

    <div class="padding-top-2x mt-2 hidden-lg-up"></div>

    <!--div class="table-responsive">

        <table class="table table-hover margin-bottom-none">

        <thead>

            <tr>

            <th>Order #</th>

            <th>Date Purchased</th>

            <th>Status</th>

            <th>Total</th>

            </tr>

        </thead>

        <tbody>

            <tr>

            <td><span class="text-medium">78A643CD409</span></td>

            <td>August 08, 2017</td>

            <td><span class="text-danger">Canceled</span></td>

            <td><span class="text-medium">Ksh 1,760.50</span></td>

            </tr>

            <tr>

            <td><span class="text-medium">34VB5540K83</span></td>

            <td>July 21, 2017</td>

            <td><span class="text-info">In Progress</span></td>

            <td><span class="text-medium">Ksh 1,315.20</span></td>

            </tr>

            <tr>

            <td><span class="text-medium">112P45A90V2</span></td>

            <td>June 15, 2017</td>

            <td><span class="text-warning">Delayed</span></td>

            <td><span class="text-medium">Ksh 1,264.00</span></td>

            </tr>

            <tr>

            <td><span class="text-medium">28BA67U0981</span></td>

            <td>May 19, 2017</td>

            <td><span class="text-success">Delivered</span></td>

            <td><span class="text-medium">Ksh 1,198.35</span></td>

            </tr>

            <tr>

            <td><span class="text-medium">502TR872W2</span></td>

            <td>April 04, 2017</td>

            <td><span class="text-success">Delivered</span></td>

            <td><span class="text-medium">$2,133.90</span></td>

            </tr>

            <tr>

            <td><span class="text-medium">47H76G09F33</span></td>

            <td>March 30, 2017</td>

            <td><span class="text-success">Delivered</span></td>

            <td><span class="text-medium">Ksh 1,086.40</span></td>

            </tr>

        </tbody>

        </table>

    </div-->
    <div class="text-center">
    <h2>You haven't placed any order yet!</h2>
    <p>Your orders will be added here. Please <a href="/register">register</a> for an account or <a href="/login">log in</a>login</p>
    </div>
    <hr>

    <div class="text-right"><a class="btn btn-link-primary margin-bottom-none" href="#"><i class="icon-download"></i>&nbsp;Order Details</a></div>

    </div>

</div>

</div>

@endsection