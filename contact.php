<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php require('include/head.php'); ?>
    <style>
        header.header {
            background: rgba(210,226,249,255);
        }

        .form-control {
            padding: 0.875rem 0.75rem;
            font-size: 0.9rem;
            color: #212529;
            background-color: #edeef1;
            border: none;
        }
        .info{
          transform: translateY(30%);
        }
        @media (max-width:760px){
            .info{
          transform: translateY(0%);
        }
        }
    </style>
</head>

<body>

    <div id="main-wrapper">

        <?php include('include/header.php'); ?>

        <!-- main-search start -->

        <!-- main-search start -->

        <!--slider section start-->
        <div class="hero-section section position-relative">
            <!--Hero Item start-->
            <div class="hero-item-4 bg-image" data-bg="assets/images/hero/Home3-Slide1.jpg">
                <div id="carouselExampleIndicators" class="carousel slide slider__height-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item transbox active">
                            <img src="assets/images/main_image/Images/Contact us hero image.png" alt="first slide"
                                class='sliderImg1'>
                            <div class="carousel-caption d-md-block">
                                <div class="row ">
                                    <div class="col-lg-5 col-md-5 col-12 col-sm-12">
                                        <!--Hero Content start-->
                                        <div class="hero-content-2 content">
                                            <h2>Let’s Work Together </h2>
                                            <p class='text-black'><strong>Please Share Your Contact Details Our Customer
                                                    Executive will respond you as soon as possible</strong></p>
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

        <!--form-->
        <div class="section from-section pb-80 pb-lg-60 pb-md-25 pb-sm-40 pb-xs-50">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 contact-form">
                        <div class="">
                            <div class="content max-width mb-10">
                                <h2 class="contact-title">Get in Touch</h2>
                            </div>
                            
                                <div class="row">
                                    <div class="col-12 col-md-6 ">
                                    <form id="contact-form" action="assets/php/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="name" placeholder="Your Name" class='form-control'
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="phone" placeholder="Phone Number " class='form-control'
                                                        type="tel">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Email id" class='form-control'
                                                        type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-form-style mb-20">
                                                    <textarea name="message" placeholder="Message" class='form-control'
                                                        rows="8"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-form-style mb-20">
                                                    <button class="btn" type="submit"><span>Send message</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-md-6 info" >
                                        <h4 class="title"><span class="text-blue">Info</span></h4>
                                        <ul class="f-menu-link">
                                            <li>
                                                <div class="inner">
                                                    <div class="icon">
                                                        <img src="assets/images/main_image/svg/Contact.svg"
                                                            alt="logo" class='svgicon'>
                                                    </div>
                                                    <div class="content">
                                                        <span class="text-lev1">+919769108043 | +919326675810</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="inner">
                                                    <div class="icon">
                                                        <img src="assets/images/main_image/svg/E-mail.svg"
                                                            alt="logo" class='svgicon'>
                                                    </div>
                                                    <div class="content">
                                                        <span class="text-lev1">info@Woodworkshop.com</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="inner">
                                                    <div class="icon">
                                                        <img src="assets/images/main_image/svg/Location.svg"
                                                            alt="logo" class='svgicon ml-2'>
                                                    </div>
                                                    <div class="content">
                                                        <span class="text-lev1"> &nbsp;&nbsp;Sadguru CHS, Room No.2B/09
                                                            Sector-10, Koparkhairne Navi Mumbai-400709.</span>
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--form-->

        <!--Google Map Area Start-->
       <div class="container">
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
</body>

</html>