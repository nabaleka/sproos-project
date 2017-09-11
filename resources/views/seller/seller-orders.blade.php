@extends('seller.layouts.seller')

@section('style')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Here are all products ordered.
      <small>Get them here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Seller Products</h3>
       
         
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">

                    @if(isset($orders) || (count(get_object_vars($orders)) > 0))
                                         
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
                            <td>{{ $loop->index + 1 }}</td>
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
                    @else
                        <h4>No orders yet</h4>
                    @endif
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Report
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->

<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection