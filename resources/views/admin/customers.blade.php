@extends('admin.layouts.admin')
@section('content')

<section class="content-header">
    <h1>
    Sellers
    </h1>
    <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Customers</li>
    </ol>
</section>


 <section class="content">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="sellerTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Status</th>
                  
                </tr>
                </thead>
                <tbody>

                @foreach($users as $seller)
                <a href="#">
                <tr>
                
                  <td>{{ $seller->first_name }}</td>
                  <td>{{ $seller->email }}</td>
                  <td>{{ $seller->phonenumber }}</td>
                  <td> <span class="badge bg-aqua">Active</span></td> 
                  <td><a href="/admin/customers/{{$seller->id}}">View</a></td>                 
                </tr>
                </a>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 </section>

 <script>
  $(function () {
    $('#sellerTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

@endsection