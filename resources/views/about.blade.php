@extends('layouts.main')

@section('meta')
    <meta name="keywords" content="luxury yacht rentals france,yacht rentals france,luxury car rental france,boat rental france,car rental france,yacht charter france,boat charter france" />
    <meta name="description" content="Cote d’Azur Luxury Rentals can give you an exceptional charter experience in the French Riviera." />
    <meta property="og:title" content="French Riviera (Cote d'Azur) | Luxury Yacht and Car Rentals" />
    <meta property="og:image" content="http://cotedazurluxuryrentals.com/img/logo/about-logo.png" />
    <meta property="og:site_name" content="Cote d'Azur Luxury Rentals" />
@endsection

@section('title')
<title>Côte d'Azur Luxury Rentals</title>
@endsection

@section('content')


    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-6">
                <div class="section-title  text-center">
                    
                    
                </div>
            </div>
            <!-- Section Title End -->
        
            <!-- About Content Start -->
            <div class="col-lg-6" id="about-background-right">
                <div class="about-content text-center">

                    <img src="/img/logo/about-logo.png" width="130"/>

                    <p><h1>Côte d’Azur Luxury Rentals</h1> is located in the city where the ocean view is as spectacular as the film festival, Cannes is just one of the glamorous cities to be explored in Côte d’Azur or the French Riviera. Home to <a href="{{ route('home') }}">Côte d’Azur Luxury Rentals</a>, this city has more to offer as well as nearby places.</p>
            
                    <p>Explore Côte d’Azur and bask in the sun in our spectacular 31-meter long <a href="{{ route('rental.yacht') }}">Mega Yacht</a> spacious enough for parties with friends or a family trip.</p>

                    <p>Need a faster way to explore the beaches and crystal blue waters? Our superfast and luxurious <a href="{{ route('rental.speedboat') }}">VanDutch 40 Speedboat</a> is the top choice.</p>

                    <p>If you wish to have a look around the city and the coastline by land, our chauffeur-driven grand <a href="{{ route('rental.car') }}">Rolls-Royce Phantom Drophead</a> can take you around comfortably. Our ultra-comfortable Rolls-Royce can also pick you up from Nice Airport if you wish to alight there instead of flying into Cannes’ small airport.</p>
                    
                    <div class="about-btn">
                        <a class="btn btn-lg btn-about" href="/reservation/?rental=1">Book Now</a>
                        <a class="sliding-link btn btn-lg btn-about" href="#footer-area">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- About Content End -->
        </div>
    </section>
    <!--== About Us Area End ==-->


@endsection