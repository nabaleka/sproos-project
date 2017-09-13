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

        <li class="active" style="background:#cbcbcd;"><a href="/admin/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a></li>

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

        <!-- Admin -->

        <li class="treeview">

          <a href="#"><i class="fa fa-desktop"></i> <span>Manage</span>

            <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="#">Featured Products</a></li>

            <li><a href="/admin/sellers">Sellers</a></li>

            <li><a href="/admin/home-page">Home Page</a></li>

            <li><a href="/admin/category">Categories</a></li>

            <li><a href="#">Revenue</a></li>

            <li><a href="#">Payment Methods</a></li>

            <li><a href="/admin/roles">Roles</a></li>

          </ul>

        </li>


        <!-- Shipping -->

        <li class="treeview">

          <a href="#"><i class="fa fa-truck"></i> <span>Shipping</span>

            <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="#">Methods</a></li>

            <li><a href="#">Geography</a></li>

          </ul>

        </li>



      <!-- Orders-->

        <li class="treeview">

          <a href="/admin/orders"><i class="fa fa-money"></i> <span>Orders</span>

            <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="admin/invoices">Invoices</a></li>

            <li><a href="/admin/orders">View Orders</a></li>

            <li><a href="#">Summary</a></li>

          </ul>

        </li>
        <!-- Revenue -->

        <li class="treeview">

          <a href="#"><i class="fa fa-bar-chart"></i> <span>Revenue</span>

            <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="#">Summary</a></li>

            <li><a href="#">Sales</a></li>

            <li><a href="#">Commission</a></li>

          </ul>

        </li>




        <!-- Email -->

        <li class="treeview">

          <a href="#"><i class="fa fa-envelope-o"></i> <span>Messages</span>

            <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="#">Inbox</a></li>

            <li><a href="#">Templates</a></li>

            <li><a href="#">Users</a></li>

          </ul>

        </li>

      <!-- Products -->

        <li class="treeview">

          <a href="#"><i class="fa fa-circle"></i> <span>Products</span>

            <span class="pull-right-container">

                <i class="fa fa-angle-left pull-right"></i>

              </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="/admin/products">View All</a></li>

          </ul>

        </li>

      </ul>

      <!-- /.sidebar-menu -->

    </section>

    <!-- /.sidebar -->

  </aside>