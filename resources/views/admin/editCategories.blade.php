@extends('admin.layouts.admin')

@section('content')
	<!-- Content Wrapper. Contains page content -->

	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>
	      {{$categories->title}}
	      <small>Update</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="#">Caregories</a></li>
	      <li class="active">{{$categories->title}}</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-8 col-md-offset-2">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Update {{$categories->title}} </h3>
	          </div>
	    		@include('includes.messages')      
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('category.update',$categories->id) }}" method="post" enctype="multipart/form-data">
	          {{ csrf_field() }}
	          {{ method_field('PUT') }}
	            <div class="box-body">
						<div>
						@if(count($categories->image) == null)
						<p>
							There is no image
			
						</p>

						@else
						<div>
						<img alt="Category Image" src = "{{asset('uploads/'.$categories->image)}}" height="100px">
						</div>
						@endif
						<div class="form-group">
	                <label for="image">Update the Category Image</label>
									<p>Add a descriptive image for your category. Be creative!</p>
	                <input type="file" class="btn btn-default" id="image" name="image" placeholder="Caregory Image">
	              </div>
						
						</div>

	            <div class="">
	              <div class="form-group">
	                <label for="name">Category title</label>
	                <input type="text" class="form-control" id="name" name="title" placeholder="Category Title" value="{{ $categories->title }}">
	              </div>

	              <div class="form-group">
	                <label for="description">Category Description</label>
	                <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $categories->description }}</textarea>
	              </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Update</button>
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