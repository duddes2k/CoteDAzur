@extends('layouts.main')

@section('content')

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
    
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            @include('shared.top')
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="/" class="logo">
                            <!-- <img src="{{ asset('/img/logo.png') }}" alt="JSOFT"> -->
                            <h5 class="bizname">C&#244;te d'Azur Luxury Rentals</h5>
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="/aboutus">About</a></li>
                                <li><a href="/rental/yacht">Yacht Charter</a></li>
                                <li><a href="/rental/speedboat">Speedboat Charter</a></li>
                                <li><a href="/rental/car">Car Rental</a></li>
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
    <!--== Car List Area Start ==-->
    <div style="padding-top:100px"></div>

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-ship"></i></span>
                        <p>Located in the city where the ocean view is as spectacular as the film festival, Cannes is just one of the glamorous cities to be explored in Côte d’Azur or the French Riviera. Home to Côte d’Azur Luxury Rentals, this city has more to offer as well as nearby places.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div>
                        <div class="display-table-cell">
                            <div class="about-content">
                        
                                <!-- <p>We offer: 
                                    <ul class="ml-4">
                                        <li><i class="fa fa-angle-double-right"></i> A Spectacular Super Yacht, 31-meters long, to explore the beautiful French Riviera, Italy, Spain, Corsica, etc.</li>
                                        <li><i class="fa fa-angle-double-right"></i> A beautiful Rolls-Royce Phantom Drophead to drive around the city and breathtaking coastline of the French Riviera.</li>
                                        <li><i class="fa fa-angle-double-right"></i> A super-fast and luxurious VanDutch 40 Speedboat to enjoy the seabreeze and amazing beaches of the French Riviera.</li>
                                    </ul>
                                </p> -->

                                <p>Explore Côte d’Azur and bask in the sun in our spectacular 31-meter long Mega Yacht spacious enough for parties with friends or a family trip.</p>

                                <p>Need a faster way to explore the beaches and crystal blue waters? Our superfast and luxurious VanDutch 40 Speedboat is the top choice.</p>

                                <p>If you wish to have a look around the city and the coastline by land, our chauffeur-driven grand Rolls-Royce Phantom Drophead can take you around comfortably. Our ultra-comfortable Rolls-Royce can also pick you up from Nice Airport if you wish to alight there instead of flying into Cannes’ small airport.</p>
                                
                                <div class="about-btn">
                                    <a class="sliding-link" href="#slideslow-bg">Book Now</a>
                                    <a class="sliding-link" href="#footer-area">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://player.vimeo.com/video/317605073?title=0&byline=0&portrait=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->


@endsection