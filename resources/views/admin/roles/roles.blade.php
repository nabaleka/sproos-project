@extends('admin.layouts.admin')

@section('content')
  <section class="content-header">
    <h1>
      Manage your roles
    </h1>
    <ol class="breadcrumb">
      <li><a href="admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Roles</li>
    </ol>
  </section>

  <!-- Main content -->
<section class="content">
<div class="row">
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Here are your roles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Role</th>
                  <th>Description</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Super admin</td>
                  <td>
                    Overall admin
                    </div>
                  </td>
                  <td><i class="fa fa-delete"></i></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>

<div class="row">
          <div class="box box-primary col-sm-6">
            <div class="box-header with-border">
              <h3 class="box-title">Create a new role </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="title" class="form-control" id="exampleInputEmail1" placeholder="Role title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="text">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->


          <div class="">
          <div class="box box-solid col-sm-6">
            <div class="box-header with-border">

              <h3 class="box-title">Roles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p> Give roles to your users.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          </div>
</section>
@endsection