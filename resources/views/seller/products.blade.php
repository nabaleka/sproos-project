@extends('seller.layouts.seller')

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
      <div class="col-md-8 col-md-offset-2">
        <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add a new Product</h3>
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
            <form role="form" action="{{ route('products.store')}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
                  <input type="hidden" name="slug" value="-">
                  <input type="hidden" name="seller_id" value="{{ Auth::guard('seller')->user()->id }}">
                </div>

                <div class="form-group">
                  <label for="description">Product Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Describe your product"></textarea>
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
                  <label for="exampleInputFile">Product Image</label>
                  <input type="file" name="image" id="image" class="btn btn-default">
                  <input type="file" name="image2" id="image2" class="btn btn-default">
                  <input type="file" name="image3" id="image3" class="btn btn-default"> 
                  <input type="file" name="image4" id="image4" class="btn btn-default">

                  <p class="help-block"> Upload multiple images from your computer</p>
                </div>
      

                <div class="form-group col-md-6">
                  <label for="name">Price Per Unit</label>
                  <input type="text" name="price" class="form-control" id="price" placeholder="Unit price">
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Quantity to upload</label>
                  <input type="number" name="stock" class="form-control" id="stock" placeholder="Quantity">
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