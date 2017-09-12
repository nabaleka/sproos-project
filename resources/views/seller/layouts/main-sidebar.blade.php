<aside class="main-sidebar">



    <!-- sidebar: style can be found in sidebar.less -->

<section class="sidebar">



      <!-- Sidebar user panel (optional) -->

      <div class="user-panel">

        <div class="pull-left image">

          <img src="{{ asset('uploads/profile/no-image.jpg') }}" class="img-circle" alt="">

        </div>

        <div class="pull-left info">
          <!-- Status -->

          <p>{{ Auth::guard('seller')->user()->first_name." ".Auth::guard('seller')->user()->last_name}}</p>

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

        <li class="header">
        @if(Auth::guard('seller'))
          <p>{{ Auth::guard('seller')->user()->email }}</p>
        @else
          <p>Seller</p>
        @endif
        </li>

        <!-- Optionally, you can add icons to the links -->
        <li><a href="/seller"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href=""><i class="fa fa-area-chart"></i> <span>Products</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
          </a>

          <ul class="treeview-menu">

            <li><a href="{{route('products.create') }}">Add</a></li>

            <li><a href="{{route('products.index') }}">View All</a></li>

          </ul>
        
        </li>
      <!-- Orders-->
      <li><a href="/seller/seller-orders"><i class="fa fa-dashboard"></i> <span>Orders</span></a></li>
        <!-- Revenue -->
        <!--li class="treeview">

          <a href="#"><i class="fa fa-bar-chart"></i> <span>Revenue</span>

            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">

               <li><a href="/seller/seller-invoices"> <span>Orders</span></a></li>
          <li><a href="/seller/seller-orders"></i> <span>Orders</span></a></li>

          </ul>

        </li-->

        <!-- Account -->
        <li><a href="{{route('seller.profile')}}"><i class="fa fa-gear"></i> <span>Account</span></a></li>


      </ul>

      <!-- /.sidebar-menu -->

    </section>

    <!-- /.sidebar -->

  </aside>