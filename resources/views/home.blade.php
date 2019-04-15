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
                                    
                                    <form action="{{ route('reservation') }}" method="GET" id="request_quote">
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
                    <div class="section-title text-center">
                        <h2>Our Rental Fleet</h2>
                        
                        <p>Whether it's a family holiday, romantic getaway, corporate event or an adventure of a lifetime, Côte d’Azur Luxury Rentals can give you an exceptional charter experience in the French Riviera.</p>
                        
                    </div>
                </div>
                <!-- Section Title End -->
                
                <div class="col-lg-11 m-auto text-center pb-5">
                    <h4>Choose below and book now for an unforgettable charter experience!</h4>
                </div>
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">

                            <a href="/rental/car"><img src="https://uhrjbq.ch.files.1drv.com/y4me2vRmHgbwOjKyrwk-FRZ6wx0dt-AUil7JLmPbBOdYcQdzDesQkQFME_HsyJxykvloCZK5ZecftKv-KxfGBzeDF3hq2T7stgLTTwQdeQq70CsRiIj-fRzfUzvMdmpdgYCT6EAkj95LpLa49Hjb3hJFuZQbb65dWDK3-4NrKlK1LBrg6Fo-y8sF3ZTri4SWiY1bnFON_JeR1s8JgK7UPn64g?width=256&height=171&cropmode=none"/></a>
                            
							<h3>Rolls-Royce<br/>Phantom Drophead</h3>
							
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">

                            <a href="/rental/yacht"><img src="https://9asu1q.ch.files.1drv.com/y4mymghDMjipa2ubo67GFKJ9-ybwAPS-GEzlixkZNc4_FAloQI-X7zMZ0RGrCn6iCxXW8XLA0eoUEpJ1T31Yc8d930sVbZFfJNAmeYZFGb9qQfPaX4H_t-rFnhHS0DbWOY9hPMkK_HhMl0nHXspo1dpF6zAX0N-pXGUOzicTjXXTSVzPAP3_3yMtpk1nXQ2JMz8xLFOCaIAK6YQG-chq5WewA?width=256&height=171&cropmode=none"/></a>

							<h3>Hummingbird Superyacht</h3>
							
                        </div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">

                            <a href="/rental/speedboat"><img src="https://jefbaq.ch.files.1drv.com/y4m2mqZDsZlnG24XTWBWKjGKTyg1ZEX58JrO1nbpGbLqalh8GE8_SjA05ggsK0cCmqv5vYocAP3fTRJ2bTTcNnGE9JKpN2bJx0pY8zOdnJWedzJSl2Qy9Uud8EpUeYUvxS00pstqUslJD9lSJ8VPLN4XWMht_L-gLe8vxYSDF-3lEKxrpmGObno3UsiG3Y9g8IYoomHIyCd-EH94yErK0oLPQ?width=256&height=179&cropmode=none"/></a>
                            
							<h3>VanDutch 40<br/>Speedboat</h3>
							
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
