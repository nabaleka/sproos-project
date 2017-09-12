@extends('layouts.checkout')

@section('content')

<div class="container">
<h1>Resize image uploading</h1>
@if(count($errors) > 0)

<div class="alert alert-danger">
    <strong>OOps!</strong>There were some problems with your inputs.<br>

    <ul>
        @foreach($errors->all() as $error )
            <li> {{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

@if($message= Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ $message }}</strong>
    </div>

    <div class="row">
        <div class="col-md-4">
            <strong>Original image:</strong>
            <br>
            <img src="images/."Session::get('imageName')}}">
        </div>

        <div class="col-md-4">
            <strong>Thumbnail image:</strong>
            <br>
            <img src="{{ asset(' thumbnail/'. Session::get('imageName')) }}">
        </div>
    </div>
@endif

<form action="resizeImagePost" enctype='multipart/form-data' method="POST">
{{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <br>
            {!! Form::text('title', null, array('class'=>'form-control','placeholder'=>'Add Title')) !!}
        </div>

        <div class="col-md-12">
        <br>
            <input type="file" name="image">
        </div>  

        <div class="col-md-12">
        <br>
            <input type="submit" class="btnbtn-default">
        </div>    
    </div>

</form>
</div>

@endsection