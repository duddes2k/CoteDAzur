@extends('layouts.main')

@section('content')

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Cannes, France
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +63-917-522-9797
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Sat 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
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
                            <h5 class="bizname">Cannes Luxury Rental</h5>
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active sliding-link"><a href="/">Home</a></li>
                                <li><a class="sliding-link" href="#about-area">About</a></li>
                                <li><a class="sliding-link" href="#service-area">Rentals</a></li>
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

    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>BOOK NOW!</h1>
                                <p>LOOKING FOR A LUXURY EXPERIENCE IN CANNES?<br> WE HAVE THE BEST LUXURY RENTAL THAT FITS TO YOUR NEED.</p>

                                <div class="book-ur-car">
                                    <form action="{{ route('reservation') }}" method="POST" id="request_quote">
                                        @csrf
                                        <div class="pick-location bookinput-item">
                                            <select class="custom-select" name="location" id="loc">
                                              <option selected>Pick Location</option>
                                              <option value="1">Cannes, France</option>
                                            </select>
                                        </div>

                                        <div class="pick-date bookinput-item">
                                            <input id="startDate2" placeholder="Pick Date" name="pickdate"/>
                                        </div>

                                        <div class="return-date bookinput-item">
                                            <input id="endDate2" placeholder="Return Date" name="returndate"/>
                                        </div>

                                        <div class="car-choose bookinput-item">
                                            <select class="custom-select" name="rental" id="rental">
                                              <option selected>Choose Rental</option>
                                              <option value="1">Humming Bird SuperYacht</option>
                                              <option value="2">Rolls-Royce Phantom Drophead</option>
                                              <option value="3">VanDutch 40 Luxury Boat</option>
                                            </select>
                                        </div>

                                        <div class="bookcar-btn bookinput-item">
                                            <button type="submit" id="submit-request">REQUEST A QUOTE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->


    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-ship"></i></span>
                        <p>We are located on the French Riviera, sunny Cannes is the ultimate glamorous destination with its luxury villas and yachts.</p>
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


    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->


    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Rentals</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Below are our Luxury units available for rent.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-car"></i> -->
                            <div class="service_rental">
                                <img src="{{ asset('/img/slider-img/slider-img-8.jpg') }}"/>
                            </div>
							<h3>ROLLS-ROYCE PHANTOM DROPHEAD</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                            <div class="about-btn">
                                <a href="/rental/car">Details</a>
                            </div>
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-ship"></i> -->
                            <div class="service_rental">
                                <img src="{{ asset('/img/slider-img/slider-img-5.png') }}"/>
                            </div>
							<h3>HUMMING BIRD SUPERYACHT</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                            <div class="about-btn">
                                <a href="/rental/yacht">Details</a>
                            </div>
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-ship"></i> -->
                            <div class="service_rental">
                                <img src="{{ asset('/img/slider-img/slider-img-7.jpg') }}"/>
                            </div>
							<h3>VANDUTCH 40 LUXURY BOAT</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                            <div class="about-btn">
                                <a href="/rental/speedboat">Details</a>
                            </div>
                        </div>
						<!-- Single Service End -->

					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

@endsection
