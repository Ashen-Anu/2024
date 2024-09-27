<?php require_once('config/config.php') ?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php require_once('includes/seo.php') ?>
    <?php require_once('includes/header_sources.php') ?>
</head>

<body class="custom-cursor">
    <style>
        .current_home {
            color: red !important;
        }
    </style>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <!-- Start Header -->
        <?php require_once('includes/header.php') ?>
        <!-- End HEader -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <?php require_once('includes/main-slider.php') ?>
        <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">get to know us</span>
                                <h2 class="section-title__title">Your trusted partner in turning your vision into
                                    reality.</h2>
                            </div>
                            <p class="about-one__text">

                                Established in 2009, Swarna Constructions brings over 15 years of industry
                                expertise, providing reliable and high-quality construction solutions. We specialize in
                                building construction, renovations, cost estimates, and consultations, offering a
                                comprehensive approach to meet your construction needs.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Crafting quality structures from the ground up.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Revamping spaces with style and functionality.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Delivering precise budget assessments.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Offering expert construction advice.</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- <div class="about-one__btn-call">
                                <div class="about-one__btn-box">
                                    <a href="contact.html" class="thm-btn about-one__btn">Book Now</a>
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="about-one__call-content">
                                        <span class="about-one__call-sub-title">Call Anytime</span>
                                        <p class="about-one__call-number"><a href="tel:9288006780">+92 ( 8800 ) -
                                                6780</a></p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="<?php echo HTTP_PATH ?>assets/images/main/home/about.webp" alt="">
                                </div>
                                <div class="about-one__satisfied">
                                    <div class="about-one__satisfied-icon">
                                        <span class="icon-recommend"></span>
                                    </div>
                                    <div class="about-one__satisfied-content count-box">
                                        <h3 class="count-text" id="counter">0</h3>
                                        <p>Satisfied Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Feature Two Start-->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Feature Two Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__content-box">
                                <div class="feature-two__content-box-inner">
                                    <!-- <div class="feature-two__shape-1">
                                        <img src="assets/images/main/shapes/feature-two-shape-1.png" alt="">
                                    </div> -->
                                    <div class="feature-two__dot">
                                        <img src="assets/images/main/shapes/feature-two-dot.png" alt="">
                                    </div>
                                    <div class="feature-two__content-box-top">
                                        <span class="feature-two__content-box-sub-tilte">Limited Offer</span>
                                        <h4 class="feature-two__content-box-title">Get
                                            discounts <br>
                                            for your constructions</h4>
                                    </div>
                                    <p class="feature-two__content-box-text">Unlock 10% off on all constructions! Build
                                        your dream space while saving big today<br><br></p>
                                    <a href="contact.html" class="thm-btn feature-two__btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Start-->
                    <!--Feature Two Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img-box">
                                <div class="feature-two__img">
                                    <img src="assets/images/main/home/offers-1.webp" alt="">
                                    <div class="feature-two__tilte-box">
                                        <!-- <h3 class="feature-two__title text-white">Exclusive <br> new
                                            offers</h3> -->
                                    </div>
                                    <div class="feature-two__arrow">
                                        <!-- <a href="contact.html"><span class="icon-right-arrow"></span></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Start-->
                    <!--Feature Two Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img-box">
                                <div class="feature-two__img">
                                    <img src="assets/images/main/home/offers-2.webp" alt="">
                                    <div class="feature-two__tilte-box">
                                        <!-- <h3 class="feature-two__title text-white">Join our <br> cabin
                                            crew</h3> -->
                                    </div>
                                    <div class="feature-two__arrow">
                                        <!-- <a href="contact.html"><span class="icon-right-arrow"></span></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Start-->
                </div>
            </div>
        </section>
        <!--Feature Two End-->

        <!--Get Flight Start-->
        <section class="get-flight">
            <div class="get-flight-img">
                <img src="assets/images/main/home/site-visit.webp" alt="">
            </div>
            <div class="get-flight__shape-1 float-bob-x">
                <img src="assets/images/main/shapes/get-flight-shape-1.png" alt="">
            </div>
            <!-- <div class="get-flight__shape-2 float-bob-x">
                <img src="assets/images/main/shapes/get-flight-shape-2.png" alt="">
            </div> -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="get-flight__content-box">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Site Visits</span>
                                <h2 class="section-title__title">Request a site visit</h2>
                            </div>
                            <form action="" class="get-flight__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Your Contact No.">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" name="date" placeholder="Select date" id="datepicker">
                                            <div class="get-flight__icon-box">
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="get-flight__form-input-box">
                                                    <input type="text" name="time" placeholder="Select time">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="get-flight__form-input-box">
                                                    <input type="text" placeholder="City/Town">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="District">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <button type="submit" class="thm-btn get-flight__btn">Send Request</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="get-flight__content-text"> <span>*</span> After sending request. We’ll contact you
                                within 24 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Get Flight End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">what we’re offering</span>
                    <h2 class="section-title__title">Expert Services Offered <br> by Swarna Constructions</h2>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/main/home/construction.webp" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title">Strong Foundations</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo HTTP_PATH ?>services/constructions/">Constructions</a>
                                    </h3>
                                </div>
                                <!-- <p class="services-one__text">Non augue egestas, commodo velit eget, tellus.</p> -->
                                <div class="services-one__arrow">
                                    <a href="<?php echo HTTP_PATH ?>services/constructions/"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/main/home/renovations.webp" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title">Revive Spaces</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo HTTP_PATH ?>services/renovations/">Renovations</a>
                                    </h3>
                                </div>
                                <!-- <p class="services-one__text">Non augue egestas, commodo velit eget, tellus.</p> -->
                                <div class="services-one__arrow">
                                    <a href="<?php echo HTTP_PATH ?>services/renovations/"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/main/home/cost-estimates.webp" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title">Value Assured</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo HTTP_PATH ?>services/cost-estimates/">Cost Estimates</a>
                                    </h3>
                                </div>
                                <!-- <p class="services-one__text">Non augue egestas, commodo velit eget, tellus.</p> -->
                                <div class="services-one__arrow">
                                    <a href="<?php echo HTTP_PATH ?>services/cost-estimates/"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="assets/images/main/home/consultation.webp" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title">Expert Guidance</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo HTTP_PATH ?>services/consultations/">Consultations</a>
                                    </h3>
                                </div>
                                <!-- <p class="services-one__text">Non augue egestas, commodo velit eget, tellus.</p> -->
                                <div class="services-one__arrow">
                                    <a href="<?php echo HTTP_PATH ?>services/consultations/"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="container">
                <ul class="counter-one__box list-unstyled">
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="95" data-speed="1500">0</h3>
                            <p class="counter-one__text">Completed Projects</p>
                        </div>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="16" data-speed="1500">0</h3>
                            <p class="counter-one__text">Ongoing Projects</p>
                        </div>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="324" data-speed="1500">0</h3>
                            <p class="counter-one__text">Clients</p>
                        </div>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="2" data-speed="1500">0</h3>
                            <p class="counter-one__text">Branches</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__shape-1 zoom-fade-2">
                <img src="assets/images/main/shapes/testimonial-shape-1.png" alt="">
            </div>
            <div class="testimonial-one__shape-2 float-bob-x">
                <img src="assets/images/main/shapes/testimonial-shape-2.png" alt="">
            </div>
            <div class="testimonial-one__shape-3 float-bob-x">
                <img src="assets/images/main/shapes/testimonial-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Client Testimonials</span>
                    <h2 class="section-title__title">What they’re talking about <br> our services</h2>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="testimonial-one__shape-4"
                        style="background-image: url(assets/images/main/shapes/testimonial-shape-4.png);"></div>
                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 2
                            }
                        }
                    }'>
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__img">
                                        <img src="assets/images/main/testimonial/testimonial-1-1.jpg" alt="">
                                        <div class="testimonial-one__icon-box">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__content-text">Swarna Constructions built our dream home
                                        flawlessly! Their professionalism and attention to detail were outstanding.</p>
                                    <div class="testimonial-one__rating">
                                        <div class="testimonial-one__rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__user">
                                            <div class="testimonial-one__user-name">
                                                <h4>Random Client</h4>
                                                <p>Client 01</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__img">
                                        <img src="assets/images/main/testimonial/testimonial-1-2.jpg" alt="">
                                        <div class="testimonial-one__icon-box">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__content-text">Our office renovation was seamless and
                                        timely. Swarna Constructions exceeded our expectations with exceptional
                                        quality.</p>
                                    <div class="testimonial-one__rating">
                                        <div class="testimonial-one__rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__user">
                                            <div class="testimonial-one__user-name">
                                                <h4>Random Client</h4>
                                                <p>Client 02</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__img">
                                        <img src="assets/images/main/testimonial/testimonial-1-3.jpg" alt="">
                                        <div class="testimonial-one__icon-box">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__content-text">Swarna Constructions provided accurate cost
                                        estimates, helping us stay on budget throughout our entire project.</p>
                                    <div class="testimonial-one__rating">
                                        <div class="testimonial-one__rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__user">
                                            <div class="testimonial-one__user-name">
                                                <h4>Random Client</h4>
                                                <p>Client 03</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__img">
                                        <img src="assets/images/main/testimonial/testimonial-1-4.jpg" alt="">
                                        <div class="testimonial-one__icon-box">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__content-text">Their consultation service was insightful
                                        and practical, guiding us through every step of our construction process.</p>
                                    <div class="testimonial-one__rating">
                                        <div class="testimonial-one__rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__user">
                                            <div class="testimonial-one__user-name">
                                                <h4>Random Client</h4>
                                                <p>Client 04</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->



        <!--Destination One Start-->
        <section class="destination-one">
            <div class="destination-one__shape-1"
                style="background-image: url(assets/images/main/shapes/destination-one-shape-1.png);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Ongoing Projects</span>
                    <h2 class="section-title__title">Checkout our ongoing
                        <br> projects
                    </h2>
                </div>
                <div class="row">
                    <!--Destination One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="destination-one__single">
                            <div class="destination-one__img-box">
                                <div class="destination-one__img">
                                    <img src="assets/images/main/resources/destination-1-1.jpg" alt="">
                                </div>
                                <div class="destination-one__content">
                                    <h3 class="destination-one__title"><a href="destination-details.html">Matara, Sri
                                            Lanka</a></h3>
                                    <!-- <div class="destination-one__time">
                                        <div class="destination-one__paris-time">
                                            <p>Departure: <span>16:50</span></p>
                                        </div>
                                        <div class="destination-one__barcelona-time">
                                            <p>Arrival: <span>20:42</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Destination One Single End-->
                    <!--Destination One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="destination-one__single">
                            <div class="destination-one__img-box">
                                <div class="destination-one__img">
                                    <img src="assets/images/main/resources/destination-1-2.jpg" alt="">
                                </div>
                                <div class="destination-one__content">
                                    <h3 class="destination-one__title"><a href="destination-details.html">Kaluthara, Sri
                                            Lanka</a></h3>
                                    <!-- <div class="destination-one__time">
                                        <div class="destination-one__paris-time">
                                            <p>Departure: <span>16:50</span></p>
                                        </div>
                                        <div class="destination-one__barcelona-time">
                                            <p>Arrival: <span>20:42</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Destination One Single End-->
                    <!--Destination One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="destination-one__single">
                            <div class="destination-one__img-box">
                                <div class="destination-one__img">
                                    <img src="assets/images/main/resources/destination-1-3.jpg" alt="">
                                </div>
                                <div class="destination-one__content">
                                    <h3 class="destination-one__title"><a href="destination-details.html">Colombo, Sri
                                            Lanka</a></h3>
                                    <!-- <div class="destination-one__time">
                                        <div class="destination-one__paris-time">
                                            <p>Departure: <span>16:50</span></p>
                                        </div>
                                        <div class="destination-one__barcelona-time">
                                            <p>Arrival: <span>20:42</span></p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Destination One Single End-->
                </div>
            </div>
        </section>
        <!--Destination One End-->



        <!--Newsletter One Start-->
        <section class="newsletter">
            <div class="newsletter__shape-1 float-bob-y">
                <img src="assets/images/main/shapes/newsletter-shape-1.png" alt="">
            </div>
            <div class="newsletter__shape-2 float-bob-x">
                <img src="assets/images/main/shapes/newsletter-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="newslettwe_left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Subscribe Now</span>
                                <h2 class="section-title__title">Want to know about
                                    <br> our offers first?
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="newsletter__right">
                            <form class="newsletter__form">
                                <div class="newsletter__input-box">
                                    <input type="email" placeholder="Enter email address" name="email">
                                    <button type="submit" class="newsletter__btn">Subscribe<i
                                            class="fas fa-angle-right"></i></button>
                                </div>
                            </form>
                            <div class="checked-box">
                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                <label for="skipper"><span></span>I've read and accept the Privacy Policy.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Newsletter One End-->

        <!--Site Footer Start-->
        <?php require_once('includes/footer.php') ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/main/resources/logo-1.png"
                        width="143" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@jetly.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
    <script>
        let count = 0;
        const stopCount = 321;
        const speed = 14; // Adjust speed as needed

        function updateCounter() {
            const counter = document.getElementById('counter');
            if (count < stopCount) {
                count++;
                counter.innerHTML = count;
                setTimeout(updateCounter, speed);
            } else if (count >= stopCount) {
                count += 1; // Increment further after reaching stopCount
                counter.innerHTML = count + "+";
            }
        }

        updateCounter();
    </script>

    <?php require_once('includes/footer_sources.php') ?>
</body>


<!-- Sparkit 2024 -->

</html>