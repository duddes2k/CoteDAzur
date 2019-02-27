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
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>RESERVATION DETAILS</h2>
                        <div class="review-area">
                                
                                <div class="review-form">
                                    <form action="{{ route('reservation.sendmail') }}" method="POST" id="client_info">
                                        @csrf

                                        <input type="hidden" id="service_id" name="service_id" value="{{ $service_id }}" />
                                        <input type="hidden" id="rental" name="rental" value="{{ strtoupper($rental) }}"/>
                                        <input type="hidden" id="pickdate" name="pickdate" value="{{ $pickdate }}"/>
                                        <input type="hidden" id="returndate" name="returndate" value="{{ $returndate  }}"/>
                                        <input type="hidden" id="duration" name="duration" value="{{ $duration }}"/>
                                        <input type="hidden" id="total" name="total" value="{{ $total }}"/>

                                        <div class="mt-4 mb-4"><h3>Your Information</h3></div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <label>First Name</label>
                                                    <input type="text" id="firstname" name="firstname" class="required">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="email-input">
                                                    <label>Last Name</label>
                                                    <input type="email" id="lastname" name="lastname" class="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <label>Email Address</label>
                                                    <input type="text" id="email" name="email" class="required">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="email-input">
                                                    <label>Phone</label>
                                                    <input type="email" id="phone" name="phone" class="required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="message-input">
                                            <label>Additional Information</label>
                                            <textarea cols="30" rows="5" name="info" id="info"></textarea>
                                        </div>

                                        <div class="input-submit">
                                            <button type="submit" id="submitReservation"><h3>Submit</h3></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                    
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Your Reservation</h3>

                            <div class="sidebar-body">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h4 class="mb-4">{{ strtoupper($rental) }}</h4>
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Pick Date</th>
                                                    <td>{{ $pickdate }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Return Date</th>
                                                    <td>{{ $returndate }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Duration</th>
                                                    <td>{{ $duration }} Day(s)</td>
                                                </tr>
                                            </table>
                                            <!-- <h3>Total: Euro &euro; {{ number_format($total,2) }}</h3> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->


@endsection