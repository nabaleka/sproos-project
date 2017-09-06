@extends('seller.layouts.seller')

@section('style')
<link rel="stylesheet" href="{{ asset('adminscript/plugins/select2/select2.min.css') }}">
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create a new product.
      <small>It's that simple</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Titles</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="seller_id" value="{{Auth::guard('seller')->user()->id}}">
            <div class="box-body">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Product name</label>
                  <input type="text" class="form-control" id="title" name="name" placeholder="Title">
                </div>
                
               
                <div class="form-group">
                  <label for="slug">Product Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>
                 <div class="form-group">
                  <label for="price">Product price</label>
                  <input type="text" class="form-control" id="slug" name="price" placeholder="price">
                </div>
              </div>

               <div class="form-group">
                  <label for="price">Stock</label>
                  <input type="number" class="form-control" id="slug" name="stock" placeholder="Enter stock" step="3">
                </div>
              </div>

              <div class="col-lg-6">
                            <br>
                              <div class="form-group">
                                <div class="pull-right">
                                  <label for="image">image three</label>
                                  <input type="file" name="image3" id="image">
                                </div>

                               <div class="form-group">
                                <div class="pull-right">
                                  <label for="image">image one</label>
                                  <input type="file" name="image" id="image">
                                </div> 
                               <br>
                               <div class="form-group">
                                <div class="pull-right">
                                  <label for="image">image four</label>
                                  <input type="file" name="image4" id="image">
                                </div>
                               
                                 <br>
                              </div>
                               <div class="form-group">
                                <div class="pull-right">
                                  <label for="image">image two</label>
                                  <input type="file" name="image2" id="image">
                                </div>
                              </div>
                              <br>
                              <div class="form-group" style="margin-top:18px;">
                                <label>Select Category</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                @foreach ($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                                </select>
                              </div>
                              
                              
                            </div>
            </div>
            <!-- /.box-body -->
            
            <div class="box">
             <div class="box-header">
               <h3 class="box-title">Product description
                 <small>Simple and fast</small>
               </h3>
               <!-- tools box -->
               <div class="pull-right box-tools">
                 <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fa fa-minus"></i></button>
                 </div>
                 <!-- /. tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body pad">
                 <textarea name="description" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
               </div>
             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('products.index') }}' class="btn btn-warning">Back</a>
            </div>
          </form>
        </div>
        <!-- /.box -->

        
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->

@endsection