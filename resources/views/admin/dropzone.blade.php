@extends('admin.layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Banner
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin/home"><i class="fa fa-dashboard"></i>Administrator</a></li>
      <li><a href="#">Banner</a></li>
    </ol>
  </section>

  <!-- Main content -->
<section class="content">
    <div class="row">

      <div class="col-md-8">

          <h4>Upload Multiple banner images</h4>
          <p>Upload a banner image for your home page.</p>

            @if(count($banner) < 1)
              <p>You have no banner</p>
            @else
              <p>you have {{ count($banner)}} banners</p>

            @endif

            @foreach($banner as $banners)
            <div class="box-body">
              <img src="{{ asset('uploads/'.$banners->banner)}}" height="100px;";>
              <div><a href="" class="color-danger">Delete</a></div>
            </div>
            @endforeach

          <div>
            <form action="{{ route('banner.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <label>Select image to upload:</label>
              <input type="file" class="btn btn-default" name="banner" id="banner" >
            
              @if(isset($message))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-ban"></i>Banner Upload!</h4>
                  {{$message}}
                </div>
              @endif

              <input type="submit" value="Upload Image" name="submit" class="btn btn-default">
              
            </form>
          </div>
        </div>

    </div>
</section>
    <!-- /.content -->
  <!-- /.content -->

@endsection