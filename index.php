<?php include 'header.php'; ?>


<!-- Main Content Area -->
<div class="banner" style="background-image: url('http://localhost/invent/assets/images/home/home-banner.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-inner">
                    <h1>From concept to code <strong>we build apps</strong> that people love to use</h1>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel
                        of finished, typeset text.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<section class="ideas-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="title-wrap text-center">
                    <h2>Powering your ideas into <strong>digital reality</strong></h2>
                </div>
            </div>
        </div>
        <div class="ideas-section-inner text-white"
            style="background-image: url('http://localhost/invent/assets/images/home/ideas-section.png');">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Innovate, Build Impact With Our Experts.</h3>
                    <p>Partner with our team to transform your idea into a market-ready product. From ideation to
                        design, development, and launch — we build for impact.</p>
                    <a href="#" class="btn btn-primary">Let’s Build Your Idea</a>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php
// Services Data Array
$services = [
    [
        'icon' => 'assets/images/home/s1.png',
        'title' => 'Mobile App Development',
        'description' => 'This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text',
    ],
    [
        'icon' => 'assets/images/home/s2.png',
        'title' => 'UI/UX Designing',
        'description' => 'This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text',
    ],
    [
        'icon' => 'assets/images/home/s3.png',
        'title' => 'Ecommerce Development ',
        'description' => 'This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text',
    ],
    [
        'icon' => 'assets/images/home/s4.png',
        'title' => 'Staff Augmentation',
        'description' => 'This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text',
    ],
    [
        'icon' => 'assets/images/home/s5.png',
        'title' => 'Software Development',
        'description' => 'This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text',
    ],
    [
        'icon' => 'assets/images/home/s6.png',
        'title' => 'Website Development',
        'description' => 'This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text',
    ]
];
?>

<section class="services">
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Elevating Your <br>Brand With <strong>Exceptional Design.</strong></h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
        <div class="service-outer">
            <div class="row gy-4">
                <?php foreach ($services as $service): ?>
                    <div class="col-lg-4 col-12">
                        <div class="service-card edge edge-base edge-primary">
                            <div class="title">
                                <div class="icon">
                                    <img src="<?php echo htmlspecialchars($service['icon']); ?>"
                                        alt="<?php echo htmlspecialchars($service['title']); ?>">
                                </div>
                                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                            </div>
                            <p><?php echo htmlspecialchars($service['description']); ?></p>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="service-bottom">
            <div class="image"><img src="assets/images/home/service-bottom.png" alt="Service Bottom Image"></div>
        </div>
    </div>
</section>

<section class="vission">
    <div class="container-fluid">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Turning Vision <br>into <strong>Reality.</strong></h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
        <div class="vision-outer">
            <div class="swiper vision-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="vision-card">
                            <div class="icon edge edge-grey edge-base">
                                <img src="assets/images/home/vission.png" alt="Musically">
                            </div>
                            <h3>AR-Powered Golf Training App for Improving Skills</h3>
                            <p>Tamreeni is one of the most successful, rising star apps in the UAE, developed by
                                TekRevol
                                with a rule-based algorithm for personalized fitness plans, achieving over 3 million
                                downloads, a significant 40% increase in user engagement, and a massive 60% increase in
                                the
                                retention rate.</p>
                            <a href="#" class="btn btn-primary">View Case Study</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="vision-card">
                            <div class="icon edge edge-grey edge-base">
                                <img src="assets/images/home/vission.png" alt="Musically">
                            </div>
                            <h3>AR-Powered Golf Training App for Improving Skills</h3>
                            <p>Tamreeni is one of the most successful, rising star apps in the UAE, developed by
                                TekRevol
                                with a rule-based algorithm for personalized fitness plans, achieving over 3 million
                                downloads, a significant 40% increase in user engagement, and a massive 60% increase in
                                the
                                retention rate.</p>
                            <a href="#" class="btn btn-primary">View Case Study</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="vision-card">
                            <div class="icon edge edge-grey edge-base">
                                <img src="assets/images/home/vission.png" alt="Musically">
                            </div>
                            <h3>AR-Powered Golf Training App for Improving Skills</h3>
                            <p>Tamreeni is one of the most successful, rising star apps in the UAE, developed by
                                TekRevol
                                with a rule-based algorithm for personalized fitness plans, achieving over 3 million
                                downloads, a significant 40% increase in user engagement, and a massive 60% increase in
                                the
                                retention rate.</p>
                            <a href="#" class="btn btn-primary">View Case Study</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="vision-card">
                            <div class="icon edge edge-grey edge-base">
                                <img src="assets/images/home/vission.png" alt="Musically">
                            </div>
                            <h3>AR-Powered Golf Training App for Improving Skills</h3>
                            <p>Tamreeni is one of the most successful, rising star apps in the UAE, developed by
                                TekRevol
                                with a rule-based algorithm for personalized fitness plans, achieving over 3 million
                                downloads, a significant 40% increase in user engagement, and a massive 60% increase in
                                the
                                retention rate.</p>
                            <a href="#" class="btn btn-primary">View Case Study</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="vision-card">
                            <div class="icon edge edge-grey edge-base">
                                <img src="assets/images/home/vission.png" alt="Musically">
                            </div>
                            <h3>AR-Powered Golf Training App for Improving Skills</h3>
                            <p>Tamreeni is one of the most successful, rising star apps in the UAE, developed by
                                TekRevol
                                with a rule-based algorithm for personalized fitness plans, achieving over 3 million
                                downloads, a significant 40% increase in user engagement, and a massive 60% increase in
                                the
                                retention rate.</p>
                            <a href="#" class="btn btn-primary">View Case Study</a>
                        </div>
                    </div>



                </div>

            </div>
            <div class="vision-btn-wrap">
                <div class="vision-button-next">
                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.33398 15.5L8.33398 8.5L1.33398 1.5" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="vision-button-prev">
                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66602 15.5L1.66602 8.5L8.66602 1.5" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>


<section class="design-section">
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Elevating Your Brand With <strong>Exceptional Design.</strong></h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
        <div class="design-outer">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="design-left edge edge-base edge-primary">
                        <img src="assets/images/sample-2.png" alt="Design Image 1" class="design-img">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <ul class="nav nav-tabs design-tab" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">iOS App Developmet</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Android App Development</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Game App Development</button>
                        </li>

                    </ul>
                    <div class="tab-content design-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="content">
                                <h3>iOS App Development</h3>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate the look and feel of finished, typeset text. </p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="content">
                                <h3>Android App Development</h3>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate the look and feel of finished, typeset text. </p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">
                            <div class="content">
                                <h3>Game App Development</h3>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate the look and feel of finished, typeset text. </p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                        <img src="assets/images/shade-tabs.png" class="design-shade" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="modal-section">
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Our Engagement <strong>Model</strong></h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
        <div class="modal-outer">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="modal-card">
                        <div class="icon edge edge-base">
                            <img src="assets/images/sample.png" alt="">
                        </div>
                        <h3>Project Based Development</h3>
                        <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate
                            the look and feel of finished, typeset text. Only for show. He who searches for meaning here
                            will be sorely disappointed. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="modal-card">
                        <div class="icon">
                            <img src="assets/images/home/m1.png" alt="">
                        </div>
                        <h3>Project Based Development</h3>
                        <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate
                            the look and feel of finished, typeset text. Only for show. He who searches for meaning here
                            will be sorely disappointed. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="modal-card">
                        <div class="icon">
                            <img src="assets/images/home/m1.png" alt="">
                        </div>
                        <h3>Project Based Development</h3>
                        <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate
                            the look and feel of finished, typeset text. Only for show. He who searches for meaning here
                            will be sorely disappointed. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-bottom text-center">
            <a href="#" class="btn btn-primary">Book a Free Consultation</a>
        </div>
    </div>
</section>

<section class="success-section">
    <div class="container"><span class="border-top"></span></div>
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>The Numbers That Define Our <strong>Success</strong></h2>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="success-card-wrap">
                        <div class="success-card edge edge-base edge-grey edge-primary">
                            <div class="left">
                                <span class="number">05</span>
                                <span class="content">Experienced Years</span>
                            </div>
                        </div>
                        <div class="success-card edge edge-base edge-grey edge-primary">
                            <div class="left">
                                <span class="number">30+</span>
                                <span class="content">Specialized Experts</span>
                            </div>
                        </div>
                        <div class="success-card edge edge-base edge-grey edge-primary">
                            <div class="left">
                                <span class="number">5000+</span>
                                <span class="content">Satisfied Customers</span>
                            </div>
                            <div class="right">
                                <img src="assets/images/home/ss.png" alt="Satisfied Customers">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awards">
    <img src="assets/images/shade-awards-1.png" class="shade-awards shade-awards-1" alt="">
    <img src="assets/images/shade-awards-2.png" class="shade-awards shade-awards-2" alt="">
    <div class="container">
        <div class="title-wrap text-center text-white">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Achievements That <strong>Define</strong> Us</h2>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
        <div class="award-outer">
            <div class="swiper award-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a2.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a3.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="icon">
                                <img src="assets/images/a1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>Top Rated</h3>
                                <p>Top B2B Companies Unite States 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="awards-btn-wrap">
                <div class="awards-button-next">

                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.750082 6.66179H9.51865L6.83485 9.88531C6.77271 9.96007 6.72591 10.0463 6.69711 10.1392C6.66831 10.232 6.65808 10.3297 6.667 10.4265C6.68503 10.622 6.77998 10.8023 6.93096 10.9278C7.08195 11.0533 7.2766 11.1137 7.4721 11.0956C7.6676 11.0776 7.84794 10.9827 7.97343 10.8317L11.6701 6.39563C11.695 6.36034 11.7172 6.32328 11.7367 6.28473C11.7367 6.24776 11.7736 6.22558 11.7884 6.18861C11.8219 6.10384 11.8395 6.0136 11.8402 5.92245C11.8395 5.8313 11.8219 5.74106 11.7884 5.65629C11.7884 5.61932 11.7515 5.59714 11.7367 5.56017C11.7172 5.52163 11.695 5.48456 11.6701 5.44927L7.97343 1.01323C7.90392 0.929775 7.81687 0.862658 7.71847 0.816656C7.62008 0.770653 7.51276 0.746895 7.40414 0.747072C7.23139 0.746734 7.06398 0.806898 6.93096 0.91712C6.8561 0.979187 6.79421 1.05541 6.74886 1.14143C6.7035 1.22745 6.67555 1.32158 6.66662 1.41841C6.65769 1.51525 6.66796 1.6129 6.69683 1.70576C6.72569 1.79862 6.77259 1.88488 6.83485 1.95959L9.51865 5.18311H0.750082C0.553997 5.18311 0.365943 5.26101 0.22729 5.39966C0.0886368 5.53831 0.0107422 5.72637 0.0107422 5.92245C0.0107422 6.11854 0.0886368 6.30659 0.22729 6.44524C0.365943 6.5839 0.553997 6.66179 0.750082 6.66179Z"
                            fill="white" />
                    </svg>

                </div>
                <div class="awards-button-prev">

                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.2499 6.66179H2.48135L5.16515 9.88531C5.22729 9.96007 5.27409 10.0463 5.30289 10.1392C5.33169 10.232 5.34192 10.3297 5.333 10.4265C5.31497 10.622 5.22002 10.8023 5.06904 10.9278C4.91805 11.0533 4.7234 11.1137 4.5279 11.0956C4.3324 11.0776 4.15206 10.9827 4.02657 10.8317L0.329867 6.39563C0.304996 6.36034 0.282756 6.32328 0.263327 6.28473C0.263327 6.24776 0.22636 6.22558 0.211574 6.18861C0.178061 6.10384 0.160516 6.0136 0.15982 5.92245C0.160516 5.8313 0.178061 5.74106 0.211574 5.65629C0.211574 5.61932 0.24854 5.59714 0.263327 5.56017C0.282756 5.52163 0.304996 5.48456 0.329867 5.44927L4.02657 1.01323C4.09608 0.929775 4.18313 0.862658 4.28153 0.816656C4.37992 0.770653 4.48724 0.746895 4.59586 0.747072C4.76861 0.746734 4.93602 0.806898 5.06904 0.91712C5.1439 0.979187 5.20579 1.05541 5.25114 1.14143C5.2965 1.22745 5.32445 1.32158 5.33338 1.41841C5.34231 1.51525 5.33204 1.6129 5.30317 1.70576C5.27431 1.79862 5.22741 1.88488 5.16515 1.95959L2.48135 5.18311H11.2499C11.446 5.18311 11.6341 5.26101 11.7727 5.39966C11.9114 5.53831 11.9893 5.72637 11.9893 5.92245C11.9893 6.11854 11.9114 6.30659 11.7727 6.44524C11.6341 6.5839 11.446 6.66179 11.2499 6.66179Z"
                            fill="white" />
                    </svg>

                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="industry">
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Transforming Every <strong>Industry</strong></h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="industry-outer">
            <div class="swiper-container industry-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ind-card">
                            <img src="assets/images/i1.png" class="ind-shade ind-shade-1" alt="">
                            <img src="assets/images/i2.png" class="ind-shade ind-shade-2" alt="">
                            <div class="icon">
                                <img src="assets/images/sample.png" class="img-fluid" alt="" />
                            </div>
                            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                demonstrate the look and feel of finished, typeset text. Only for show. He who searches
                                for meaning here will be sorely disappointed.</p>
                            <a href="#" class="btn btn-white">Health care</a>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

        <div class="draggable-wrap">
            <div class="draggable-control">
                <!-- <i class="fas fa-chevron-left arrow-left"></i> -->
                <div class="draggable-handle">Drag</div>
                <!-- <i class="fas fa-chevron-right arrow-right"></i> -->
            </div>
        </div>
    </div>


</section>

<!-- Swiper with image placeholders -->

<hr>
<!-- Draggable Control -->

<section class="clients-section">
    <div class="container">
        <div class="title-wrap text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <h2>Hear What Our <strong>Clients</strong> Say About Invent</h2>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show.</p>
                </div>
            </div>
        </div>
        <div class="clients-outer">
            <div class="swiper clients-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="clients-card edge edge-base edge-grey edge-primary">
                            <div class="icon">
                                <img src="assets/images/home/client1.png" alt="Client 1">
                            </div>
                            <div class="content">
                                <img src="assets/images/home/quote.png" alt="">
                                <p>“This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate
                                    the look and feel of finished, typeset text. Only for show.”</p>
                                <span>Emiley Doe</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="clients-card edge edge-base edge-grey edge-primary">
                            <div class="icon">
                                <img src="assets/images/home/client1.png" alt="Client 1">
                            </div>
                            <div class="content">
                                <img src="assets/images/home/quote.png" alt="">
                                <p>“This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate
                                    the look and feel of finished, typeset text. Only for show.”</p>
                                <span>Emiley Doe</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="clients-card edge edge-base edge-grey edge-primary">
                            <div class="icon">
                                <img src="assets/images/sample.png" alt="Client 1">
                            </div>
                            <div class="content">
                                <img src="assets/images/home/quote.png" alt="">
                                <p>“This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate
                                    the look and feel of finished, typeset text. Only for show.”</p>
                                <span>Emiley Doe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vision-btn-wrap justify-content-center">
            <div class="clients-button-next">
                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.33398 15.5L8.33398 8.5L1.33398 1.5" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="clients-button-prev">
                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.66602 15.5L1.66602 8.5L8.66602 1.5" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

    </div>
</section>
<hr>
<section class="article-section">
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Latest <strong>Articles</strong> & Industry <strong>Insights</strong></h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed.</p>
                </div>
            </div>
        </div>
        <div class="article-outer">
            <div class="row gy-4">
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/sample.png"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <a href="#">
                                <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            </a>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/sample.png"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <a href="#">
                                <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            </a>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/sample.png"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <a href="#">
                                <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            </a>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/sample.png"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <a href="#">
                                <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            </a>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/sample.png"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <a href="#">
                                <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            </a>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/sample.png"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <a href="#">
                                <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            </a>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<hr>


<?php include 'footer.php'; ?>