<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="apple-touch-icon" href="{{ asset('images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/weather-icons/climacons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/meteocons/style.css') }}">
  
  @stack('vendor_level_styles')

  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/app.css') }}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/core/menu/menu-types/horizontal-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/simple-line-icons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/timeline.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/sweetalert.css') }}">
  
  @stack('page_level_styles')

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
  <!-- END Custom CSS-->

  @stack('style')

  @yield('style')

</head>
<body class="horizontal-layout horizontal-menu 2-columns menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-fixed bg-gradient-y-danger navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
    
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="{{ route('admin.bookings') }}">
              <h3 class="brand-logo brand-text text-white">Cote d'Azur Luxury Rentals</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">{{ Auth::user()->name }}</span>
                </span>
                <span class="avatar avatar-online">
                  <img src="{{ url('admin/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                @if(Auth::user()->type === 'admin')
                <a class="dropdown-item" href=""><i class="ft-mail"></i> Settings</a>
                <a class="dropdown-item" href=""><i class="ft-check-square"></i> Users</a>
                <div class="dropdown-divider"></div>
                @endif
                <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- /// End Top Navigation //// -->
  <!-- /////// Sub Navigation  ///////////////////////////////////////////////////////////////////-->
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper" id="menubar">

    <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

      <!-- ///// Inquiries ///// -->
        <li class="dropdown nav-item {{ ($menu == 'calendar' ? 'active' : '') }}" data-menu="dropdown">
           <a class="nav-link" href="{{ route('admin.bookings.calendar')  }}"><i class="la la-calendar block-page"></i>
            <span>Calendar</span>
          </a>
        </li>
       
        <!-- ///// Bookings ///// -->
        <li class="dropdown nav-item {{ ($menu == 'bookings' ? 'active' : '') }}" data-menu="dropdown">
           <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">
           <i class="la la-calendar block-page"></i>
            <span>Bookings</span></a>
            <ul class="dropdown-menu">
              <li data-menu="">
                <a class="dropdown-item" href="/admin/bookings/speedboat" data-toggle="dropdown"><i class="la la-ship"></i>Speedboat Charter</a>
              </li>
              <li data-menu="">
                <a class="dropdown-item" href="/admin/bookings/yacht" data-toggle="dropdown"><i class="la la-ship"></i>Yacht Charter</a>
              </li>
              <li data-menu="">
                <a class="dropdown-item" href="/admin/bookings/car" data-toggle="dropdown"><i class="la la-car"></i>Car Rental</a>
              </li>
            </ul>
          
        </li>

        <!-- ///// Inquiries ///// -->
        <!-- <li class="dropdown nav-item" data-menu="dropdown">
           <a class="nav-link" href="/admin/inquiries"><i class="la la-book block-page"></i>
            <span>Inquiries</span>
          </a>
        </li> -->

      </ul>
      
    </div>
    

  </div>
  <div class="app-content content">

      @yield('content')

  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-transparent footer-dark navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 content">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 COTE D'AZUR LUXURY RENTALS. All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- END BEGIN VENDOR JS-->

  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="{{ asset('admin/vendors/js/ui/jquery.sticky.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
  @stack('page_vendor_level_scripts')
  <!-- END PAGE VENDOR JS-->
 
  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('admin/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/core/app.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/crypto.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/scripts/customizer.js') }}" type="text/javascript"></script>
  <!-- END MODERN JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  @stack('page_level_scripts')
  <!-- END PAGE LEVEL JS-->

  @yield('script')
  
  <script>

  function disableBack() { window.history.forward() }
  window.onload = disableBack();
  window.onpageshow = function(evt) { if (evt.persisted) disableBack() }

  // Centering Modal
  function alignModal() 
  {
      var modalDialog = $(this).find(".modal-dialog");
      /* Applying the top margin on modal dialog to align it vertically center */
      //modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
      modalDialog.animate({
        marginTop: Math.max(0, ($(window).height() - modalDialog.height()) / 2)
      },1000);
  }

  // Align modal when user resize the window
  $(window).on("resize", function(){
      $(".modal:visible").each(alignModal);
  });

  
  </script>

</body>
</html>