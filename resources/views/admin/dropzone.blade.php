@extends('admin.layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Banner
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Administrator</a></li>
      <li><a href="#">Manage</a></li>
      <li><a href="#">Add banner</a></li>
      <li class="active">Upload</li>
    </ol>
  </section>

  <!-- Main content -->
    <section class="content">
   

    <div class="row">

        <div class="col-sm-12">

        <h4>Upload Multiple banner images</h4>


        <p>Upload a banner image for your home page.</p>

        @if(count($banner) < 1)
          <p>You have no banner</p>
        
        @else
        you have {{ count($banner)}} banners
        @endif
        <div>
        <form action="{{ route('banner.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            Select image to upload:
            <input type="file" class="jumbotron" name="banner" id="banner">
            <input type="submit" class="btn btn-default" value="Upload Image" name="submit">
        </form>
        </div>
        </div>

    </div>



<script type="text/javascript">

        Dropzone.options.imageUpload = {

            maxFilesize         :       1,

            acceptedFiles: ".jpeg,.jpg,.png,.gif"

        };

</script>



    </section>
    <!-- /.content -->
  <!-- /.content -->

@endsection