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
<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-section-inner">
            <!-- Left Side - Content -->
            <div class="contact-left">
                <img src="assets/images/icon.svg" alt="Contact Icon" class="contact-icon">
                <h2>Here's How We Can Help</h2>
                <p>
                    This is dummy copy. It is not meant to be read.
                    It has been placed here solely to demonstrate
                    the look and feel of finished, typeset text.
                </p>
            </div>

            <!-- Right Side - Form -->
            <div class="contact-right">
                <div class="contact-form-wrapper">
                    <form class="contact-form" id="contactForm">
                        <!-- Name Field -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required>
                        </div>

                        <!-- Email and Phone Row -->
                        <div class="form-row">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required>
                            </div>
                        </div>

                        <!-- Description Field -->
                        <div class="form-group">
                            <textarea class="form-control" id="description" name="description" placeholder="Description"
                                required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-submit">Lets Talk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>