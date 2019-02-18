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
            @include('shared.bottom')
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
                        <p>We are located in Cannes, France, the ultimate glamorous destination in The French Riviera with its Luxury Villas, Cars and Yachts and known for the famous Cannes Film Festival.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                        
                                <p>We offer Super Luxury Yacht to discover the beautiful French Riviera beach of Cannes or drive our luxurious Rolls Royce around the city or enjoying the sea breeze of French Riviera while sailing around whith our beautiful Vandutch Speedboat.</p>

                                <p>Cannes has a small airport but you may prefer to fly into Nice Airport, rent our luxury rolls royce car and drive into Cannes with the top down.</p>
                                <div class="about-btn">
                                    <a href="/">Book Now</a>
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