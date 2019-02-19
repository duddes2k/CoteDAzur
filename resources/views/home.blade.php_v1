@extends('layouts.main')

@section('content')

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            @include('shared.tophome')
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
                                <p>LOOKING FOR A LUXURY EXPERIENCE IN THE FRENCH RIVIERA?<br> WE HAVE THE BEST LUXURY RENTAL THAT FITS TO YOUR NEED.</p>

                                <div class="book-ur-car">
                                    <form action="{{ route('reservation') }}" method="POST" id="request_quote">
                                        @csrf
                                        <div class="pick-location bookinput-item">
                                            <select class="custom-select" name="location" id="loc">
                                              <option>Pick Location</option>
                                              <option value="1" selected>Cannes, France</option>
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
                                              <option value="1">Mega Luxury Yacht</option>
                                              <option value="2">Rolls-Royce Phantom Drophead</option>
                                              <option value="3">VanDutch 40 Superfast Luxury Boat</option>
                                            </select>
                                        </div>

                                        <div class="bookcar-btn bookinput-item">
                                            <button type="submit" id="submit-request">GET A QUOTE</button>
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
                        
                                <p>We offer: 
                                    <ul class="ml-4">
                                        <li><i class="fa fa-angle-double-right"></i> A Spectacular Super Yacht, 31-meters long, to explore the beautiful French Riviera, Italy, Spain, Corsica, etc.</li>
                                        <li><i class="fa fa-angle-double-right"></i> A beautiful Rolls-Royce Phantom Drophead to drive around the city and breathtaking coastline of the French Riviera.</li>
                                        <li><i class="fa fa-angle-double-right"></i> A super-fast and luxurious VanDutch 40 Speedboat to enjoy the seabreeze and amazing beaches of the French Riviera.</li>
                                    </ul>
                                </p>

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
                            <div class="service_rental mb-3">
                                <img src="https://upn3pw.ch.files.1drv.com/y4mZs5ZDPrZvBAo5LFREH7Z6BpzGeooBGCdK29rbr9E9miZoqgnjjv7JdLnIfbVjQXjtcpDTpAp5efgvazmifq-HpX_RgmPP-8OGsTNEEfiMw412yMm9TI_hquxNPR7akG12MMi_LgmUlG2rj-_7kgaxQ1W8I3NbvThnlzbX7qfl_NN7pFNM4_w9GzAiWmabruTQirlBEOOc7jo3cjLcA1zRQ?width=256&height=171&cropmode=none"/>
                            </div>
							<h5>ROLLS-ROYCE PHANTOM DROPHEAD</h5>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                            <div class="about-btn mt-3">
                                <a href="/rental/car">View Details</a>
                            </div>
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-ship"></i> -->
                            <div class="service_rental mb-3">
                                <img src="https://l2belg.ch.files.1drv.com/y4ml26vKPn8L_nmInRpzG94PWaTbReVx02Ce5uKkjxOJn44gWK8WUVNoPVAABbddmRUjmtnIapNgSOEQY7bCajMXi-XmAd4aSPL_5U27C7B5bhai2sLxJ91fHl-yUXZDfw7Gk55KzgF0icd8G-iuuNZ7T3zwAd1GgccpXkb4143QGmqGQQUOWk5sTnHvDkzdPDBQvVz57NP39RsWzO2jlz85w?width=256&height=180&cropmode=none"/>
                            </div>
							<h5>LUXURY MEGA YACHT</h5>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                            <div class="about-btn mt-3">
                                <a href="/rental/yacht">View Details</a>
                            </div>
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<!-- <i class="fa fa-ship"></i> -->
                            <div class="service_rental mb-3">
                                <img src="https://7l2mkq.ch.files.1drv.com/y4mDieMO4lgaXU_FJLLzj3OWwa-q_0cvybEDpGO-xJ0jmlrcfUjSnxbHbojYNVhMJiC-wc8Nq-pun_pQdP6tqvuwnv41D7T6HYnF3SIqzfW0Yce7jMA1Xbgqtx5JUiGqKIkDUdR48bbu_qR6PmqN3LNTBu0DkRyJtgdcFpOfiRlKnmZ6Z-ASitH5xP3xx4jNIFNXXJ1Up-epWCf6AW3YkH97w?width=256&height=192&cropmode=none"/>
                            </div>
							<h5>VANDUTCH 40 SUPERFAST LUXURY SPEEDBOAT</h5>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                            <div class="about-btn mt-3">
                                <a href="/rental/speedboat">View Details</a>
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
