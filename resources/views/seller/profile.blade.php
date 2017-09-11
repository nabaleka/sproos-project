@extends('seller.layouts.seller')

@section('content')

<section class="content">
<div class="row">
<div class="col-md-4 col-sm-5">
<!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-round" src="{{ asset('uploads/profile/no-image.jpg')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{Auth::user()->first_name." ".Auth::user()->last_name}}</h3>

              <p class="text-muted text-center">{{Auth::user()->email}}</p>
              <p class="text-muted text-center">{{Auth::user()->phonenumber}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>My Products</b> <a class="pull-right">{{ count($products)}}</a>
                </li>
                <li class="list-group-item">
                  <b>Sales</b> <a class="pull-right"> 00 </a>
                </li>
                <li class="list-group-item">
                  <b>Ratings</b> <a class="pull-right">00</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>

 <div class="col-md-8 col-sm-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" value="{{ Auth::guard('seller')->user()->first_name }}" class="form-control" id="first_name" placeholder="Your First Name">
                </div>

                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" value="{{ Auth::guard('seller')->user()->last_name }}" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" name="phonenumber" value="{{Auth::guard('seller')->user()->email}}" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="phonennumner">Phone Number</label>
                  <input type="phonenumber" class="form-control" id="phonenumber" value="{{ Auth::guard('seller')->user()->phonenumber }}" placeholder="Password">
                </div>

                <div class="form-group">
                  <label>Bussiness Location</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

                <div class="form-group">
                  <label for="profile_picture">Profile Picture</label>
                  <input type="file" id="profile_picture" name ="profile_picture">

                  <p class="help-block">Your profile picture will be updated.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update info</button>
              </div>
            </form>
            <!--/. From end -->
          </div>
          <!-- /.box -->
          </div>
</div>
</section>
@endsection