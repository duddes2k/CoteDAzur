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
                            <h5 class="bizname">Cannes Luxury Rental</h5>
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/aboutus">About</a></li>
                                <li class="active"><a href="/">Rentals</a>
                                    <ul>
                                        <li><a href="/rental/yacht">Humming Bird SuperYacht</a></li>
                                        <li><a href="/rental/car">Rolls Royce Phantom Drophead</a></li>
                                        <li><a href="/rental/speedboat">Vandutch 40 Luxury Boat</a></li>
                                    </ul>

                                </li>
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
                        <h2>VanDutch 40 IL GRIGIO<span class="price">Rent: <b>$2,654.68 USD /day</b></span></h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="https://l2cbxg.ch.files.1drv.com/y4mSpaSBWDevraB6jqg8oFeFbZkzictLOFANs3YugYqCDwHpYe2PLXwtclVXZ7FtgiWujjoOlyNjFBC31iJAd_4VlkdLWRY-T2vPwTEQIEi1jqF_D5xXfXCy_5qGT2SbN8deE9g0tGOjrcFHPEY7WZpfrBqUg9kT9mlj27x4uZAbioECqdAi65kAhsMnvXt08uXkH0gHgroHlj25umlki-g7Q?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://idkyvw.ch.files.1drv.com/y4mLdvV-ScC2WWoELZC2IdPObKbO0a7O-Sfjo678GQx5DL8f7fMfX9VBzaBPqVAFu0BYtgyHXSB8j35DrupDigGyLWCBIE4hoxPEqJrIlyTTpRoFQgE6XxZM5LRvA5I7Pm9jgMQP6PHVnggAD4_Wg5puHMj1SZe5FktetpSP-R7A0-Xgoo_rjiO8QKyyPc_jA9sLvhsO3fjytWzmql-bEoj_g?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://idjnna.ch.files.1drv.com/y4my3dzymOxsI9Td8CrML9ObX-74KsYl0xoCvxyVPJW8ZXedqD0ONet8CrQlP6E4NUSeyR34zNNPeyFBIUcgrSEogBBI67eJW9e-HI7rCQOAm4WZ3pl7znkmE0Mk42JUO3PaFUPjLK1IsqkcVAfflLJojbc8Uj2YHTnAmgFs1D3OIp4AwEm9Kuo0UN5vSEWPYCwXh5Dgsvho52GwAE5i6a6nA?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://idixsw.ch.files.1drv.com/y4msl_dfw2U66ENEagATY-yUXI6aGHLBEiJFRXApj8kkFRPFuzb8vXIcv1g-ESz3q3J6FKfBTZbLaYLlE0_Mxud8mmevRWBomxbp6tY6yw0NS07vaLUeipOFHUu7ysWBBpSt3e9YsElmslqBP2ccFxE7cde2Hcj3kvhZacu8i42tExDvyxNB30SjhpZP7prHKwwsFyvvCHiFA30rP4kWgpJEQ?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://idlt0w.ch.files.1drv.com/y4mIvlzno88xk2_hmTmH8MnSCGsx96VHRWKz43CbzXVyR-Ra_wkA61NtpX_I_rwXRFpz7lI6ucuxMdNJjnN5h2ECevebO7HHOIm3ysEvbt9IDJwv9xZoEJx8sVETnyL9xodsYKeFp3uicTCqQquIVOng2oGo1i9u2-CFCy9H74JVsOhPbakUIKxFJ0V873F6JsY8PaIb5vhlz9T14lVUPPDZw?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://7l1pyq.ch.files.1drv.com/y4md4YuvT8fFbkFMve8f5KcEvAW-MdPk1-m9bAZG4c1x3SXQNYhEjJgFj0Miy4j5Ag_Ly9H_ad3keG-Y_GDgp-45ADXuEVk1rWNxxCYQfHf1el5wcyesmEV-sRfplIPNxPRGGeXaWjH5OF1Eo9Pkw-3KYnghcdqSb008YpBo22AlAFoVpzAUmAmsRxIT3sOGm1efVfdSbAqV4ChqGBvCCaMjQ?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://7l3vmw.ch.files.1drv.com/y4mW_fZcMEBoA55Vy94cVuEjYO72qjZaq3FibppGfU4e9uWEjdYDE_vox-dw9T-yrv97EeFf6anTAbgLJNgnsE-Av_kb2i9tBMywhA1ohQiqr5gD_ovx54-MWm9s4TQOXcSVPdz8f-CPAJuf1dlCQapc7yhcRT4pP-HkVQcE8ucqh5vHNSFPluS2AbVbn1INedbPaDkBpuf71kjpKp6NU5seg?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://7l0lhq.ch.files.1drv.com/y4m_rGYAZku118-lZS2wS2DlG8hZwAWp-5ojTtgV19x_xvkghXqdZZEqeZArJQy5GqjH3Y6il9htIW6GCjqtBX5NE_141-TdmOYlNH1YY8KWCDl-3CsJtuiv5qA1cku7HE90iiq8Q20VYocBg0LaLHCWfe2IzvQMGxWEFUhxQXMnhPl1jRKWGiC3ZEcwbFr5QywFGSvzBV4yIS40EpoZWXcrg?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://7l2mkq.ch.files.1drv.com/y4mDieMO4lgaXU_FJLLzj3OWwa-q_0cvybEDpGO-xJ0jmlrcfUjSnxbHbojYNVhMJiC-wc8Nq-pun_pQdP6tqvuwnv41D7T6HYnF3SIqzfW0Yce7jMA1Xbgqtx5JUiGqKIkDUdR48bbu_qR6PmqN3LNTBu0DkRyJtgdcFpOfiRlKnmZ6Z-ASitH5xP3xx4jNIFNXXJ1Up-epWCf6AW3YkH97w?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://7l2rva.ch.files.1drv.com/y4mp4naIAyqT8NI5hBC88KpsF-LmzK5JgPF1ulVQyDWzng4GRVLKEewRjWg1Idyli8vBwMMypxD-SbPBk90l1loA7nqYKcEooq5bRVLLX4dszBBmifhbO_2vdFH-SDMF3Zt7SwlvWbA9G6IZb2TkY820tGcKFmBZM1rQ2HdYsWxYhcrcyc3ldL9vuQTE9sx91exY8SU6VimK3R_klh4YUGIrQ?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://7l0smq.ch.files.1drv.com/y4mzifNHkhKvbSgs6F2Bc_iGho0l5B5CgwbX9cEg7JMapQu8vMjkQUeQPfc3duA81kgF438vIyzyil6Dom2862SaPiGJD3uGQoCBiEcCkr5gShnS8aJKZibGG3w0ZPF2eASpzLiH0tn-9Bc3t2K5uKqOIPNAVAKXtmx4qNv8ghp_RmGjxPpjaVBV-8mWj8dFFgnlPUzLnpW_ZDJiHUD2pLW6w?width=2000&height=1500&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://l2drrw.ch.files.1drv.com/y4mi8zkaKtk5E2mfSo7gqSDv_wsh8_yqleYq9KksiHoqsm8k2NybevO6uZFyFfCLEpR0nWgiknmxfjdpz20Xi8UrSuMaCAQ4yxthsZcxR4Drm1FG0vjgqDE_TdIAQ0u9VK7tMpVG12hmXUF6nfpNkzK436DBtxTuKH78Pbl5bIYsIgtNmlsVvGd0Rv50KJSP-Bne-LQNl7nYLz9ntgBTVGGmA?width=2736&height=1824&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://l2ahmq.ch.files.1drv.com/y4mS8lhb6UeUv4Hp1NHtQgEczurjg4lBOSsYTiU-EymGoO3PF1dQixN5kRq5on_wIpT7ErYo3j-pJa74Cy4w7hqZRHLaRjuF4bxeMYKdLHLbexAkCsc9DyS-nu4kYwehCSdwUEVRo5n351PLb_5topQVIDX1o5DjdeGQeOZkUbrLXk-mV_uGbGAh5DifdmEexTec_7PHq9FdT26nKizps5mXA?width=2736&height=1824&cropmode=none" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="https://l2cipq.ch.files.1drv.com/y4mDLL3_cwQHtyQrn14QM-4lzjtJLjpJ7qr2wrjI8xui8yK2wgemJEWd9F5ATknMQ7s0YdAo3GNQf6tXXDfijCZDSa6twvVhya_iZ7MzdNk4bxlsssGt82xjUVW4-5UjrKOOsx86xab2RCvYDPpspakI7Wag2G32VpTCSyWsM_AqKdUG6xnUfWegbVwzEQMkZJ1fG0ZuxMw-A-gG6Z4-Vi_kQ?width=2736&height=1824&cropmode=none" alt="JSOFT">
                            </div>
                            
                        </div>
                        <div class="car-details-info">
                            <h4>VANDUTCH 40 IL GRIGIO</h4>
                            <p>The brand-defining VanDutch 40, our original power boat model, remains as striking and inspiring today as the day it was launched. Frank Mulder’s legendary design combines style with performance to create a boat for all your needs, with ample space to entertain, power to reach speeds of up to 40 knots and luxurious features to ensure your ride is comfortable, including a semi-automatic Bimini top. The queen-size V-cabin with galley station turns this versatile day boat into an overnight cruiser, opening up a world of options to your boating experience.</p>

                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Top Speed</th>
                                                    <td>40kts</td>
                                                    <th>Engine</th>
                                                    <td>480hp</td>
                                                </tr>
                                                <tr>
                                                    <th>Length Overall</th>
                                                    <td>40 feet</td>
                                                    <th>Beam Overall</th>
                                                    <td>11.6 feet</td>
                                                </tr>
                                                <tr>
                                                    <th>Fuel Capacity</th>
                                                    <td>240gal</td>
                                                    <th>Water Capacity</th>
                                                    <td>40gl</td>
                                                </tr>
                                                <tr>
                                                    <th>Draft</th>
                                                    <td>2.6 feet</td>
                                                    <th>Displacement</th>
                                                    <td>16,535lb</td>
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
                        <div class="single-sidebar">
                            <h3>Additional Information</h3>

                            <div class="sidebar-body">
                                <p>To match our world-class design, VanDutch offers the high-quality luxury and comfort that you would expect from a boat created to enjoy the French Riviera. All our boat models include on-board accommodation, from a double berth on the VanDutch 30 to a capacity of 10 guests on the VanDutch 55. Each boat is provided as standard with a full suite of the latest systems for guest convenience, including air conditioning, heating, audio entertainment, microwave and refrigerator. There is a fully equipped bathroom with hot-water shower and WC, and the high-quality Corian interior panels are both durable and attractive.</p>
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