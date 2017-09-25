@extends('seller.layouts.seller')

@section('style')
<link rel="stylesheet" href="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.css') }}">
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

  <div>
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Products</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">{{ count($products) }}</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Hi {{ Auth::guard('seller')->user()->first_name }} ,here are your products!</h3>
       
          <a class='col-lg-offset-5 btn btn-success' href="{{ route('products.create') }}">Add New</a>
     
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box table-responsive">
                    <!-- /.box-header -->
                    <div class="box-body">

                    @if(isset($products) || (count(get_object_vars($products)) > 0))
                                         
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Image</th>
                          <th>Name</th>
                           <th>Unit Price</th>
              
                           <th>In Sock</th>
                          <th>Featured</th>
                        
                          <th>Edit</th>
                          
                          
                          <th>Delete</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($products))
                        @foreach ($products as $product)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td><img src="{{asset('uploads/'.$product->image) }}" height="30px" />
                            
                            </td>
                            <td>{{ $product->name }}</td>
                             <td>{{ $product->price }}</td>
                
                              <td>{{ $product->stock}}</td>
                            
                            <td>@if($product->featured==0)
                              <a href="/apply_feature/{{$product->id}}" class="btn btn-danger">Apply feature</a>
                              @elseif ($product->featured==1)
                              <a href="" class="btn btn-primary">Feature Pending</a>
                              @else
                              <a href="" class="btn btn-success">Featured</a>
                            </td>
                             @endif
                           
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
