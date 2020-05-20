<nav class="navbar">
    <div class="container-fluid px-0 align-items-stretch">
        <!-- Logo Area -->
        <div class="navbar-header">
            <a href="" class="navbar-brand">
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
        <form class="navbar-search d-none d-sm-block" role="search"><i class="list-icon lnr lnr-magnifier"></i>
            <input type="search" class="search-query" placeholder="Search anything...">
            <a href="javascript:void(0);" class="remove-focus">
              <i class="lnr lnr-cross"></i></a>
        </form>
        <!-- /.navbar-search -->
        <div class="spacer"></div>
        <!-- Right Menu -->
        <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                    <div class="card">
                        <header class="card-header d-flex justify-content-center align-items-center mb-0">
                          <i class="lnr lnr-envelope fs-15 mr-2"></i>
                          <span class="heading-font-family fw-400">New Messages</span>
                        </header>

                        <!-- /.dropdown-list-group -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.dropdown-menu -->
            </li>
            <!-- /.dropdown -->

        </ul>
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
                              <a href="{{route('admin.logout')}}"><span><span class="align-middle">Sign Out</span></span></a>
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
