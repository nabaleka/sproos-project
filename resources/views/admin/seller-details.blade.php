@extends('admin.layouts.admin')
@section('content')

<section class="content-header">
    <h1>
    Sellers
    </h1>
    <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">{{$seller->email}}</li>
    </ol>
</section>


 <section class="content">
        <div class="row" >
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/profile/no-image.jpg')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $seller->first_name." ". $seller->last_name }}</h3>
              

              <p class="text-muted text-center">{{ $seller->first_name }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Purchases</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                <span class="label bg-success">Active</span>
                  <b>Created</b> <a class="pull-right">{{ $seller->created_at }}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right">{{ $seller->phonenumber}}</a>
                </li>
              </ul>

              <a href="#" class="btn btn-success btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <canvas id="userChart"><canvas>
            </div>
          </div>
        </div>

        <script>
          var ctx = document.getElementById('userChart').getContext('2d');
          var chart = new Chart(ctx, {
              // The type of chart we want to create
              type: 'line',

              // The data for our dataset
              data: {
                  labels: ["January", "February", "March", "April", "May", "June", "July"],
                  datasets: [{
                      label: "Purchase History",
                      backgroundColor: '#ee2956',
                      borderColor: 'rgb(255, 99, 132)',
                      data: [0, 1, 5, 2, 7, 0, 0],
                  }]
              },

              // Configuration options go here
              options: {}
          });
        </script>

        </div>
 </section>

@endsection