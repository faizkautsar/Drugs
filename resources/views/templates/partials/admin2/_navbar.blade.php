<nav class="navbar">
    <div class="container-fluid px-0 align-items-stretch">
        <!-- Logo Area -->
        <div class="navbar-header">
            <a href="{{route('dash_karyawan')}}" class="navbar-brand">
                <img class="logo-expand" height="60" alt="60" src="{{asset('assets/img/Logo_bnn2.png')}}">

            </a>
        </div>
        <!-- /.navbar-header -->
        <!-- Left Menu & Sidebar Toggle -->
        <ul class="nav navbar-nav">
            <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><span>
              <i class="list-icon lnr lnr-menu"></i>
            </span></a>
            </li>
        </ul>
        <!-- /.navbar-left -->
        <!-- Search Form -->
        <!-- <form class="navbar-search d-none d-sm-block" role="search"><i class="list-icon lnr lnr-magnifier"></i>
            <input type="search" class="search-query" placeholder="Search anything...">
            <a href="javascript:void(0);" class="remove-focus">
              <i class="lnr lnr-cross"></i></a>
        </form>
        <!- /.navbar-search -->
        <div class="spacer"></div>
        <!-- <!- Right Menu -->
<!--
  <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
      <li class="dropdown show">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span><i class="list-icon lnr lnr-alarm"></i>
          <span class="button-pulse bg-danger"></span>
            </span>Messages</a>
          <!- <div class="dropdown-menu dropdown-left dropdown-card animated flipInY show">
              <div class="card">
                  <header class="card-header d-flex justify-content-center align-items-center mb-0">
                    <i class="lnr lnr-envelope fs-15 mr-2"></i>
                    <span class="heading-font-family fw-400">New Messages</span>
                  </header>
                  <!- <ul class="card-body list-unstyled dropdown-list-group ps">
                      <li>
                        <a href="#" class="media">
                          <span class="d-flex thumb-xs2 user-online">
                        <img src="assets/demo/users/2.jpg" class="rounded-circle" alt=""> </span>
                        <span class="media-body">
                          <span class="heading-font-family media-heading">Steve Smith</span>
                         <span class="media-content">commented on your photo</span>
                       </span>
                     </a>
                      </li>

                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                    </div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
                    </div>
                  </div>
                </ul>
                  <!- /.dropdown-list-group -->
                  <!-- <footer class="card-footer text-center">
                    <a href="javascript:void(0);" class="btn btn-link text-danger fs-12">See all messages</a>
                  </footer> -->
              <!-- </div>
              <!- /.card -->
          <!-- </div> -->
          <!-- /.dropdown-menu -->
      <!-- </li> -->
      <!-- /.dropdown -->
      <!-- <li><a href="javascript:void(0);" class="right-sidebar-toggle">
        <span><i class="list-icon lnr lnr-users"></i> </span>Chat</a>
      </li>
  </ul> -->
        <!-- /.navbar-right -->
        <!-- User Image with Dropdown -->
        <ul class="nav navbar-nav">
            <li class="dropdown"><a href="javascript:void(0);"
              class="dropdown-toggle dropdown-toggle-user ripple" data-toggle="dropdown">
              <span class="avatar thumb-xs">
                <img src="{{asset('assets/img/logo-bnn.png')}}" class="rounded-circle" alt="">
                 <i class="list-icon lnr lnr-chevron-down"></i></span></a>
                <div
                class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                    <div class="card">

                        <ul class="list-unstyled card-body">
                            <li>
                              <a href="{{route('karyawan.logout')}}"><span><span class="align-middle">Sign Out</span></span></a>
                            </li>
                        </ul>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
    </div>
    <!-- /.dropdown-card-profile -->
    </li>
    <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-nav -->
</div>
<!-- /.container -->
</nav>
