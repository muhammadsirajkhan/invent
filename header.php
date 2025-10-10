<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>TekInvent</title> -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/images/fav.png"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> -->
    <style>
        :root {
            --edge: url('http://localhost/invent/assets/images/edge.png');
            --edge-grey: url('http://localhost/invent/assets/images/edge-grey.png');
            --side-black: url('http://localhost/invent/assets/images/c-l.png');
            --side-white: url('http://localhost/invent/assets/images/c-r.png');
        }
    </style>
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/normalize.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <?php
    $empty_var = "1";
    ?>
    <!-- wrapper start -->
    <div class="wrapper">
        <?php if ($empty_var): ?>
            <!-- Header Start -->
            <header class="header" style="background-image: url('http://localhost/invent/assets/images/header-bg.png');">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <div class="container">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo.svg" alt="TekInvent" class="logo">
                        </a>

                        <!-- Mobile Menu Toggle Button -->
                        <button class="navbar-toggler border-0 d-xl-none" type="button" id="mobileMenuToggle">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Desktop Navigation -->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav gap-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#technologies">Technologies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#industry">Industry</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact us</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Side Buttons -->
                        <div class="d-none d-xl-flex align-items-center gap-3">
                            <a href="tel:+0014809201474" class="btn btn-outline-primary">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.499 13.42V16.956C18.4991 17.2092 18.4032 17.453 18.2306 17.6382C18.058 17.8234 17.8216 17.9363 17.569 17.954C17.1324 17.9847 16.7757 18 16.499 18C7.66202 18 0.499023 10.837 0.499023 2C0.499023 1.724 0.514357 1.36733 0.545023 0.93C0.562746 0.677444 0.675605 0.441011 0.860827 0.268409C1.04605 0.0958068 1.28985 -0.000114433 1.54302 2.56579e-07H5.07902C5.20306 -0.000125334 5.32272 0.045859 5.41475 0.12902C5.50678 0.212182 5.56462 0.326583 5.57702 0.45C5.59969 0.679334 5.62102 0.863333 5.64102 1.002C5.83974 2.38893 6.24701 3.73784 6.84902 5.003C6.94402 5.203 6.88202 5.442 6.70202 5.57L4.54402 7.112C5.86374 10.1863 8.31375 12.6363 11.388 13.956L12.928 11.802C12.9907 11.7137 13.0826 11.6503 13.1874 11.6231C13.2922 11.5958 13.4033 11.6064 13.501 11.653C14.766 12.2539 16.1146 12.6601 17.501 12.858C17.6397 12.878 17.823 12.8993 18.051 12.922C18.1743 12.9346 18.2884 12.9926 18.3714 13.0846C18.4543 13.1766 18.4992 13.2961 18.499 13.42Z"
                                        fill="#A866EC" />
                                </svg>
                                +0014809201474
                            </a>
                            <!-- <a href="#get-started" class="btn btn-primary btn-get-started">Get Started</a> -->
                            <a href="#get-started" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </nav>
            </header>
        <?php endif; ?>
        <!-- Mobile Sidebar Menu -->
        <div class="mobile-sidebar" id="mobileSidebar">
            <div class="mobile-sidebar-header">
                <a href="index.php" class="sidebar-logo">
                    <img src="assets/images/logo.svg" alt="TekInvent" class="logo">
                </a>
                <button class="sidebar-close" id="sidebarClose">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
            <div class="mobile-sidebar-content">
                <ul class="mobile-menu">
                    <li><a href="#services">Services</a></li>
                    <li><a href="#technologies">Technologies</a></li>
                    <li><a href="#industry">Industry</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact us</a></li>
                </ul>
                <div class="mobile-sidebar-footer">
                    <a href="tel:+0014809201474" class="btn btn-outline-primary w-100 mb-3">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.499 13.42V16.956C18.4991 17.2092 18.4032 17.453 18.2306 17.6382C18.058 17.8234 17.8216 17.9363 17.569 17.954C17.1324 17.9847 16.7757 18 16.499 18C7.66202 18 0.499023 10.837 0.499023 2C0.499023 1.724 0.514357 1.36733 0.545023 0.93C0.562746 0.677444 0.675605 0.441011 0.860827 0.268409C1.04605 0.0958068 1.28985 -0.000114433 1.54302 2.56579e-07H5.07902C5.20306 -0.000125334 5.32272 0.045859 5.41475 0.12902C5.50678 0.212182 5.56462 0.326583 5.57702 0.45C5.59969 0.679334 5.62102 0.863333 5.64102 1.002C5.83974 2.38893 6.24701 3.73784 6.84902 5.003C6.94402 5.203 6.88202 5.442 6.70202 5.57L4.54402 7.112C5.86374 10.1863 8.31375 12.6363 11.388 13.956L12.928 11.802C12.9907 11.7137 13.0826 11.6503 13.1874 11.6231C13.2922 11.5958 13.4033 11.6064 13.501 11.653C14.766 12.2539 16.1146 12.6601 17.501 12.858C17.6397 12.878 17.823 12.8993 18.051 12.922C18.1743 12.9346 18.2884 12.9926 18.3714 13.0846C18.4543 13.1766 18.4992 13.2961 18.499 13.42Z"
                                fill="#A866EC" />
                        </svg>
                        +0014809201474
                    </a>
                    <a href="#get-started" class="btn btn-primary w-100">Get Started</a>
                </div>
            </div>
        </div>

        <!-- Overlay for mobile sidebar -->
        <div class="mobile-sidebar-overlay" id="sidebarOverlay"></div>
        <!-- Header End -->