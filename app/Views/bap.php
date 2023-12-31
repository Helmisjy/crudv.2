<?php $this->extend('layout/template') ?>



<?php $this->section('content') ?>
    
   
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="max-height: 900px;">
                    <img class="w-100" src="<?= base_url() ?>img/content-8.jpg" alt="Image">
                    <div class="carousel-caption owl-carousel d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <!-- <h6 class="text-white text-uppercase mb-3 animated slideInDown">// BAP Construction //</h6> -->
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Ensuring the Safety, Building the Future</h1>
                                    <h3 class="text-white mb-4 pb-3 animated slideInDown">Your one stop equipment rental solution</h3>
                                    <a href="/equipment" class="btn btn-primary rounded-pill mt-3 py-3 px-5 animated slideInDown">Equipment List<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>`
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <!-- <img class="img-fluid" src="img/bg_2.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="max-height: 900px;">
                    <img class="w-100" src="<?= base_url() ?>img/content-10.jpg" alt="Image">
                    <div class="carousel-caption owl-carousel d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <!-- <h6 class="text-white text-uppercase mb-3 animated slideInDown">// BAP Construction //</h6> -->
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Memastikan Keselamatan, Membangun Masa Depan</h1>
                                    <h3 class="text-white mb-4 pb-3 animated slideInDown">BAP provide the most safest rental service in Indonesia.</h3>
                                    <a href="/katalog" class="btn btn-primary rounded-pill mt-3 py-3 px-5 animated slideInDown">Equipment List<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <!-- <img class="img-fluid" src="img/safety.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Dry Rental</h5>
                            <p>Equipment rental service without operator for more flexible usage and needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Wet Rental</h5>
                            <p>Equipment rental service including our certified and highly professional operator</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">All in one rental solution</h5>
                            <p>e provide you comprehensive rental service from equipment mobilization, on-site-ready mechanic for service, and digital data recording for equipment monitoring</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- Digitize Start -->
    <div class="container-fluid bg-white digitize my-5 wow fadeInup" data-wow-delay="0.2s">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center wow fadeInUp text-center" data-wow-delay="0.3s">
                        <!-- <h1 class="text-white mb-1 mt-3 ">Digital Timesheet</h1> -->
                        <img src="img/app-ts-4.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-middle wow slideInRight" data-wow-delay="0.6s">
                    <div class="py-5">
                        <h1 class="text-black mb-3"><span class="text-primary">BAP </span>Digital Timesheet</h1>
                        <p class="text-black mb-3">A simple way to monitor your rental equipment. Save your time. Ease your work.</p>
                        <!-- <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>Save your time, ease your work</p> -->
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>Organized documentation in one app</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>Monitor and approve anywhere and anytime on your mobile device</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>Complete timesheet with approval record</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>On-demand timesheet summary report</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>User-friendly interface</p>
                        <div class="d-flex col-lg-3 px-1">
                            <img class="img-fluid h-100 mb-5" src="img/playstore.png" alt="">
                            <!-- <img class="img-fluid h-100" src="img/appstore.png" alt=""> -->
                        </div>
                        <!-- <p class="text-black mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, vitae ut voluptates ipsam labore mollitia.</p> -->
                        <a href="https://play.google.com/store/apps/details?id=id.co.bapconstruction.timesheet.operator&hl=en" class="btn-primary mb-0 mt-3 py-3 px-4 rounded-pill">Download Now <i class="fa fa-arrow-down mx-1"></i></a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Digitize End -->

    <!-- Weeo Start -->
    <div class="container-fluid bg-light digitize my-5 wow fadeInup" data-wow-delay="0.2s">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6 align-middle wow slideInLeft" data-wow-delay="0.6s">
                    <div class="py-5">
                        <h1 class="text-black mb-3"><span class="text-primary">BAP </span>Telematic Technology</h1>
                        <p class="text-black mb-3">Monitor equipment location and on/off time realtime anywhere</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>Remotely Monitor equipment Real-Time engine hours & location from laptop or mobile device</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 "></i>Comprehensive information about operator,safety,mechanic,and other data in One-Platform Interface</p>
                        <p class="text-black"><i class="fa fa-dot-circle text-success me-3 mb-3"></i>To keep equipment good condition, effective scheduling based on engine hours</p>
                        <!-- <p class="text-black mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, vitae ut voluptates ipsam labore mollitia.</p> -->
                        <!-- <div class="d-flex col-lg-5 mb-5">
                            <img class="img-fluid h-100" src="img/google-play-and-apple-app-store-logos-22.png" alt="" style="max-height: 190px;">
                        </div> -->
                        <!-- <a href="https://play.google.com/store/apps/details?id=id.co.bapconstruction.timesheet.operator&hl=en" class="btn-primary mb-0 mt-3 py-3 px-4 rounded-pill">Download Now <i class="fa fa-arrow-down mx-1"></i></a> -->
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center wow fadeInUp text-center" data-wow-delay="0.3s">
                        <!-- <h1 class="text-white mb-1 mt-3 ">Digital Timesheet</h1> -->
                        <img src="img/weooo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Weeo End -->



     


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4 mt-4" style="min-height: 300px;">
                <!-- <img src="img/smallbap.png" alt=""> -->
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url() ?>img/chart_bap2.png" style="object-fit: cover;" alt="">
                        <!-- <div class="chart-pie mb-3">
                            <canvas id="myPieChart"></canvas>
                        </div> -->
                        <!-- <div class="row g-2 px-5 mt-3 pt-2 align-items-center "> -->
                                        <!-- <div class="col-lg-6">
                                            <div class="card-body" style="width: 12rem;">
                                                <img class="card-img-top img-fluid" src="img/mitsubishi.png" alt="Card image cap" style="height:35px;">
                                                <div class="card-body">
                                                <div class="progress mb-2">
                                                    <div class="progress-bar" role="progressbar" style="background: #1F900D; width: 49%;"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <p>49%</p>
                                                    </div>
                                                    <p class="card-text">Have 50% of BAP Corporation</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body responsive" style="width: 12rem;">
                                                <img class="card-img-top img-fluid" src="img/Nikken.png" alt="Card image cap" style="height:35px;">
                                                <div class="card-body">
                                                    <div class="progress mb-2">
                                                        <div class="progress-bar" role="progressbar" style="background:#28BB11; width: 30%;"
                                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <p>30%</p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body" style="width: 12rem;">
                                                <img class="card-img-top img-fluid" src="img/kawan_lama.png" alt="Card image cap" style="height:45px;">
                                                <div class="card-body">
                                                    <div class="progress mb-2">
                                                        <div class="progress-bar" role="progressbar" style="background:#5BEE44; width: 20%"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <p>20%</p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body" style="width: 12rem;">
                                                <img class="card-img-top img-fluid" src="img/PT. Cakrawala Inti Nusantara.png" alt="Card image cap" style="height:45px;">
                                                <div class="card-body">
                                                    <div class="progress mb-2">
                                                        <div class="progress-bar" role="progressbar" style="background:#ADF7A1; width: 5%"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <p>1%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           -->
                                    <!-- </div> -->
                        <!-- <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-dark mb-0">10 <span class="fs-4">Years</span></h1>
                            <h4 class="text-dark">Experience</h4>
                        </div> -->
                                    <!-- Card Body -->
                                <!-- <img class="position-absolute img-fluid justify-content-center" src="img/bapsmall.jpg" alt="">
                                <div class="container py-5 my-5 position-absolute">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div> -->
                                    <!-- <div class="row small">
                                        <span class="mt-2">
                                            <i class="fas fa-circle text-danger"></i> PT. Mitsubishi Corporation
                                        </span>
                                        <span class="mt-2">
                                            <i class="fas fa-circle text-success"></i> PT. NIKKEN
                                        </span>
                                        <span class="mt-2">
                                            <i class="fas fa-circle text-info"></i> PT. Kawan Lama
                                        </span>
                                        <span class="mt-2">
                                            <i class="fas fa-circle text-success"></i> PT. Cakrawala Inti Nusantara
                                        </span>
                                    </div> -->
                                    <!-- <div class="card-body shadow mb-4 mt-3">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Our Shareholder</h6>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="small font-weight-bold">PT. Mitshubishi Corporation <span
                                                    class="float-right">(49%)</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="color:#1F900D; width: 49%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">PT. NIKKEN <span
                                                    class="float-right">30%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="color:#28BB11; width: 30%"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">PT. Kawan Lama <span
                                                    class="float-right">20%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="color:#5BEE44; width: 20%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">PT. Cakrawala Inti Nusantara <span
                                                    class="float-right">1%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="color:#ADF7A1; width: 5%"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                <!-- </div>      -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <h6 class="text-primary text-uppercase">// PT.Berlian Amal Perkasa //</h6> -->
                    <h1 class="mb-4"><span class="text-primary">Who we are</span></h1>
                    <h6 class="mb-4"><span class="text-primary">Your partner for a safe and productive work site.</span></h6>
                    <p class="mb-4">PT Berlian Amal Perkasa (“BAP”) is one of the leading equipment rental companies in Indonesia since 2014.We provide more than just equipment, We offer total solutions for your equipment needs by providing well
experienced operators, onsite support(technical and safety) and efficient digital equipment monitoring system. We are there for
every part of industries, wherever clients need exist.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-0" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="pt-2">Mitsubishi Corporation</h6>
                                    <!-- <span class="small">Consolidated Subsidiaries and Affiliates: 1,525</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-0" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="pt-2">Nikken Corporation</h6>
                                    <!-- <span class="small">Core Services: Rental of civil engineering and construction related products</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-0" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="pt-2">PT. Kawan Lama Sejahtera</h6>
                                    <!-- <span class="small">Brand : Kawan Lama, Krisbow, Ace Hardware, Informa</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-0" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">04</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="pt-2">PT Cakrawala Inti Nusantara</h6>
                                    <!-- <span class="small">Core : Construction Consulting & Planning - Civil Construction Specialist - Green House System</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/service" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Our Project Start -->

    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="text-center text-primary">// Our Project //</h6>
                <h1 class="mb-5">Latest Project Overview</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 fadeIn" data-wow-delay="0.3s">
                    <div class="Project ">
                        <div class="imgBox position-relative shadow overflow-hidden">
                            <img src="img/news_1.jpg" class="img-fluid text-center">
                            <div class="team-overlay position-absolute start-0 top-0 mt-3 w-100 h-100">
                                <small class="text-light text-center"></small>
                            </div>
                        </div>
                        <div class="bg-white text-center p-4">
                            <h5 class="fw-bold mb-0">Load Placement</h5>
                            <small class="text-grey px-2"> Last updated, 28 May 2023</small>
                            <small>Precise placement: Carefully position the load at its intended destination, taking into account any height, alignment, or orientation requirements.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Project">
                        <div class="imgBox position-relative shadow overflow-hidden">
                            <img src="img/Type of Work/_DSC5642.JPG" alt="" class="img-fluid text-center">
                            <div class="team-overlay position-absolute start-0 top-0 mt-3 w-100 h-100">
                                <small class="text-light text-center"></small>
                            </div>
                        </div>
                        <div class="bg-white text-center p-4">
                            <h5 class="fw-bold mb-0">Lifting Operation</h5>
                            <small class="text-grey px-2"> Last updated, 15 June 2023</small>
                            <small>Lift execution: Lift the load smoothly and steadily, following the prescribed procedures for the specific equipment being used.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Project">
                        <div class="imgBox position-relative shadow overflow-hidden">
                            <img src="img/Type of Work/_DSC5559.JPG" alt="" class="img-fluid text-center">
                            <div class="team-overlay position-absolute start-0 top-0 mt-3 w-100 h-100">
                                <small class="text-light text-center"></small>
                            </div>
                        </div>
                        <div class="bg-white text-center p-4">
                            <h5 class="fw-bold mb-0">Equipment Setup</h5>
                            <small class="text-grey px-2"> Last updated, 09 July 2023</small>
                            <small>Positioning: Properly position the lifting equipment, ensuring it's stable and on level ground. If using a crane, make sure it's properly anchored.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Our Project End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <div class="col d-flex justify-content-center">
                        <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                        <h2 class="text-white mb-2">+</h2>
                    </div>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <div class="co d-flex justify-content-center">
                        <h2 class="text-white mb-2" data-toggle="counter-up">497</h2>
                        <h2 class="text-white mb-2">+</h2>
                    </div>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <div class="col d-flex justify-content-center">
                        <h2 class="text-white mb-2" data-toggle="counter-up">1101</h2>
                        <h2 class="text-white mb-2">+</h2>
                    </div>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-tractor fa-2x text-white mb-3"></i>
                    <div class="col d-flex justify-content-center">
                        <h2 class="text-white mb-2" data-toggle="counter-up">2130</h2>
                        <h2 class="text-white mb-2">+</h2>
                    </div>
                    <p class="text-white mb-0">Complete Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h6 class="text-primary text-uppercase">// Our Services //</h6> -->
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                    <!-- <div class="btn-group">
                        <button class="btn btn-secondary btn-lg" type="button">
                            Equipment Rental
                        </button>
                        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <button class="dropdown-items nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                <i class="fa fa-cog fa-2x me-3"></i>
                                <h4 class="m-0">Maintenance</h4>
                            </button>
                            <button class="dropdown-items nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                <i class="fa fa-truck fa-2x me-3"></i>
                                <h4 class="m-0">Mobilization</h4>
                            </button>
                            <button class="dropdown-items nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                                <i class="fa fa-certificate fa-2x me-3"></i>
                                <h4 class="m-0">Certified Operator</h4>
                            </button>
                        </div>
                    </div> -->
                        <div class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <div class="d-flex fa fa-tractor fa-2x me-3 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                <h4 class="m-0 me-3 px-3">Equipment Rental</h4>
                            </div>
                            <button type="button" class="bg-primary d-flex position-relative fa fa-chevron-down text-white" onclick="myFunction()"></button>
                        </div>
                        <div class="nav nav-pills x position-relative" id="Mydiv">
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                <i class="fa fa-cog fa-2x me-3"></i>
                                <h4 class="m-0">Maintenance</h4>
                            </button>
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                <i class="fa fa-truck fa-2x me-3"></i>
                                <h4 class="m-0">Mobilization</h4>
                            </button>
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                                <i class="fa fa-certificate fa-2x me-3"></i>
                                <h4 class="m-0">Certified Operator</h4>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/cover-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Equipment Rental</h3>
                                    <p class="mb-4">Equipment rental refers to the practice of temporarily leasing or lending out machinery, vehicles, or other items to customer. This allows customer to access specialized equipment for a specific period without the initial expense of purchasing, maintenance and storage cost.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Good Equipment Condition</p>
                                    <p><i class="fa fa-check text-success me-3"></i>A Large Selection of Equipment Types Available</p>
                                    <a href="/contact" class="btn btn-primary py-3 px-5 mt-3">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/mechanic.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Maintenance</h3>
                                    <p class="mb-4">Maintain performance of our equipment with our precision maintenance service to minimize machine down time.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Preventive maintenance</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Qualified Mechanic</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quick response</p>
                                    <!-- <p><i class="fa fa-check text-success me-3"></i>Efficiency Enhancement</p> -->
                                    <a href="/contact" class="btn btn-primary py-3 px-5 mt-3">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/mob.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Equipment Delivery</h3>
                                    <p class="mb-4">Efficient Transport Solutions: Streamline your deliveries with our advanced delivery equipment, ensuring efficient and timely transportation of your goods.</p>
                                    <!-- <p><i class="fa fa-check text-success me-3"></i>Seamless Distribution</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Precision Handling</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Enhanced Logistics</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quick and Safe Delivery</p> -->
                                    <a href="/contact" class="btn btn-primary py-3 px-5 mt-3">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/content-6.JPG"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Certified Operator</h3>
                                    <p class="mb-4">Professionals who have undergone intensive training and are certified to operate equipment with skill and proficiency.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Skill Certified</p>
                                    <a href="/contact" class="btn btn-primary py-3 px-5 mt-3">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified Equipment Rent Service Provider</h1>
                        <p class="text-white mb-0">PT Berlian Amal Perkasa has almost 10 years of experience with more than 200 satisfied clients, handled more than 300 projects and provided more than 300-skilled operator. With our expertise in construction equipment rental. We can guarantee you a wholesome service that puts you at ease.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row gx-5 m-5">
                        <img class="img-fluid text-center mb-5" src="/img/brochure.png" alt="">
                        <div class="bg-primary text-center py-3">
                            <a href="/pdf/Introduction of BAP in Eng.pdf" class="text-white px-3" download="">Download Catalogue</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Rental</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Rental</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Rent Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Equipment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Equipment</h1>
            </div>
            <div class="row g-4">
            <?php foreach ($equipment as $e) : ?>
                    <div class="card-body m-3" style="width: 18rem;">
                        <div class="panel-body bg-white m-2 p-2" style="text-align: center; overflow:hidden; padding:0; height:220px">

                            <img style="" class="card-img-top" src="img/<?= $e['sampul']; ?>" alt="Card image cap">
                        </div>
                        <div class="card-body bg-light text-center" >
                            <h5 class="card-title"><a class="text-dark" href="/katalog/<?= $e['slug']; ?>"><?= $e['nama_alat']; ?></a></h5>
                            <!-- <p class="card-text mb-1">Brand : <?= $e['brand']; ?></p> -->
                            <!-- <p class="card-text">Capacity : <?= $e['capacity']; ?></p> -->
                            <!-- <a href="/katalog/<?= $e['slug']; ?>" class=" shadow btn btn-primary" style="border-radius: 10px;">Detail</a> -->
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 50px; padding-top: 57px;">
                            <img class="img-fluid" src="img/Complete Equipment/TELEHANDLER JCB 4T 7M 541-70.png" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Telehandler</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 50px;">
                            <img class="img-fluid" src="img/Complete Equipment/EXCAVATOR/CAT 20T 320 GC.jpeg" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Excavator</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 50px;">
                            <img class="img-fluid" src="img/Complete Equipment/SCISSOR LIFT HAULOTTE 12M COMPACT 14.jpeg" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Scissor Lift</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 50px; padding-top:13px;">
                            <img class="img-fluid" src="img/Complete Equipment/ROUGH TERRAIN CRANE/KATO 50T SR-500L.jpg" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Rough Terrain Crane</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 82px;">
                            <img class="img-fluid" src="img/Complete Equipment/All Terrain Crane/LIEBHERR AC 200T LTM-1200-5.1.png" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Crawler Crane</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 26px;">
                            <img class="img-fluid" src="img/Complete Equipment/TMC TADANO 15T 8M 6x4 TM-ZT1505HRS.png" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Truck Mounted Crane</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 40px;">
                            <img class="img-fluid" src="img/Complete Equipment/FORKLIFT TCM 5T FD50T9 VM400 LF122 TJW TJR 2SV.jpg" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Forklift</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="padding-bottom: 58px; padding-top:25px;">
                            <img class="img-fluid" src="img/Complete Equipment/BACKHOE LOADER JCB 1.1m3 0.2m3 3DX.png" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Backhoe Loader</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height: 252px; width:auto;">
                            <img class="img-fluid" src="/img/Complete Equipment/BOOM LIFT/ZOOMLION 26M ZT26J.jpg" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">Boom Lift ZT26J</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height: 250px; width:auto;">
                            <img class="img-fluid" src="/img/Complete Equipment/All Terrain Crane/TADANO AC 160T ATF160G-5_02.png" alt="" >
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <div class="btn rounded-pill download">
                                    <a class="text-white p-2 mx-1" href="/pdf/68042-crawler.pdf" download="">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-2">All Terrain Crane</h5>
                        </div>
                    </div>
                </div>  -->
            </div>
        </div>
    </div>
    <!-- Equipment End -->

   


    <!-- Our Partner Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <!-- <h6 class="text-primary text-uppercase">// Shareholder //</h6> -->
                <h1 class="mb-5">Shareholder</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg p-2 mx-auto mb-3" src="img/mitsubishi.png" style="max-width: auto; height: 70px;">
                    <h5 class="mb-1"> <a href="https://www.mitsubishicorp.com/jp/en/index.html" class="text-secondary" target="_blank">Mitsubishi Corporation</a></h5>
                    <div class="mt-2">
                        <a class="mt-2" href="https://www.mitsubishicorp.com/jp/en/index.html" target="__blank">Details</a>
                    </div>
                    <!-- <p>Multinational Company</p> -->
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <!-- <div class="testimonial-item text-center">
                    <img class=" p-2 mx-auto mb-3" src="img/logo gta.png" style="width: auto; height: 70px;">
                    <h5 class="mb-0">PT.Guna Teguh Abadi</h5>
                    <p>Construction</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div> -->
                <div class="testimonial-item text-center">
                    <img class=" p-2 mx-auto mb-3" src="img/Nikken.png" style="width: auto; height: 70px;">
                    <h5 class="mb-0"><a href="https://www.rental.co.jp/english/company/" class="text-secondary" target="_blank">Nikken Corporation</a></h5>
                    <div class="mt-2">
                        <a class="mt-2" href="https://www.rental.co.jp/english/company/" target="__black">Details</a>
                    </div>
                    <!-- <p>Contributing to a recycling-based society throught rental</p> -->
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class=" p-2 mx-auto mb-3" src="img/kawan_lama.png" style="width: auto; height: 70px;">
                    <h5 class="mb-1"><a href="https://www.kawanlama.com/" class="text-secondary" target="_blank">PT.Kawan Lama</a></h5>
                    <div class="mt-2">
                        <a class="mt-2" href="https://www.kawanlama.com/" target="blank">Details</a>
                    </div>
                    <!-- <p>Commercial & Industrial Suply</p> -->
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class=" p-2 mx-auto mb-3" src="img/PT. Cakrawala Inti Nusantara.png" style="width: auto; height: 70px;">
                    <h5 class="mb-1"><a href="https://cakrawalaintinusantara.co.id/" class="text-secondary" target="_blank">PT.Cakrawala Inti Nusantara</a></h5>
                    <div class="mt-2">
                        <a class="mt-2" href="https://cakrawalaintinusantara.co.id/" target="__blank">Details</a>
                    </div>
                    <!-- <p>General Contractor,Enginering & Trading</p> -->
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Partner End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg rounded-pill btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<?= $this->endSection(); ?>