<!DOCTYPE html>

<!--

This is a starter template page. Use this page to start your new project from

scratch. This page gets rid of all links and provides the needed markup only.

-->

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sproos | Seller</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/favicon.png') }}">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">

  <!-- Ionicons -->

  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminscript/plugins/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.css') }}">


  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter

        page. However, you can choose any other skin. Make sure you

        apply the skin class to the body tag so the changes take effect. -->

  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<style>
  a{
  color : #5d5d5d;
}
 .skin-red .sidebar-menu > li:hover > a, .skin-red .sidebar-menu > li.active > a, .skin-red .sidebar-menu > li.menu-open > a{
background : #ee2956;
}

.skin-red .wrapper, .skin-red .main-sidebar, .skin-red .left-side{
  background : #5d5d5d;
}
.treeview-menu > li > a{
  background : #cbcbcd;0 
}

.skin-red .sidebar-menu > li.header{
  background : #ee2956;
  color : #fff;
}

.skin-red .main-header .logo{
  background : #ee2956;
}

.skin-red .sidebar a{
  color : #fff;
}

.skin-red .sidebar-menu > li > .treeview-menu{
  background : #eff0f0;
}

.skin-red .sidebar-form input[type="text"]{
  background : #eff0f0;
}
.skin-red .sidebar-form .btn{
  background : #eff0f0;
}

.box{
  border-top: 3px solid #ee2956;
}
.box.box-primary{
  border-top-color: #ee2956;
}

.box-title{
  color : #5d5d5d;
}

.btn-app{
  color: #fff;
  border: 1px solid #ee2956;
  background-color: #ee2956;
}

.bg-aqua{
  background-color: #5d5d5d !important;
}

.bg-green{
  background-color: #5d5d5d !important;
}

.bg-yellow{
  background-color: #5d5d5d !important;
}

.bg-red{
  background-color: #5d5d5d !important;
}

  
  .dropzone .dz-preview .dz-error-message {
      top: 150px!important;
  }

  .btn-default{
    background : #fff;
    border-color: #ee2956;
	  border-radius: 20px;
	  margin-bottom: 10px;
  }

  .form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de;
    border-radius: 10px;
  }
  .btn-primary {
	background-color: #5d5d5d;
	border-color: transparent;
	border-radius: 20px;
}
.btn-warning {
	background-color: #ee2956;
	border-color: transparent;
	border-radius: 20px;
}

.btn-success {
	background-color: #ee2956;
	border-color: transparent;
	border-radius: 20px;
}
</style>

  <!-- Google Font -->

  <link rel="stylesheet" href="{{ asset('adminscript/plugins/select2/select2.min.css') }}">
  <link rel="stylesheet" href=" {{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') }}">

</head>


<body class="hold-transition skin-red sidebar-mini ">

<div class="wrapper">



  <!-- Main Header -->
  @include('seller.includes.main-header')

  <!-- Left side column. contains the logo and sidebar -->

  @include('seller.layouts.main-sidebar')



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

      <!-- Main content -->


    @yield('content')




    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->



  <!-- Main Footer -->
@include('admin.includes.admin-footer')


  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Create the tabs -->

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

    </ul>

    <!-- Tab panes -->

    <div class="tab-content">

      <!-- Home tab content -->

      <div class="tab-pane active" id="control-sidebar-home-tab">

        <h3 class="control-sidebar-heading">Recent Activity</h3>

        <ul class="control-sidebar-menu">

          <li>

            <a href="javascript:;">

              <i class="menu-icon fa fa-user bg-red"></i>



              <div class="menu-info">

                <h4 class="control-sidebar-subheading">No Recent Activity!</h4>



                <p>Today</p>

              </div>

            </a>

          </li>

        </ul>

        <!-- /.control-sidebar-menu -->



        <h3 class="control-sidebar-heading">Tasks Progress</h3>

        <ul class="control-sidebar-menu">

          <li>

            <a href="javascript:;">

              <h4 class="control-sidebar-subheading">

                New Reports

                <span class="pull-right-container">

                    <span class="label label-danger pull-right">70%</span>

                  </span>

              </h4>



              <div class="progress progress-xxs">

                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

              </div>

            </a>

          </li>

        </ul>

        <!-- /.control-sidebar-menu -->



      </div>

      <!-- /.tab-pane -->

      <!-- Stats tab content -->

      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

      <!-- /.tab-pane -->

      <!-- Settings tab content -->

      <div class="tab-pane" id="control-sidebar-settings-tab">

        <form method="post">

          <h3 class="control-sidebar-heading">General Settings</h3>



          <div class="form-group">

            <label class="control-sidebar-subheading">

              Report panel usage

              <input type="checkbox" class="pull-right" checked>

            </label>



            <p>

              Some information about this general settings option

            </p>

          </div>

          <!-- /.form-group -->

        </form>

      </div>

      <!-- /.tab-pane -->

    </div>

  </aside>

  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed

  immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->



<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap 3.3.7 -->

<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<!-- Chart JS -->

<script src="{{ asset('bower_components/dist/Chart.js') }}"></script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.

     Both of these plugins are recommended to enhance the

     user experience. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

<script src="{{ asset('adminscript/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{  asset('adminscript/ckeditor/ckeditor.js') }}"></script>

<script>

    $(function() {

      // Replace the <textarea id="editor1"> with a CKEditor

      // instance, using default configuration.

      CKEDITOR.replace('editor1');

      //bootstrap WYSIHTML5 - text editor

      $(".textarea").wysihtml5();

    });
  
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

</script>

<script src="{{ asset('adminscript/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminscript/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<script>

  $(document).ready(function() {

    $(".select2").select2();

  });

</script>

</body>

</html>