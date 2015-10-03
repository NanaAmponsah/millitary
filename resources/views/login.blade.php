<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login | Armed Forces</title>

  <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.cs') }}s">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.css') }}">


  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/css/pages/login.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/web-icons/web-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min.css') }}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="{{ asset('assets/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{ asset('assets/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
  <script src="{{ asset('assets/vendor/breakpoints/breakpoints.js') }}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="{{ asset('assets/images/GAF.png') }}" alt="...">
        <h2 class="brand-text">GHANA ARMED FORCES</h2>
      </div>
      @if( session()->has('error_message') )
        <div class="alert alert-danger">
          {{ session('error_message') }}
        </div>
      @endif

      <p>Sign in</p>
      {!!  Form::open(array('url'=>'login','method'=>'POST'))  !!}
        <div class="form-group">
          <label class="sr-only" >Name</label>
          {!! Form::text('username','',array('class'=>'form-control','placeholder'=>'Username')) !!}

        </div>

        <div class="form-group">
          <label class="sr-only">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password"
          placeholder="Password">
        </div>
        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline pull-left">
            <input type="checkbox" id="inputCheckbox" name="checkbox">
            <label for="inputCheckbox">Remember me</label>
          </div>

        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      {!! Form::close() !!}


      <footer class="page-copyright">
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/animsition/jquery.animsition.js') }}"></script>
  <script src="{{ asset('assets/vendor/asscroll/jquery-asScroll.js') }}"></script>
  <script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ asset('assets/vendor/asscrollable/jquery.asScrollable.all.js') }}"></script>
  <script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('assets/vendor/switchery/switchery.min.j') }}s"></script>
  <script src="{{ asset('assets/vendor/intro-js/intro.js') }}"></script>
  <script src="{{ asset('assets/vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.js') }}"></script>

  <script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/core.js') }}"></script>
  <script src="{{ asset('assets/js/site.js') }}"></script>

  <script src="{{ asset('assets/js/sections/menu.js') }}"></script>
  <script src="{{ asset('assets/js/sections/menubar.js') }}"></script>
  <script src="{{ asset('assets/js/sections/sidebar.js') }}"></script>

  <script src="{{ asset('assets/js/configs/config-colors.js') }}"></script>
  <script src="{{ asset('assets/js/configs/config-tour.js') }}"></script>

  <script src="{{ asset('assets/js/components/asscrollable.js') }}"></script>
  <script src="{{ asset('assets/js/components/animsition.js') }}"></script>
  <script src="{{ asset('assets/js/components/slidepanel.js') }}"></script>
  <script src="{{ asset('assets/js/components/switchery.js') }}"></script>
  <script src="{{ asset('assets/js/components/jquery-placeholder.js') }}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>