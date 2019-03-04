@extends('layouts.main')

@section('content')

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        
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
                                <li class="active sliding-link"><a href="/">Home</a></li>
                                <li><a href="/aboutus">About</a></li>
                                <li><a href="/rental/yacht">Yacht Charter</a></li>
                                <li><a href="/rental/speedboat">Speedboat Charter</a></li>
                                <li><a href="/rental/car">Car Rental</a></li>
                                <!-- <li><a class="sliding-link" href="#service-area">Rentals</a>
                                    <ul>
                                        <li><a href="/rental/yacht">Luxury Mega Yacht</a></li>
                                        <li><a href="/rental/car">Rolls Royce Phantom Drophead</a></li>
                                        <li><a href="/rental/speedboat">Vandutch 40 Superfast Luxury Speedboat</a></li>
                                    </ul>
                                </li> -->
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
                            
                                <!-- <p>Looking for a luxury experience in The French Riviera?<br>We have the best luxury rental that fits to your need.</p> -->
                               
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
                                              <option value="3">Rolls-Royce Phantom Drophead</option>
                                              <option value="2">VanDutch 40 Superfast Luxury Boat</option>
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

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Rental Fleet</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Whether it's a family holiday, romantic getaway, corporate event or an adventure of a lifetime, Côte d’Azur Luxury Rentals can give you an exceptional charter experience in the French Riviera.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
                <div class="col-lg-11 m-auto text-center pb-5">
                    <h5>Choose below and book now for an unforgettable charter experience!</h5>
                </div>
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
