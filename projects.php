<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php require('include/head.php'); ?>
    <style>
        /* .wrap-modal-slider {
            padding: 0 30px;
            opacity: 0;
            transition: all 0.3s;
        }

        .wrap-modal-slider.open {
            opacity: 1;
        } */

        .your-class {
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        /* Arrows */
        .slick-prev,
        .slick-next {
            font-size: 0;
            line-height: 0;

            position: absolute;
            top: 50%;

            display: block;

            width: 20px;
            height: 20px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);

            cursor: pointer;

            color: transparent;
            border: none;
            outline: none;
            background: transparent;
        }

        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            color: transparent;
            outline: none;
            background: transparent;
        }

        .slick-prev:hover:before,
        .slick-prev:focus:before,
        .slick-next:hover:before,
        .slick-next:focus:before {
            opacity: 1;
        }

        .slick-prev.slick-disabled:before,
        .slick-next.slick-disabled:before {
            opacity: .25;
        }

        .slick-prev:before,
        .slick-next:before {
            font-family: 'slick';
            font-size: 20px;
            line-height: 1;

            opacity: .75;
            color: white;

            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-prev {
            left: -25px;
        }

        [dir='rtl'] .slick-prev {
            right: -25px;
            left: auto;
        }

        .slick-prev:before {
            content: '←';
        }

        [dir='rtl'] .slick-prev:before {
            content: '→';
        }

        .slick-next {
            right: -25px;
        }

        [dir='rtl'] .slick-next {
            right: auto;
            left: -25px;
        }

        .slick-next:before {
            content: '→';
        }

        [dir='rtl'] .slick-next:before {
            content: '←';
        }

        /* Dots */
        .slick-dotted.slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -25px;

            display: block;

            width: 100%;
            padding: 0;
            margin: 0;

            list-style: none;

            text-align: center;
        }

        .slick-dots li {
            position: relative;

            display: inline-block;

            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;

            display: block;

            width: 20px;
            height: 20px;
            padding: 5px;

            cursor: pointer;

            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 6px;
            line-height: 20px;

            position: absolute;
            top: 0;
            left: 0;

            width: 20px;
            height: 20px;

            content: '•';
            text-align: center;

            opacity: .25;
            color: black;

            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: black;
        }
    </style>
</head>

<body>

    <div id="main-wrapper">

        <?php include('include/header.php'); ?>

        <!--slider section start-->
        <div class="hero-section section position-relative">
            <!--Hero Item start-->
            <div class="hero-item-4 bg-image" data-bg="assets/images/hero/Home3-Slide1.jpg">
                <div id="carouselExampleIndicators" class="carousel slide slider__height-2" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item transbox active">
                            <img src="assets/images/Website assets/Images/Hero Image.png" alt="first slide"
                                class='sliderImg1'>
                            <div class="carousel-caption d-md-block">
                                <div class="row ">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <!--Hero Content start-->
                                        <div class="hero-content-2">
                                            <h2>You see in Dreams! & We make it Happen</h2>
                                        </div>
                                        <!--Hero Content end-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Hero Item end-->
        </div>
        <!--slider section end-->

        <!--Portfolio Boxed section start-->
        <div class="portfolio-boxed section bg-gray pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10"
            style='position:relative'>
            <div class="container">
                <div class="tabUl">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="nav-all" aria-selected="true"
                                style='border-top-left-radius:5px; border-bottom-left-radius:5px;'>Residential</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="nav-trending-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-recong" type="button" role="tab" aria-controls="profile-recong"
                                aria-selected="false">Commercial</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="nav-trending-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-kjjk" type="button" role="tab" aria-controls="profile-recong"
                                aria-selected="false"
                                style='border-top-right-radius:5px; border-bottom-right-radius:5px;'>recommand</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="content ">
                        <h1>Our Residential Projects</h1>
                    </div>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="your-class">
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt=""></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-recong" role="tabpanel" aria-labelledby="nav-trending-tab">
                        <div class="your-class">
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt="">
                                <p>SIlver Queen Luxury Residency</p>
                            </div>
                            <div><img src="assets/images/Website assets/Images/Service 1.png" alt="">
                                <p>SIlver Queen Luxury Residency</p>
                            </div>
                            <div><img src="assets/images/Website assets/Images/Hero Image.png" alt="">
                                <p>SIlver Queen Luxury Residency</p>
                            </div>
                            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt="">
                                <p>SIlver Queen Luxury Residency</p>
                            </div>
                            <div><img src="assets/images/Website assets/Images/Hero Image.png" alt="">
                                <p>SIlver Queen Luxury Residency</p>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-kjjk" role="tabpanel" aria-labelledby="nav-trending-tab">
                        <div class="your-class">
                            <div><img src="assets/images/Website assets/Images/Hero Image.png" alt=""></div>
                            <div><img src="http://via.placeholder.com/242x300" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Hero Image.png" alt=""></div>
                            <div><img src="http://via.placeholder.com/242x300/ffffff/000000" alt=""></div>
                            <div><img src="assets/images/Website assets/Images/Hero Image.png" alt=""></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Portfolio Boxed section end-->



        <!--why us-->
        <div
            class="feature-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-35 pb-lg-15 pb-md-5 pb-sm-5 pb-xs-5">
            <div class="container">
            <h1>Amrit The Luxury Residency</h1>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mb-60 mb-sm-50 mb-xs-40">
                        <div class="feature">
                            <div class=" pl-0 pr-0">
                                <!-- <div class="icon"><i class="pe-7s-home"></i></div> -->
                                <div class="content2">
                                   
                                    <div class="row">
                                        <div class="col-8 tab-image1">
                                            <img src="assets/images/Website assets/Images/Service 1.png" alt="">
                                        </div>
                                        <div class="col-4 tab-image2">
                                            <img src="assets/images/Website assets/Images/Service 1.png" alt="" class='tab-image-slider image-active'>
                                            <img src="assets/images/Website assets/Images/Service 2.png" alt="" class='tab-image-slider'>
                                            <img src="assets/images/Website assets/Images/Service 3.png" alt="" class='tab-image-slider'>
                                            <img src="assets/images/Website assets/Images/Service 1.png" alt="" class='tab-image-slider'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mb-60 mb-sm-50 mb-xs-40">
                        <div class="feature1  ml-20">
                            <div class=" pl-0 pr-0">
                                <!-- <div class="icon"><i class="pe-7s-paint"></i></div> -->
                                <div class="content ">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="course__filter text-center mb-30">
                                                <nav>
                                                    <div class="nav nav-tabs justify-content-center " id="course-tab"
                                                        role="tablist">
                                                        <button class="nav-link active table_list home-cat flex-a"
                                                            id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                                                            type="button" role="tab" aria-controls="about"
                                                            aria-selected="true">About</button>

                                                        <button class="nav-link table_list" id="overview-tab"
                                                            data-bs-toggle="tab" data-bs-target="#overview"
                                                            type="button" role="tab" aria-controls="overview"
                                                            aria-selected="false">Overview</button>

                                                        <button class="nav-link table_list" id="amenities-tab"
                                                            data-bs-toggle="tab" data-bs-target="#amenities"
                                                            type="button" role="tab" aria-controls="amenities"
                                                            aria-selected="false">Amenities</button>


                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="tab-content course__tab-content" id="course-tabContent">
                                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                                    aria-labelledby="about-tab">
                                                    <div class="course__tab-wrapper">
                                                        <div class="row">
                                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                                <div class='mb-15'>
                                                                    <p>Possession Status:<br> <span
                                                                            class="text-black">Ready to move</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Age of Construction:<br> <span
                                                                            class="text-black">3 Years</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Road:<br> <span class="text-black">Eastern
                                                                            Freeway – 1.5 km
                                                                            Link Road – 1.1 km</span></p>
                                                                </div>
                                                                <div>
                                                                    <p>AIrport:<br> <span class="text-black">Chhatrapati
                                                                            Shivaji
                                                                            nternational Airport – 8.2 km</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                            <div class='mb-15'>
                                                                    <p>Possession Status::<br> <span
                                                                            class="text-black">Ready to move</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Age of Construction:<br> <span
                                                                            class="text-black">3 Years</span></p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="overview" role="tabpanel"
                                                    aria-labelledby="overview-tab">
                                                    <div class="course__tab-wrapper">
                                                        <div class="row">
                                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                                <div class='mb-15'>
                                                                    <p>Possession Status:<br> <span
                                                                            class="text-black">Ready to move</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Age of Construction:<br> <span
                                                                            class="text-black">3 Years</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Road:<br> <span class="text-black">Eastern
                                                                            Freeway – 1.5 km
                                                                            Link Road – 1.1 km</span></p>
                                                                </div>
                                                                <div>
                                                                    <p>AIrport:<br> <span class="text-black">Chhatrapati
                                                                            Shivaji
                                                                            nternational Airport – 8.2 km</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                            <div class='mb-15'>
                                                                    <p>Possession Status::<br> <span
                                                                            class="text-black">Ready to move</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Age of Construction:<br> <span
                                                                            class="text-black">3 Years</span></p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="amenities" role="tabpanel"
                                                    aria-labelledby="amenities-tab">
                                                    <div class="course__tab-wrapper">
                                                        <div class="row">
                                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                                <div class='mb-15'>
                                                                    <p>Possession Status:<br> <span
                                                                            class="text-black">Ready to move</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Age of Construction:<br> <span
                                                                            class="text-black">3 Years</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Road:<br> <span class="text-black">Eastern
                                                                            Freeway – 1.5 km
                                                                            Link Road – 1.1 km</span></p>
                                                                </div>
                                                                <div>
                                                                    <p>AIrport:<br> <span class="text-black">Chhatrapati
                                                                            Shivaji
                                                                            nternational Airport – 8.2 km</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                            <div class='mb-15'>
                                                                    <p>Possession Status::<br> <span
                                                                            class="text-black">Ready to move</span></p>
                                                                </div>
                                                                <div class='mb-15'>
                                                                    <p>Age of Construction:<br> <span
                                                                            class="text-black">3 Years</span></p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--why us-->

               <!--Google Map Area Start-->
               <div class="container mt-20">
                <div class="content text-center">
                    <h1>Project Location</h1>
                </div>
       <div class="google-map-area section">
            <div class="ht-gmap3" id="htmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.190660262246!2d73.00543831437719!3d19.099289956204426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82cd5d813bda0f8a!2zMTnCsDA1JzUyLjQiTiA3M8KwMDAnMTQuMyJF!5e0!3m2!1sen!2sin!4v1674280171886!5m2!1sen!2sin" class='map-iframe' allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
       </div>
        <!--Google Map Area Start-->



        <!--Footer section start-->
        <?php require 'include/footer.php' ?>
        <!--Footer section end-->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <?php require 'include/foot.php' ?>
    <script>
        $(document).ready(function () {
            $('.your-class').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4
            });
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('.your-class').slick('setPosition');
        })
    </script>
</body>

</html>
<!--Sanctuary gothict-->