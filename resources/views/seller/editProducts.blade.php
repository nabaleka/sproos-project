@extends('seller.layouts.seller')

@section('style')
<link rel="stylesheet" href="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update your product
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/seller/products">Products</a></li>
      <li class="active">{{ $products->name }}</li>
    </ol>
  </section>


    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update your product</h3>
              <!--Errors-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <!-- ./ Errors-->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('products.update',$products->id)}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6"><img src="{{ asset('uploads/'.$products->image)}}" height="100px;"></div>
                <div class="col-md-3 col-sm-3 col-xs-6"><img src="{{ asset('uploads/'.$products->image2)}}" height="100px;"></div>
                <div class="col-md-3 col-sm-3 col-xs-6"><img src="{{ asset('uploads/'.$products->image3)}}" height="100px;"></div>
                <div class="col-md-3 col-sm-3 col-xs-6"><img src="{{ asset('uploads/'.$products->image4)}}" height="100px;"></div>
              </div>
              <p class="text-info">Your product images. They will be changed once you click the upload button.</p>
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ $products->name }}" placeholder="Product Name">
                  <input type="hidden" name="slug" value="-">
                  <input type="hidden" name="seller_id" value="{{ Auth::guard('seller')->user()->id }}">
                </div>

                <div class="form-group">
                  <label for="description">Product Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Describe your product">{{ $products->description }}</textarea>
                </div>


                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category">
                    
                  @foreach($categories as $category)
                  <option value="{{$category->id }}" >{{ $category->title }}</option>
                  @endforeach

                  </select>
                </div>

              
                <div class="form-group">
                  <label for="exampleInputFile">Product Image</label><br>
                  <p class="text-danger">* Select the images you want to replace</p>
                <div class="row" style="overflow: hidden;">
                  <div class="col-md-6">
                    <label>First Image</label>
                    <input type="file" name="image" id="image" class="btn btn-default" style="overflow:hidden;">
                  </div>

                  <div class="col-md-6">
                    <label>Second Image</label>
                    <input type="file" name="image2" id="image2" class="btn btn-default" style="text-overflow:ellipsis;">
                  </div>

                  <div class="col-md-6">
                    <label>Third Image</label>
                    <input type="file" name="image3" id="image3" class="btn btn-default" style="text-overflow:ellipsis;">
                  </div>

                  <div class="col-md-6">
                    <label>Fourth Image</label> 
                    <input type="file" name="image4" id="image4" class="btn btn-default" style="text-overflow:ellipsis;">
                  </div>
                </div>

                  <p class="help-block"> Upload multiple images from your computer</p>
                </div>
      
              <hr>
                <div class="form-group col-md-6">
                  <label for="price">Price Per Unit</label>
                  <input type="text" value="{{ $products->price}}" name="price" class="form-control" id="price" placeholder="Unit price">
                </div>

                <div class="form-group col-md-6">
                  <label for="stock">Quantity to upload</label>
                  <input type="number" value="{{ $products->stock}}" name="stock" class="form-control" id="stock" placeholder="Quantity">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a class="btn btn-warning" href="/seller/products">back</a>
                <button type="submit" class="btn btn-primary">Save</button>
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

