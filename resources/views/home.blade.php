@extends('layouts.main')

@section('content')

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
                                            <button type="submit" id="submit-request">Get a Quote</button>
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
                    <h4>Choose below and book now for an unforgettable charter experience!</h4>
                </div>
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">

                            <a href="/rental/car"><img src="https://jed2dg.ch.files.1drv.com/y4mn4F9HaGsR0yQstxGwxc_3Bb9skuT0-8unpD16eNPZWM-ZIwOgmoFvWN3CLid5SALlFXOPYTQvQWChqU47PHwBQ2e_voi-LDCSnTi01izZRkwY2I6BFrrYeGAXRWGhuN2TzJw3ep8OR13UuMSNRB6VKui3hXyLFrceTUB4IkENSCYRVjV3tAyuFoNfhTHs2wf9Z6CeJj8moZ6vQavRTUBIw?width=324&height=227&cropmode=none"/></a>
                            
							<h3>Rolls-Royce<br/>Phantom Drophead</h3>
							
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">

                            <a href="/rental/yacht"><img src="https://l2belg.ch.files.1drv.com/y4ml26vKPn8L_nmInRpzG94PWaTbReVx02Ce5uKkjxOJn44gWK8WUVNoPVAABbddmRUjmtnIapNgSOEQY7bCajMXi-XmAd4aSPL_5U27C7B5bhai2sLxJ91fHl-yUXZDfw7Gk55KzgF0icd8G-iuuNZ7T3zwAd1GgccpXkb4143QGmqGQQUOWk5sTnHvDkzdPDBQvVz57NP39RsWzO2jlz85w?width=256&height=180&cropmode=none"/></a>

							<h3>Luxury Mega Yacht</h3>
							
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">

                            <a href="/rental/speedboat"><img src="https://jefbaq.ch.files.1drv.com/y4m2mqZDsZlnG24XTWBWKjGKTyg1ZEX58JrO1nbpGbLqalh8GE8_SjA05ggsK0cCmqv5vYocAP3fTRJ2bTTcNnGE9JKpN2bJx0pY8zOdnJWedzJSl2Qy9Uud8EpUeYUvxS00pstqUslJD9lSJ8VPLN4XWMht_L-gLe8vxYSDF-3lEKxrpmGObno3UsiG3Y9g8IYoomHIyCd-EH94yErK0oLPQ?width=324&height=227&cropmode=none"/></a>
                            
							<h3>VanDutch 40<br/>Superfast Speedboat</h3>
							
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
