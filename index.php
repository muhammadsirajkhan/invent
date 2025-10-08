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
                    <h2>Turning Vision into <strong>Reality.</strong></h2>
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
<path d="M1.33398 15.5L8.33398 8.5L1.33398 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>
                <div class="vision-button-prev">
                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66602 15.5L1.66602 8.5L8.66602 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                    <div class="design-left">
                        <img src="assets/images/home/design-image.png" alt="Design Image 1" class="design-img">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                    <div class="tab-content" id="myTabContent">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
        <div class="modal-bottom">
            <a href="#" class="btn btn-primary">Book a Free Consultation</a>
        </div>
    </div>
</section>

<section class="success-section">
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
                    <div class="success-card">
                        <div class="left">
                            <span class="number">05</span>
                            <span class="content">Experienced Years</span>
                        </div>
                    </div>
                    <div class="success-card">
                        <div class="left">
                            <span class="number">30+</span>
                            <span class="content">Specialized Experts</span>
                        </div>
                    </div>
                    <div class="success-card">
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
</section>
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
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="article-card">
                        <div class="image">
                            <img src="assets/images/home/article.jpg"
                                alt="How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide">
                        </div>
                        <div class="content">
                            <h3>How to Build an eCommerce Mobile App in Dubai in 2025 – A Comprehensive Guide</h3>
                            <div class="details">
                                <span class="date">July 2, 2025</span>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="clients-section">
    <div class="container">
        <div class="title-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Hear What Our <strong>Clients</strong> Say About Invent</h2>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show.</p>
                </div>
            </div>
        </div>
        <div class="clients-outer clients-slider">
            <div class="clients-card">
                <div class="icon">
                    <img src="assets/images/home/client1.png" alt="Client 1">
                </div>
                <div class="content">
                    <img src="assets/images/home/quote.png" alt="">
                    <p>“This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate
                        the look and feel of finished, typeset text. Only for show.”</p>
                    <span>Emiley Doe</span>
                </div>
            </div>
        </div>
        <div class="arrow-wrap">
            <div class="swiper-button-prev clients-prev">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 13L1 7L7 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="swiper-button-next clients-next">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 13L1 7L7 1" stroke="#A866EC" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>