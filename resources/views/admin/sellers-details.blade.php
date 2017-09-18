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


<h3 style="text-align:center">Customer orders</h3>
                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Quantity</th>
                           <th>Price</th>
                         
                          <th>Date</th>
                          <th>Delivery time</th>
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
                <td><a href="#" class="btn btn-success">24 hrs</a> </td>
                        
                          </tr>
                        @endforeach

                        @endif
                        </tbody>
                       
                      </table>
@endsection