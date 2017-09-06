@extends('admin.layouts.admin')

@section('content')

<!-- First page row -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box bg-red">
                <div class="inner">
                <?php $count = 0; ?>
                @foreach($products as $product)
                    <?php $count = $count + 1 ?>
                @endforeach
                    <h3>{{ $count }}</h3>

                    <p>Products</p>
                </div>

                <div class="icon">
                    <i class="fa fa-cart-arrow-down"></i>
                </div>
            <a href="/admin/products" class="small-box-footer">View Products <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
    <?php $count = 0; ?>
    @foreach($seller as $sellers)
        <?php $count = $count + 1 ?>
    @endforeach
        <h3>{{ $count }}</h3>
<p>Sellers</p>
</div>
<div class="icon">
<i class="fa fa-users"></i>
</div>
<a href="#" class="small-box-footer">view more.. <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-yellow">
<div class="inner">
<?php $count = 0; ?>
    @foreach($seller as $sellers)
        <?php $count = $count + 1 ?>
    @endforeach
        <h3>{{ $count }}</h3>
<p>Register Users</p>
</div>
<div class="icon">
<i class="fa fa-user"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
<h3>65</h3>

<p>Unique Visitors</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->

</div>
<!-- /.row -->

<div class="row">
<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="progress">
                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (left) -->


        

</div>

    
</div>



          

  
@endsection