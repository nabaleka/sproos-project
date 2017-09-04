@extends('seller.layouts.seller')

@section('style')
<link rel="stylesheet" href="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Text Editors

      <small>Advanced form element</small>

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

          <form role="form" action="{{ route('products.update',$products->id) }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="box-body">

              <div class="col-lg-6">

                <div class="form-group">

                  <label for="title">Product name</label>

                  <input type="text" class="form-control" id="title" name="title" value="{{ $products->product_name }}"placeholder="Title">

                </div>



               

                <div class="form-group">

                  <label for="slug">Product Slug</label>

                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $products->slug }}">

                </div>

                

              </div>

              <div class="col-lg-6">

                            <br>

                              <div class="form-group">

                                <div class="pull-right">

                                  <label for="image">Product image</label>

                                  <input type="file" name="image" id="image">

                                </div>

                                <div class="checkbox pull-left">

                                  <label>

                                    <input type="checkbox" name="status" value="1"> Publish

                                  </label>

                                </div>

                              </div>

                              <br>

                              <div class="form-group" style="margin-top:18px;">

                                <label>Category</label>

                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">

                                @foreach ($categories as $category)

                                  <option value="{{ $category->id }}">{{ $category->title }}</option>

                                @endforeach

                                </select>

                              </div>

                              <div class="form-group" style="margin-top:18px;">

                                <label>Select Type</label>

                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">

                                  @foreach ($subcategories as $subcategory)

                                    <option value="{{ $subcategory->id }}">{{ $subcategory->title }}</option>

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

                 <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" value="{{ $products->description }}"></textarea>

               </div>

             </div>



             <div class="box-footer">

              <input type="submit" class="btn btn-primary">

              <a href="{{ route('products.index') }}" class="btn btn-warning">Back</a>

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

</div>

<!-- /.content-wrapper -->

@endsection

@section('footerSection')
<script src="{{ asset('adminscript/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection

