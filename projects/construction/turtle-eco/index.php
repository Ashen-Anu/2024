<?php require_once('../../../config/config.php') ?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php require_once('../../../includes/seo.php') ?>
    <?php require_once('../../../includes/header_sources.php') ?>

</head>

<body class="custom-cursor">
    <style>
        .current_projects {
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
        <?php require_once('../../../includes/header.php') ?>
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
                    <h2>Turtle Eco Beach - Polhena</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo HTTP_PATH ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Projects</li>
                        <li><span>/</span></li>
                        <li><a href="<?php echo HTTP_PATH ?>projects/construction/">Construction</a></li>
                        <li><span>/</span></li>
                        <li style="color: #ae0001;">Turtle Eco Beach - Polhena</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Services Section Start -->

        <!--Gallery Page Start-->
        <section class="gallery-page">
            <div class="container">
                <!-- <div class="section-title text-center">
                    <span class="section-title__tagline">our gallery</span>
                    <h2 class="section-title__title">Checkout our flights & <br> travel photos</h2>
                </div> -->
                <div class="row">
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/thumbs/1.webp"
                                    alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup"
                                        href="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/1.webp"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/thumbs/2.webp"
                                    alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup"
                                        href="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/2.webp"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/thumbs/3.webp"
                                    alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup"
                                        href="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/3.webp"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/thumbs/4.webp"
                                    alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup"
                                        href="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/4.webp"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/thumbs/5.webp"
                                    alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup"
                                        href="<?php echo HTTP_PATH ?>assets/images/main/gallery/turtle-eco/5.webp"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                </div>
            </div>
        </section>
        <!--Gallery Page End-->



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
        <?php require_once('../../../includes/footer.php') ?>
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

    <?php require_once('../../../includes/footer_sources.php') ?>
</body>


<!-- Sparkit 2024 -->

</html>