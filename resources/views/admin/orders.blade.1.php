@extends('admin.layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders<br>
        <small>All Orders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Orders</li>
      </ol>
    </section>

    <section class="content">

   <div class="box-body">
        <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">

                    @if(isset($orders) || (count(get_object_vars($orders)) > 0))
                                         
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Order_id</th>
                          <th>Total_price</th>
                         
                           <th>Status</th>
                             <th>Payment Method</th>
                           <th>Date</th>
                          <th>Details</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($orders))
                        @foreach ($orders as $order)
                          <tr>
                            <td>{{ $order->unique_order_id }}</td>
                          
                            
                            </td>
                           
                             <td>{{ $order->total_price }}</td>
                                <td>Pending</td>
                              <td>Pesapal</td>
                         
                            <td>{{  \Carbon\Carbon::createFromTimeStamp(strtotime($order->created_at))->diffForHumans() }}</td>

                           
                              <td><a href="/admin/order_details/{{$order->user_id}}">
                             Details</a></td>
                           

                            
                            
                        
                          </tr>
                        @endforeach

                        @endif
                        </tbody>
                       
                      </table>
                    @else
                        <h4>You need to add products</h4>
                    @endif
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->


    </section>

@endsection