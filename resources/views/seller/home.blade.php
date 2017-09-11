@extends('seller.layouts.seller')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashoard</a></li>
        <li class="active">{{ Auth::guard('seller')->user()->email }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">My Products</span>
              <span class="info-box-number">{{ $products->count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">My Orders</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ratings</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">93,139</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>

    <div class="row">
      <div class="col-sm-8">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recent Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Status</th>
                  <th>Order Id</th>
                  <th>Date</th>
                  <th>Cost</th>
                </tr>
                </thead>
                <tbody>
                <!-- Loop through Orders -->
                <tr>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>00</td>
                </tr>
                <!-- /.Loop through -->
                </tbody>
                <tfoot>
                <tr>
                 <th>S/N</th>
                  <th>Status</th>
                  <th>Order Id</th>
                  <th>Date</th>
                  <th>Cost</th>
                </tr>
                </tfoot>
                <!-- Pagination-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.box -->
      </div>

      <div class="col-sm-4">
      <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Quick Actions</h3>
            </div>
            <div class="box-body">
              <p>Shortcuts to actions</p>
              <a class="btn btn-app">
                <i class="fa fa-plus"></i> New Product
              </a>

              <a class="btn btn-app">
                <i class="fa fa-first-order"></i> Orders
              </a>

              <a class="btn btn-app" href="{{ route('seller.profile')}}">
                <i class="fa fa-user"></i> Account
              </a>



            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
              
    </div>


     <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
              
              @foreach($products as $product)
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('uploads/'.$product->image2)}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{ $product->name }}
                      <span class="label label-success pull-right">{{ $product->stock }} IN STOCK</span> </a>
                    <span class="product-description">
                          {{ $product -> description }}
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              @endforeach
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection