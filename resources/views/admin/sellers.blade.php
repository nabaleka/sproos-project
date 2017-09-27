@extends('admin.layouts.admin')

@section('style')
<link rel="stylesheet" href="{{ asset('adminscript/plugins/select2/select2.min.css') }}">
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Your Sellers
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Manage</a></li>
      <li class="active">Sellers</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    Sellers

     <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sellers</span>
              <span class="info-box-number">{{ count($sellers)}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-bar-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
                <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Messages</span>
              <span class="info-box-number"> 0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-flag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Flags</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- Sellers Table -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sproos Sellers</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
          
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Seller ID</th>
                  <th>Name </th>
                  <th>Email</th>
                  <th>phonenumber</th>
                  <th>About</th>
                    <th>Featured</th>
                      <th>status</th>
                </tr>
                <tr>
                  @foreach($sellers as $seller)
                  <td>{{$seller->id}}</td>
                  <td>{{$seller->first_name}} {{$seller->last_name}}</td>
                  <td>{{$seller->email}}</td>
                  <td>{{$seller->phonenumber}}</td>
                  <td>Accessories seller</td>
                    <td> @if($seller->featured==0)
                              <button class="btn btn-warning">Not featured</button >
                              @elseif ($seller->featured==1)
                              <a href="/confirm_feature/{{$seller->id}}" class="btn btn-primary">Pending</a>
                               @elseif ($seller->featured==2)
                              <a href="/cancel_feature/{{$seller->id}}" class="btn btn-success">Confirmed</a>
                              @elseif ($seller->featured==3)
                              <a href="/confirm_feature/{{$seller->id}}" class="btn btn-danger">Cancelled</a></td>
                              @endif
                  <td><a href="/admin/sellers/{{ $seller->id }}">View</a></td>
                  
                </tr>
                <tr>
                @endforeach
                 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- / Sellers table-->


</div>
  <!-- /.row -->

      <!-- /. Charts -->
  <!-- /.content -->

@endsection