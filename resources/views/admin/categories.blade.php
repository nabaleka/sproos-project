@extends('admin.layouts.admin')

@section('content')

	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>
	      Create your Categories
	      <small>It's that easy.</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="/admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="/admin/categories">Categories</a></li>
	      <li class="active">Create Categories</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Your Categories.</h3>
	          </div>
	    		@include('includes.messages')      
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('category.store') }}" method="post">
	          {{ csrf_field() }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="name">Category title</label>
	                <input type="text" class="form-control" id="name" name="title" placeholder="Category Title">
	              </div>

	              <div class="form-group">
	                <label for="slug">Category Slug</label>
	                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
	              </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='{{ route('category.index') }}' class="btn btn-warning">Back</a>
	            </div>
	            	
	            </div>
					
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