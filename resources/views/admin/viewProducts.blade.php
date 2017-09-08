@extends('admin.layouts.admin')

@section('style')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Here are all your products.
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
       
          <a class='col-lg-offset-5 btn btn-success' href="{{ route('products.create') }}">Add New</a>
     
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

                    @if(isset($products) || (count(get_object_vars($products)) > 0))
                                         
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Image</th>
                          <th>Name</th>
                           <th>Price</th>
                           <th>Seller ID</th>
                           <th>In Sock</th>
                          <th>Description</th>
                          <th>Creatd At</th>
                        
                          <th>Edit</th>
                          
                          
                          <th>Delete</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($products))
                        @foreach ($products as $product)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td><img src="{{ Storage::url($product->image) }}" height="100px" width="150px" />
                            
                            </td>
                            <td>{{ $product->name }}</td>
                             <td>{{ $product->price }}</td>
                              <td> {{$product->seller_id}}</td>
                              <td>{{$product->stock}}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->created_at }}</td>

                           
                              <td><a href="{{ route('products.edit',$product->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                           

                            
                            <td>
                              <form id="delete-form-{{ $product->id }}" method="post" action="{{ route('products.destroy',$product->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $product->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        
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