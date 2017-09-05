@extends('seller.layouts.seller')

@section('style')
<link rel="stylesheet" href="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>
    Profile
    </h1>

    <ol class="breadcrumb">

      <li><a href="/seller"><i class="fa fa-dashboard"></i> Home</a></li>

      <li>Seller</li>

      <li class="active">Account</li>

    </ol>

  </section>

<section class="content">
<div class="row">
    <div class="col-sm-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-yellow">
            <div class="widget-user-image">
            <img class="img-circle" src="{{ asset('dist/img/user7-128x128.jpg')}}" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">
                @if(Auth::guard('seller'))
                    {{ Auth::guard('seller')->user()->name }}
                @else
                    Sproos Seller
                @endif
            </h3>
            <h5 class="widget-user-desc">
                @if(Auth::guard('seller'))
                    {{ Auth::guard('seller')->user()->email }}
                @else
                    Seller
                @endif
            </h5>
        </div>
        <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
            <li><a href="#">Products<span class="pull-right badge bg-blue">31</span></a></li>
            <li><a href="#">Sales<span class="pull-right badge bg-aqua">5</span></a></li>
            <li><a href="#">Revenue<span class="pull-right badge bg-green">12</span></a></li>
            <li><a href="#">Rating<span class="pull-right badge bg-red">0</span></a></li>
            </ul>
        </div>
    </div>
    <!-- /.widget-user -->
    </div>
</div>

</section>

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

