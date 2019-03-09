
<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <title>Côte d'Azur Luxury Rentals</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="{{ asset('/css/plugins/vegas.min.css') }} " rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('/css/plugins/slicknav.min.css') }} " rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('/css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('/css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
    <!--=== PickADate ===-->
    <link href="{{ asset('/js/plugins/pickadate/themes/default.date.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/pickadate/themes/default.css') }}" rel="stylesheet">
    <!--=== Google Fonts ===-->
    <link href="https://fonts.googleapis.com/css?family=Courgette|Tangerine" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="{{ asset('/img/preloader2.gif') }}" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-3">
                        <a href="/" class="logo">
                            <img src="{{ asset('/img/logo/header-logo.png') }}" alt="JSOFT">
                            <!-- <h5 class="bizname">C&#244;te d'Azur Luxury Rentals</h5> -->
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignleft mt-4">
                            <ul>
                                <li class="{{ ($menu == 'home' ? 'active' : '') }}"><a href="/">Home</a></li>
                                <li class="{{ ($menu == 'aboutus' ? 'active' : '') }}"><a href="/aboutus">About</a></li>
                                <li class="{{ ($menu == 'yacht' ? 'active' : '') }}"><a href="/rental/yacht">Yacht Charter</a></li>
                                <li class="{{ ($menu == 'speedboat' ? 'active' : '') }}"><a href="/rental/speedboat">Speedboat Charter</a></li>
                                <li class="{{ ($menu == 'car' ? 'active' : '') }}"><a href="/rental/car">Car Rental</a></li>
                               
                                <li><a class="sliding-link" href="#footer-area">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    @yield('content')

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-4">
                        <div class="single-footer-widget-left">
                            
                            <div class="widget-body">
                                <h2>Contact Us</h2>
                                <p>We would love to hear from you!</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> French Riviera, France</li>
                                    <li><i class="fa fa-mobile"></i> 06 37 23 75 60</li>
                                    <li><i class="fa fa-envelope"></i> nicolance@icloud.com</li>
                                </ul><br/>
                                <a href="https://www.google.com.bd/maps/place/Cannes,+France/@43.5370022,6.97468,13z/data=!3m1!4b1!4m5!3m4!1s0x12ce8180530cffff:0x40819a5fd979e20!8m2!3d43.552847!4d7.017369?hl=en" class="btn btn-warning" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <div class="widget-body">
                                <img id="footer-logo" src="{{ asset('/img/logo/footer-logo.png') }}" alt="JSOFT">
                                <p>Côte d’Azur Luxury Rentals gives you the most luxurious charter experience. Sail and explore the clear blue waters of the French Riviera and nearby places. Cruise around the city and marvel at the breathtaking Côte d’Azur coastline. Get sun-kissed and feel the breeze aboard a super-fast speedboat.</p>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4">
                        <div class="single-footer-widget-right">
                            
                            <div class="widget-body">
                                <h2>Send us your inquiries</h2>
                                <form id="inquiry-form" action="{{ route('inquiry.sendmail') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input id="fullname" name="fullname" class="form-control" type="text" placeholder="Full Name">
                                            </div>
                                        
                                            <div class="form-group">
                                                <input id="emailadd" name="emailadd" class="form-control" type="email" placeholder="Email Address">
                                            </div>
                                        
                                            <div class="form-group">
                                                <textarea id="message" class="form-control" name="message" cols="40" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button id="submit-inquiry" class="g-recaptcha btn btn-warning btn-block input-submit" type="submit" data-sitekey="6LfUjZYUAAAAAI7OljQCWCBunsFKIN9Wf5GlxIiC" data-callback='onSubmit'>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            <a href="#">Cookies Policy</a> | 
                            <a href="#">Privay Policy</a> |
                            <a href="#">Terms and Condition</a>
                        </p>
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{ asset('/img/scroll-top.png') }}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('/js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('/js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('/js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('/js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('/js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('/js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('/js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('/js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('/js/plugins/slicknav.min.js') }}"></script>
    <!--=== PickADate ===-->
    <script src="{{ asset('/js/plugins/pickadate/picker.js') }}"></script>
    <script src="{{ asset('/js/plugins/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('/js/plugins/pickadate/legacy.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('/js/main.js') }}"></script>

    <!--=== Custom JS ===-->
    
</body>

</html>