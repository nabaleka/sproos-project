@extends('admin.layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders<br>
        <small> Order Details</small>
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

                    @if(isset($details) || (count(get_object_vars($details)) > 0))
                                         
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>id</th>
                          <th>Customer</th>
                         
                           <th>Seller</th>
                             <th>Product</th>
                             <th>Seller email</th>
                             <th>Customer email</th>
                          
                         
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($details))
                        @foreach ($derails as $detail)
                          <tr>
                            <td>{{ $detail->unique_order_id }}</td>
                          
                            
                            </td>
                           
                             <td>{{ $detail->total_price }}</td>
                                <td>Pending</td>
                              <td>Pesapal</td>
                         
                            <td></td>

                           
                             
                           

                            
                            
                        
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