<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<!-- Mirrored from html.dynamiclayers.net/dl/ HTML5 Template/<?php echo base_url(); ?> by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 13:00:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="American Platinum Limousine Online Limo Booking">
    <meta name="author" content="DynamicLayers">
    <title><?php echo ($page_title) ? $page_title : WEBSITE_NAME; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/elements.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/blog.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/responsive.css">
</head>

<body>
    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
    </div>
    <header class="main-header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-wrap">
                    <div class="top-left">
                        <p>Reliable Limo Service & Transport Solutions!</p>
                    </div>
                    <div class="top-right">
                        <ul class="top-header-nav">
                            <li><a href="faqs.html">Help</a></li>
                            <li><a href="<?php echo base_url('contact-us') ?>">Support</a></li>
                            <li><a href="faqs.html">FAQ</a></li>
                        </ul>
                        <ul class="header-social-share">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-header">
            <div class="container">
                <div class="mid-header-wrap">
                    <div class="site-logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo BASE_URL; ?>assets/img/logo1-dark.png" alt="Logo"></a>
                    </div>
                    <ul class="header-info">
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Call us now</span><a href="tel:<?php echo WEBSITE_NUMBER ?>"><?php echo WEBSITE_NUMBER ?></a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-envelope-open"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Email now</span><a href="mailto:<?php echo WEBSITE_EMAIL ?>" class="__cf_email__" ><?php echo WEBSITE_EMAIL ?></a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Location</span>Chicago</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-menu-wrapper">
            <div class="container">
                <div class="nav-menu-inner">
                    <div class="site-logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo BASE_URL; ?>assets/img/logo-dark.png" alt="Logo"></a>
                    </div>
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li class="<?php echo ($this->uri->segment(1) == '') ? 'active' : '' ?> ">
                                <a href="<?php echo base_url(); ?>">Home</a>
                                <!-- <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home Default</a></li>
                                    <li><a href="index-2.html">Home Modern</a></li>
                                </ul> -->
                            </li>
                            <li class="<?php echo ($this->uri->segment(1) == 'about-us') ? 'active' : '' ?>" >
                                <a href="<?php echo base_url('about-us'); ?>">About Us</a>
                            </li>
                            <li class="dropdown_menu <?php echo ($this->uri->segment(1) == 'our-fleet') ? 'active' : '' ?>"> 
                                <a href="javascript:;">Our Fleet</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('our-fleet/luxury-sedan'); ?>">Luxury Sedan</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('our-fleet/luxury-suv'); ?>">Luxury SUV</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('our-fleet/strtch-limousine'); ?>">Stretch Limousine</a>
                                    </li>
                                   
                                    
                                    <li>
                                        <a href="<?php echo base_url('our-fleet/party-bus'); ?>">Party & Executive Bus</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('our-fleet/special-request'); ?>">Special Request</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="<?php echo ($this->uri->segment(1) == 'services') ? 'active' : '' ?>">
                                <a href="<?php echo base_url('services'); ?>">Our Fleet</a>
                            </li> -->
                            <!-- <li class="dropdown_menu">
                                <a href="about-us.html">Company</a>
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="about-company.html">About Company</a></li>
                                    <li><a href="our-services.html">Our Services</a></li>
                                    <li><a href="service-details.html">Services Details</a></li>
                                    <li><a href="<?php echo base_url('book-taxi') ?>">Book a Ride</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown_menu">
                                <a href="our-taxi.html">Our Limo</a>
                                <ul>
                                    <li><a href="our-taxi.html">Limo Lists</a></li>
                                    <li><a href="taxi-details.html">Limo Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown_menu">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="our-drivers.html">Our Drivers</a></li>
                                    <li><a href="driver-details.html">Driver Details</a></li>
                                    <li><a href="testimonials.html">Customer Reviews</a></li>
                                    <li><a href="faqs.html">Help &amp; Faq's</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="dropdown_menu">
                                <a href="blog-grid.html">Blog</a>
                                <ul>
                                    <li><a href="blog-grid.html">Grid Posts</a></li>
                                    <li><a href="blog-classic.html">Classic Posts</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li class="<?php echo ($this->uri->segment(1) == 'contact-us') ? 'active' : '' ?>"><a href="<?php echo base_url('contact-us') ?>">Contact</a></li>
                        </ul>
                    </div>
                    <div class="menu-right-item">
                        <div class="search-icon dl-search-icon">
                            <i class="las la-search"></i>
                        </div>
                        <div class="sidebox-icon dl-sidebox-icon">
                            <i class="las la-bars"></i>
                        </div>
                        <a href="<?php echo base_url('book-taxi') ?>" class="menu-btn">Book a Limo</a>
                    </div>
                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type
                                                keywords here..." />
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las
                                                la-times"></i></div>
        </div>
    </div>

    <div id="searchbox-overlay"></div>
    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo BASE_URL; ?>assets/img/logo-light.png" alt="logo" /></a>
            </div>
            <p>Everything your taxi business needs is
                already here! American Platinum Limousine, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span><?php echo WEBSITE_NUMBER ?></li>
                <li>
                    <span>You can find us at:</span><?php echo WEBSITE_ADDRESS ?>
                </li>
                <li><span>Email now:</span><a href="mailto:<?php echo WEBSITE_EMAIL ?>" style="color: #fff;" class="__cf_email__" data-cfemail=""><?php echo WEBSITE_NUMBER ?></a></li>
            </ul>
        </div>
    </div>

    <div id="sidebox-overlay"></div>