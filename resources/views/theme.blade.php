    @include('head')

    <!-- Off-Canvas Category Menu-->
    @include('category-menu')

    <!-- Off-Canvas Mobile Menu-->
    @include('mobile-menu')

    <!-- Topbar-->
    @include('topbar')

    <!-- Navbar-->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->
    @include('navbar')

    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Content-->
    @yield('content')
    </div>
 @include('end')