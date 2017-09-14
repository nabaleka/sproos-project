@extends('admin.layouts.admin')
@section('content')
  <!-- /.box-header -->
          
            
           
<section class="content-header">
    <h1>
    Sellers
    </h1>
    <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">{{$user->email}}</li>
    </ol>
</section>


 <section class="content">
        <div class="row" >
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/profile/no-image.jpg')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $user->first_name." ". $user->last_name }}</h3>
              

              <p class="text-muted text-center">{{ $user->first_name }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Purchases</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                <span class="label bg-success">Active</span>
                  <b>Created</b> <a class="pull-right">{{ $user->created_at }}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right">{{ $user->phonenumber}}</a>
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
<h3 style="text-align:center">Customer orders</h3>
                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Quantity</th>
                           <th>Price</th>
                         
                          <th>Date</th>
                          <th>Ship</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($orders))
                        @foreach ($orders as $order)
                          <tr>
                            <td>{{ $order->unique_order_id }}</td>
                            <td>{{ $order->name }}</td>
                             <td>{{ $order->total_quantity }}</td>
                            <td>{{ $order->total_price }}</td>
                           </td>
                            <td>{{  \Carbon\Carbon::createFromTimeStamp(strtotime($order->created_at))->diffForHumans() }}</td>
                <td><a href="/details/{{$order->id}}" class="btn btn-success">Details</a> </td>
                        
                          </tr>
                        @endforeach

                        @endif
                        </tbody>
                       
                      </table>
@endsection