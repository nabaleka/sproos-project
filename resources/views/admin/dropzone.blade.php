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

        <div class="col-sm-6">

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
            <input type="file" class="btn btn-default" name="banner" id="banner" >
            <hr>
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