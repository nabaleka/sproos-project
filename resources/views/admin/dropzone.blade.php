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
        <div class="container">

    <div class="row">

        <div class="col-md-12">

            <h1>Upload Multiple Images using dropzone.js and Laravel</h1>

            {!! Form::open([ 'route' => [ 'dropzone.store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}

            <div>

                <h3>Upload Multiple Image By Click On Box</h3>

            </div>

            {!! Form::close() !!}

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