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
                                <li><a href="/aboutus">About</a></li>
                                <li class="active"><a href="/rental/yacht">Yacht Charter</a></li>
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
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>LUXURY MEGA YACHT</h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="https://l2belg.ch.files.1drv.com/y4ml26vKPn8L_nmInRpzG94PWaTbReVx02Ce5uKkjxOJn44gWK8WUVNoPVAABbddmRUjmtnIapNgSOEQY7bCajMXi-XmAd4aSPL_5U27C7B5bhai2sLxJ91fHl-yUXZDfw7Gk55KzgF0icd8G-iuuNZ7T3zwAd1GgccpXkb4143QGmqGQQUOWk5sTnHvDkzdPDBQvVz57NP39RsWzO2jlz85w?width=1233&height=868&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qosbfw.ch.files.1drv.com/y4mS7yqIit-a98T5oRrRVX9NNMq1X_M9hHl88ECO8fU2EIVbHVt5cU-MQulACf0XKTmpbc7nlp2rbDxAryeztaGKgOOJMUCIlhSM4wPDY6QwoRQf-KbT1s_kg5-Q3_5ouFfu-bQt150ymyLn11eX8sbNzsnuzueFy_0mr4iIUin3zjKG9sFlbu91NjVIMiqViQDETNEWa1LyZYl-Tj7wOquog?width=1227&height=869&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qosppq.ch.files.1drv.com/y4mNCyHrEiWzoRWCE4wHx3WwGWtXMqawnmGTGSBizvMha2jsg5tulVaGlPU9VIQ9tppUFj3NOeOa9DnVSfnaocueDcgckFO0Z9kPil36GmentYUhIBltZCJOhuXCuOFUJmQxnpumvU5eczp3SBWV-qd14Dr_S0FYZu0RXPZ-n8ZwMHS4waK_vdgX3ub-s0m5nctJRxGFToZ6nm1dbvGG7_i8A?width=1235&height=869&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qosw7a.ch.files.1drv.com/y4mMZ564BK1DRBop1AdXytNgy6XD6A4DEObw7hvzMkT0AdCwEc4VjwizkyJ2lWVeTj1q-Po19RV7mfnSw8bbBwBLGy7jthmGQo4bBVGsFwDwpRPwXRTmDClO6_EJVPkK0_akNoUK5HHocwf_9bwe6p-zahSEvSNmsJ1nPQ5uqV2dbzGlKx0z_iAFq052PjRAuLtrY-M-BaFqkYFpOu_a_WhcA?width=1231&height=865&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qovzuw.ch.files.1drv.com/y4mD2mjdPT0dXVlDjohk3BrH178rmzzqKsDs7oW6dPfopRZWxGABQ3f3Rmig2HvQUpyKnAmtVxrHEoaSkczGv1JeHUyXuz0oDgX31uQOmvCSDBxwBle_cGurcKNOeCII4yKPWRgE4vd3AeEwFJs7u3KDHOECzYib3pUqqdSQWManWldjscIT_ExV-0h_eGM6teIUOHGrJs1CajDVFw7skBpyA?width=1233&height=870&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://l2dduq.ch.files.1drv.com/y4mYoj24im1p9_HMO5fS5xc8Q11SpVY3kOevZkBxGSgvUyau3b93wt1RQNdV6aSVn4pRuLuDESnfoRur5px9yYY56fzblsLPyjC1cdWNy2ZJSRvXPn3T1uduNRVKytVLjITu125d_JO3dF_Lp9B1ZQNW8NMHVir_2fmtyhRTxsX2j1OzR4hqjtB1Y0pz3YR8qECAqW7qbvpqTOoAUe1zKJ14Q?width=1230&height=870&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qouoma.ch.files.1drv.com/y4mwciIzo23Df32zPgsvjf1uR-rNfQoaqfawjFoFb33DahznhBUPA8gzh8ePuhkK-zeWgf235FiF58jE-jwISnqTPdQi8ZWnj_xUcyoVhiMNR1Fc7drvViHfUWUM6dZITILnXUzDm49CzpLDJcgA57xy6swnyobKsV2VXvLg_ONT2ZyRypGa0EL7g1wWNjgaRZMPJMcVyWkeiIVVnaL8sj_Zw?width=1232&height=870&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qotfjg.ch.files.1drv.com/y4mlp2sSErUXYwtsc5FIi8EZ5yrRv5XmWsNbIBGC0A3u5LN-w-cGGOIb9xycBH4MGhzcHHQ0T-o6TTz63bA1dNKFztuIEsJqt_W688G-fvMQ4rGKvR2oIjJItLIJyGyE4nK7H-9Wwe1Mgm71Sfun2LVXHt3AIft92of2hAXPJAlSDy1EPugw1Mhq8dYZNhECX7CGlGkNiFlbQBIkHOrtGDZKA?width=1232&height=870&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qov6ag.ch.files.1drv.com/y4mHel1P0B_aU46QdWNjt7sW--4M6lJ9mEkA_rlTb6tc_N38F994pueNEcWBKzlF1eXc08dquQYNJBZJlN-O5eXfbEHHANt85QqnwHBPrtwsb3CMMUykoSngah_J8IsiVrRqC18k8C6qzDgbYwwbLCTj2YgFtdsrgC-8V6kfQ17KadkOxYCihbsijxW7PYCl-os0ZTc5Hr-OxwjIZBqg0JbAQ?width=1232&height=871&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://qouvdw.ch.files.1drv.com/y4mD47N5HRQeTUMtxhSrdy9bV4qf3SA6MB6IK4z_q4Nv4F8SxekgqrnQ08dnqmCz8yKWwHX_K9nbIDyHjQ3JXhI0clh71Pcgms_5lbqa3A4e8TYYa9JKa6lJ9UQ0ZC4Uqy0xAIyMg1BdbCYqZw-M2vU4GgaLWtVyAJrrC9ccy5oNAgmmX4gAqG3B2OCzNouoplb91L8mjyofwdxggdpAUznNw?width=1231&height=872&cropmode=none" alt="JSOFT">
                            </div>
                        </div>
                        <div class="car-details-info">
                            <p>Our 30.33-meter spacious mega yacht can take you as fast as 32kn with a maximum cruising range of 1000.0nm at 25.0kn. Designed with exquisite interiors, the yacht can accommodate 7 to 8 guests with 4 professionally-trained crew members.</p>

                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Top Speed</th>
                                                    <td>32kts</td>
                                                    <th>Cruise Speed</th>
                                                    <td>26kts</td>
                                                </tr>
                                                <tr>
                                                    <th>Range</th>
                                                    <td>10000nm</td>
                                                    <th>Displacement</th>
                                                    <td>80t</td>
                                                </tr>
                                                <tr>
                                                    <th>Beam</th>
                                                    <td>6.5m</td>
                                                    <th>Guests</th>
                                                    <td>7-8</td>
                                                </tr>
                                                <tr>
                                                    <th>Guest Cabin</th>
                                                    <td>4</td>
                                                    <th>Crew</th>
                                                    <td>4</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <h3 class="rates">Rates</h3>
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th class="text-center">SEASON</th>
                                                    <th class="text-center">RATE</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">PEAK SEASON</td>
                                                    <td class="text-center">EURO 45,000.00 / WEEK</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">LEAN SEASON</td>
                                                    <td class="text-center">EURO 43,000.00 / WEEK</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="text-center">EURO 10,000.00 / DAY</td>
                                                </tr>
                                            </table>
                                        </div>
                                
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">

                        <!-- Single Sidebar Start -->
                        
                        <!-- Single Sidebar End -->
                    
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Additional Information</h3>

                            <div class="sidebar-body">
                                <p>From the Guy Couach shipyard, the Hummingbird was built in 2007 and designed with Kevlar composite for the Couach Yachts 3000 Fly series.</p><br/>

                                <p>The light wood and soft furnishings of the minimalist interior design by Danièle Chopard gives you the ambiance of a beach house. This superyacht can accommodate 7 to 8 guests in its four rooms. The full-beam master suite with a separate study is convertible into a single cabin and adeptly designed to ensure privacy. Other rooms include a twin cabin and a VIP cabin. The Hummingbird also features quarters for the crew.</p><br/> 

                                <p>Lounge at the spacious main saloon and enjoy meals at the adjacent formal dining area while savoring the view. Step outside the sundeck with a big sun pad, delight in the 360-degree view while dining al-fresco at the dining table or grill steaks and freshly caught fish at the newly installed barbeque at the flybridge. Additional sunbathing areas, extra seating, and dining spaces await your guests. Take a dip into the Hummingbird’s swimming pool where the platform can be converted into a dive platform or sunbathing platform.</p><br/>

                                <p>This superyacht is powered by twin MTU 16V 2000 M93 Diesel engines that take you cruising at 25 knots and takes you as fast as 32 knots.</p>
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