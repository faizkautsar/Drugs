<!DOCTYPE html>
<html lang="en">

@include('templates.partials.admin._head')

<body data-sidebar-skin="dark" data-header-skin="light" data-navbar-brand-skin="dark" data-sidebar-state="expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
@include('templates.partials.admin._navbar')
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
      @include('templates.partials.admin._sidebar')
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
       @yield('content')
            <!-- /.container -->
        </main>
        <!-- /.main-wrappper -->

    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer text-center">
        <div class="container"><span>Copyright @ 2017. All rights reserved <a href="https://horizon.dharansh.in">Horizon Admin</a> by <a href="https://themeforest.net/user/unifato">Unifato</a></span>
        </div>
        <!-- /.container -->
    </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    @include('templates.partials.admin._scripts')
</body>

</html>
