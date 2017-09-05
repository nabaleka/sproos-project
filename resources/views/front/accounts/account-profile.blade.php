
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
                <div class="user-data">
                @if (Auth::guest())
                <h4>Please login first</h4>
                @else
                  <h4>{{Auth::user()->name}}</h4><span>Joined {{Auth::user()->created_at}}</span>
                  @endif
                </div>
              </div>
            </aside>
                <nav class="list-group">
                  <a class="list-group-item justify-content-between" href="account-orders"><span><i class="icon-bag"></i>Orders</span><span class="badge badge-primary badge-pill">6</span></a><a class="list-group-item active" href="/account-profile"><i class="icon-head"></i>Profile</a><a class="list-group-item" href="/account-address"><i class="icon-map"></i>Addresses</a><a class="list-group-item justify-content-between" href="#"><span><i class="icon-heart"></i>Wishlist</span><span class="badge badge-primary badge-pill">3</span></a>
                </nav>
                
          </div>
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <form class="row">
             @if (Auth::guest())
              <div class="col-md-6">
                  <h2>You haven't logged in</h2>
              </div>
              @else
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-fn">Your Name</label>
                  <input class="form-control" type="text" id="account-fn" value="{{Auth::user()->name}}" required>
                </div>
              </div>
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-email">E-mail Address</label>
                  <input class="form-control" type="email" id="account-email" value="{{Auth::user()->email}}" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="account-phone">Phone Number</label>
                  <input class="form-control" type="text" id="account-phone" value="+7(805) 348 95 72" required>
                </div>
              </div>
              @endif
              <div class="col-12">
                @if (Auth::guest())
                  <hr class="mt-2 mb-3">
                 <a href="/login"class="btn btn-primary margin-right-none" type="button" >Login Here</a>
                @else
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <label class="custom-control custom-checkbox d-block">
                    <input class="custom-control-input" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Subscribe me to Newsletter</span>
                  </label>
                  <button class="btn btn-primary margin-right-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                </div>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
   
@endsection