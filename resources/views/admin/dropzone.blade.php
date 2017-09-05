@extends('seller.layouts.seller')

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