<?php require_once('../../config/config.php') ?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php require_once('../../includes/seo.php') ?>
    <?php require_once('../../includes/header_sources.php') ?>
</head>

<body class="custom-cursor">
    <style>
        .current_services {
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
        <?php require_once('../../includes/header.php') ?>
        <!-- End HEader -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg"
                style="background-image: url(<?php echo HTTP_PATH ?>assets/images/main/header/services-header.webp)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Consultation Services</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo HTTP_PATH ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li><a href="<?php echo HTTP_PATH ?>services/">Services</a></li>
                        <li><span>/</span></li>
                        <li style="color: #ae0001;">Consultation</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Services Section Start -->

        <!--Services Page Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__left">
                            <div class="service-details__category">
                                <ul class="service-details__category-list list-unstyled">

                                    <li><a href="<?php echo HTTP_PATH ?>services/constructions/">Construction<span
                                                class="fas fa-angle-right"></span></a>
                                    </li>

                                    <li><a href="<?php echo HTTP_PATH ?>services/renovations/">Renovations<span
                                                class="fas fa-angle-right"></span></a></li>

                                    <li><a href="<?php echo HTTP_PATH ?>services/cost-estimates/">Cost Estimates<span
                                                class="fas fa-angle-right"></span></a></li>

                                    <li class="active"><a
                                            href="<?php echo HTTP_PATH ?>services/consultation/">Consultation<span
                                                class="fas fa-angle-right"></span></a></li>

                                </ul>
                            </div>
                            <div class="service-details__need-help">
                                <div class="service-details__need-help-bg"
                                    style="background-image: url(<?php echo HTTP_PATH ?>assets/images/backgrounds/service-details-need-help-bg.jpg)">
                                </div>
                                <div class="service-details__need-help-icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <h2 class="service-details__need-help-title">Book an Instant <br> Site Visit Now
                                </h2>
                                <div class="service-details__need-help-contact">
                                    <p>Call anytime</p>
                                    <a href="tel:+94718709961">+94 71 870 9961<br><br></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="service-details__content-box">
                                <div class="service-details__img">
                                    <img src="<?php echo HTTP_PATH ?>assets/images/main/services/consultations.webp"
                                        alt="">
                                </div>
                                <h3 class="service-details__title">Consultation</h3>
                                <p class="service-details__text-1">Swarna Constructions provides expert consultation
                                    services to guide clients through every phase of the construction process. Whether
                                    it’s for new builds, renovations, or expansions, their team offers valuable insights
                                    on design, materials, and compliance with local regulations. The consultation
                                    process involves understanding client goals and offering tailored solutions to
                                    ensure optimal results. By working closely with clients, Swarna ensures that each
                                    project aligns with both aesthetic and practical requirements, enhancing the overall
                                    construction experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-details__quote">
                            <p class="service-details__quote-text">At Swarna Constructions, we prioritize client safety
                                and use only high-quality materials, ensuring trust and delivering durable, reliable
                                structures you can count on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Page End-->

        <!-- Services Section End   -->

        <!--Newsletter One Start-->
        <section class="newsletter">
            <div class="newsletter__shape-1 float-bob-y">
                <img src="<?php echo HTTP_PATH ?>assets/images/main/shapes/newsletter-shape-1.png" alt="">
            </div>
            <div class="newsletter__shape-2 float-bob-x">
                <img src="<?php echo HTTP_PATH ?>assets/images/main/shapes/newsletter-shape-2.png" alt="">
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
        <?php require_once('../../includes/footer.php') ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="<?php echo HTTP_PATH ?>assets/images/resources/logo-1.png" width="143" alt="" /></a>
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

    <?php require_once('../../includes/footer_sources.php') ?>
</body>


<!-- Sparkit 2024 -->

</html>