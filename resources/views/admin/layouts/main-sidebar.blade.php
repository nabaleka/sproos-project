<aside class="main-sidebar" style="background : #5d5d5d;">



    <!-- sidebar: style can be found in sidebar.less -->

<section class="sidebar">



      <!-- Sidebar user panel (optional) -->

      <div class="user-panel">

        <div class="pull-left image">

          <img src="{{ asset('uploads/profile/no-image.jpg')}}" class="img-circle" alt="User Image">

        </div>

        <div class="pull-left info">

          <p>Administrator</p>

          <!-- Status -->

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>

      </div>



      <!-- search form (Optional) -->

      <form action="#" method="get" class="sidebar-form">

        <div class="input-group">

          <input type="text" name="q" class="form-control" placeholder="Search...">

          <span class="input-group-btn">

              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

              </button>

            </span>

        </div>

      </form>

      <!-- /.search form -->



      <!-- Sidebar Menu -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">Administrator</li>

        <!-- Optionally, you can add icons to the links -->

        <li><a href="/admin/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a></li>
        <!-- Banners -->
        <li><a href="/admin/banner"><i class="fa fa-desktop"></i> <span>Banner</span></a></li>

        <li><a href="{{ route('admin.orders')}}"><i class="fa fa-inbox"></i><span>Orders</span></a></li>


        <li><a href="{{ route('admin.reports')}}"><i class="fa fa-line-chart"></i><span>Reports</span></a></li>

        <li><a href="{{ route('homepage-manager') }}"><i class="fa fa-gears"></i><span>Manage</span></a></li>

        <li><a href="/admin/category"><i class="fa fa-shopping-cart"></i><span>Categories</span></a></li>

        <li class="treeview"><a href="/admin/stats"><i class="fa fa-users"></i> <span>Accounts</span>
                    <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>
        </a>

          <ul class="treeview-menu">

            <li><a href="/admin/sellers">Sellers</a></li>

            <li><a href="/admin/customers">Customers</a></li>

          </ul>
        
        </li>

        <li><a href="/admin/profile"><i class="fa fa-user"></i><span>Admin</span></a></li>


     


      <!-- Orders-->

        
     

      </ul>

      <!-- /.sidebar-menu -->

    </section>

    <!-- /.sidebar -->

  </aside>