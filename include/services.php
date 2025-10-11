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