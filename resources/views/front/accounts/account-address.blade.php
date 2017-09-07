
@extends('layouts.app')
@section('content')
<!-- Page Title-->
<div class="page-title">
<div class="container">
    <div class="column" style="color:#adbbc2;">
    <h1>My Profile</h1>
    </div>
    <div class="column">
    <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li><a href="/account-orders">Account</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>My Profile</li>
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
                <div class="info-label" data-toggle="tooltip" title="You currently have 0 Reward Points to spend"><i class="icon-medal"></i>0 points</div>
              </div>
              <div class="user-info">
                <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="img/account/user-ava.jpg" alt="User"></div>
                <<div class="user-data">
                @if (Auth::guest())
                <h4>Please login first</h4>
                @else
                  <h4>{{Auth::user()->name}}</h4><span>Joined {{Auth::user()->created_at}}</span>
                  @endif
                </div>
              </div>
            </aside>
<nav class="list-group"><a class="list-group-item justify-content-between" href="account-orders"><span><i class="icon-bag"></i>Orders</span><span class="badge badge-primary badge-pill">6</span></a><a class="list-group-item" href="account-profile"><i class="icon-head"></i>Profile</a><a class="list-group-item active" href="account-address"><i class="icon-map"></i>Addresses</a><a class="list-group-item justify-content-between" href=""><span><i class="icon-heart"></i>Wishlist</span><span class="badge badge-primary badge-pill">3</span></a></nav>
                
          </div>
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <h4>Contact Address</h4>
            <hr class="padding-bottom-1x">
            <form class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-company">Company</label>
                  <input class="form-control" type="text" id="account-company" value="Bets Company Ltd.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-country">Country</label>
                  <select class="form-control" id="account-country">
                    <option>Choose country</option>
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>Switzerland</option>
                    <option selected>United States</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-city">City</label>
                  <select class="form-control" id="account-city">
                    <option>Choose city</option>
                    <option>Amsterdam</option>
                    <option>Berlin</option>
                    <option>Geneve</option>
                    <option selected>New York</option>
                    <option>Paris</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-zip">ZIP Code</label>
                  <input class="form-control" type="text" id="account-zip" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-address1">Address 1</label>
                  <input class="form-control" type="text" id="account-address1" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-address2">Address 2</label>
                  <input class="form-control" type="text" id="account-address2">
                </div>
              </div>
              <div class="col-12 padding-top-1x">
                <h4>Shipping Address</h4>
                <hr class="padding-bottom-1x">
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Same as Contact Address</span>
                </label>
                <hr class="margin-top-1x margin-bottom-1x">
                <div class="text-right">
                  <button class="btn btn-primary margin-bottom-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your address updated successfuly.">Update Address</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
   
@endsection