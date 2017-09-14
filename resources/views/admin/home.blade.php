@extends('admin.layouts.admin')

@section('content')
    <section class="content-header">
      <h1>
        Dashboard
        <small>Full Control</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </section>


<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number"><h3>{{ count($users) }}</h3></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sellers</span>
              <span class="info-box-number"><h3>{{ count($seller)}}</h3></span>
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
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">All Orders</span>
              <span class="info-box-number"><h3>{{ count($orders)}}</h3></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Products</span>
              <span class="info-box-number"><h3>{{ count($products)}}</h3></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<div class="row">
<div class="col-md-8">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Statistics</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="myChart" height:400px;></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<script src="{{ asset('bower_components/chart.js/dist/Chart.bundle.js') }}"></script>
          <script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Products", "Sellers", "Users", "Orders"],
        datasets: [{
            label: 'Stats',
            data: [{{ count($products)}}, {{ count($seller)}}, {{ count($users)}}, {{ count($orders)}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(255, 26, 86, 0.7)'
                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 26, 86, 0.2)'
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</div>

<div class="col-md-4">
          <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Admin Shortcuts</h3>
            </div>
            <div class="box-body">
              <p>Manage your account here. Here are some shortcuts you can use.</p>
              <a class="btn btn-app">
                <span class="badge bg-yellow">0</span>
                <i class="fa fa-bullhorn"></i> Notifications
              </a>
              <a class="btn btn-app" href="/admin/sellers">
                <span class="badge bg-green">{{ count($seller)}}</span>
                <i class="fa fa-barcode"></i> Sellers
              </a>
              <a class="btn btn-app" href="/admin/customers">
                <span class="badge bg-purple">{{ count($users) }}</span>
                <i class="fa fa-users"></i> Customers
              </a>
              <a class="btn btn-app" href="/admin/orders">
                <span class="badge bg-teal">{{ count($orders)}}</span>
                <i class="fa fa-inbox"></i> Orders
              </a>

              <a class="btn btn-app" href="/admin/reports">
                <span class="badge bg-teal"></span>
                <i class="fa fa-line-chart"></i> Reports
              </a>

              <a class="btn btn-app">
                <span class="badge bg-aqua">12</span>
                <i class="fa fa-envelope"></i> Inbox
              </a>
              <a class="btn btn-app">
                <span class="badge bg-red">531</span>
                <i class="fa fa-heart-o"></i> Likes
              </a>

              <a class="btn btn-app" href="admin/category">
                <span class="badge bg-red">{{ count($categories) }}</span>
                <i class="fa fa-heart-o"></i> Categories
              </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
</section>



          

  
@endsection