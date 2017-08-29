@extends('admin.layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sproos Homepage Manager
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Administrator</a></li>
      <li><a href="#">Manage</a></li>
      <li class="active">Home Pages</li>
    </ol>
  </section>

  <!-- Main content -->
    <section class="content">
<!-- Home page info -->
     <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Banners</span>
              <span class="info-box-number">2</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-bar-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Featured Products</span>
              <span class="info-box-number">10</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
                <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Top Sellers</span>
              <span class="info-box-number"> 10</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-flag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categories present</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<!-- -->



      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Home Page Manager</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Manage your home page here.

 <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Banner</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Manage your home page banners. Quality is key!</div>

      <button class="btn btn-pimary">Add</button>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Featured Products</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">You can feature a product here. Earn from this.
        <div>
            <button class="btn btn-success">Add</button>
        </div>
    </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Top Sellers</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Here, add top sellers bases on sales
        <div>
            <button class="btn btn-success">Add</button>
        </div>
      </div><!-- Panel body-->
      
    </div> <!--Collapse panel -->
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Categories</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">Manage categories that will show up in your homepage
    <div>
        <button class="btn btn-success">Add</button>
    </div>
      </div><!-- Panel body-->
    </div> <!--Collapse panel -->
  </div>
</div> 


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Sproos Homepage
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  <!-- /.content -->

@endsection