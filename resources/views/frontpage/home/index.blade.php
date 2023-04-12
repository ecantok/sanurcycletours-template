<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Template</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/favicon.ico') }}"/> -->
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Poppins For Title -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        integrity="sha384-/rJKQnzOkEo+daG0jMjU1IwwY9unxt1NBw3Ef2fmOJ3PW/TfAg2KXVoWwMZQZtw9" crossorigin="anonymous">

    <style>
        .carousel .carousel-control-prev-icon::after,
        .carousel .carousel-control-next-icon::after {
            content: '' !important;
        }

        .carousel .carousel-control-prev-icon {
            /* change fill="currentColor" to %23fff to make it white  */
            background-image: url('data:image/svg+xml,<svg class="bi bi-arrow-left-circle-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="%23fff " xmlns="http://www.w3.org/2000/svg">  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>');
        }

        .carousel .carousel-control-next-icon {
            /* change fill="currentColor" to %23fff to make it white  */
            background-image: url('data:image/svg+xml,<svg class="bi bi-arrow-right-circle-fill" viewBox="0 0 20 20" fill="%23fff" xmlns="http://www.w3.org/2000/svg"><path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>');
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            /* Use to adjust size of icons */
            width: 3rem;
            height: 3rem;
        }

        .main-text {
            color: #FFF;
            position: absolute;
            left: 10%;
            right: 10%;
            width: 80%;
            height: 100%;
            z-index: 10;
            padding-left: 50px;
            padding-right: 50px;
        }

        .main-text-mobile {
            display: none;
        }

        .big-transition {
            transition: 0.2s !important;
            text-transform: uppercase;
            font-size: 1.75rem;
        }

        .big-transition:hover {
            transform: scale(1.2) !important;

        }

        .zoom {
            animation: scale 20s linear infinite;
        }

        @keyframes scale {
            50% {
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @media only screen and (max-width: 768px) {
            .main-text {
                top: 16px;
            }

            .main-text {
                display: none !important;
            }

            .main-text-mobile {
                display: block;
            }
        }

        .btn-outline-light:hover,
        .btn-outline-light:focus {
            background-color: initial;
            color: #f8f9fa;
        }
    </style>
</head>

<body>



    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start Header -->
    <header class="d-flex flex-column">
        <div id="mu-hero" class="w-100 pr-0 pl-0">
            <div class="mu-hero-area">

                <div class="mu-hero-top">
                    <!-- Start center Logo -->
                    <div class="mu-logo-area">
                        <!-- text based logo -->
                        <a class="mu-logo" href="index.html"><span>Outing</span></a>
                        <!-- Image based logo -->
                        <!-- <a class="mu-logo" href="index.html"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
                    </div>
                    <!-- End center Logo -->
                    <div class="mu-hero-top-info">
                        <ul>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>mail@domain.com</span>
                            </li>
                            <li>
                                <div class="mu-telephone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+1234 784739</span>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- Start hero featured area -->
                <div id="carouselBasicExample" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li type="button" data-target="#carouselBasicExample" data-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></li>
                        <li type="button" data-target="#carouselBasicExample" data-slide-to="1" aria-label="Slide 2">
                        </li>
                        <li type="button" data-target="#carouselBasicExample" data-slide-to="2" aria-label="Slide 3">
                        </li>
                    </ol>

                    <!-- Inner -->
                    <div class="carousel-inner">
                        <div data-tilt data-tilt-max="20" data-tilt-reverse="true" data-tilt-full-page-listening
                            class="main-text d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h1 data-aos="fade-right" data-aos-duration="800">
                                    Welcome To The Travel Agency </h1>
                                <h3 data-aos="fade-left" data-aos-duration="800" data-aos-delay="800">
                                    We Provide the best tours for you
                                </h3>
                                <p class="fs-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1400"
                                    style="font-size: 1.5rem;">Now Available exclusively for Lorem Ipsum</p>
                                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="1600">
                                    <!-- <a href="#" class="mu-book-now-btn mt-4 big-transition fs-3">Book Now!</a> -->
                                    <a href="#" class="btn btn-outline-light mt-2 big-transition"
                                        style="font-size: 1.75rem;">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item active">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp"
                                class="d-block w-100 zoom" alt="Sunset Over the City" />
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp"
                                class="d-block w-100 zoom" alt="Canyon at Nigh" />
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp"
                                class="d-block w-100 zoom" alt="Cliff Above a Stormy Sea" />
                        </div>
                    </div>
                    <!-- Inner -->

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-target="#carouselBasicExample"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselBasicExample"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <!-- End hero featured area -->

            </div>
        </div>
        <div class="container main-text-mobile mt-4">
            <div class="text-left">
                <h1>
                    Welcome To The Travel Agency </h1>
                <h3>
                    We Provide the best tours for you
                </h3>
                <p class="fs-4">Now Available exclusively for Lorem Ipsum</p>
            </div>
            <div>
                <a href="#" class="mu-book-now-btn mt-2 big-transition fs-3"
                    style="border: 1px solid #37b721;">Book Now!</a>
            </div>
        </div>
    </header>
    <!-- End Header -->


    <!-- Start main content -->
    <main>
        <!-- Start About -->
        <section id="mu-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-area">
                            <!-- Start Feature Content -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-about-left">
                                        <img class="" src="{{ asset('assets/images/about-us-img.jpeg') }}"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-right">
                                        <h2>About Our Agency</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam aliquam
                                            distinctio magni enim error commodi suscipit nobis alias nulla, itaque ex,
                                            vitae repellat amet neque est voluptatem iure maxime eius!</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus in
                                            accusamus qui sequi nisi, sint magni, ipsam, porro nesciunt id veritatis
                                            quaerat ipsum consequatur laborum, provident veniam quibusdam placeat quam?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Content -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Start Why Us -->
        <section id="mu-why-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-why-us-area">
                            <h2>Why Us?</h2>
                            <div class="mu-why-us-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mu-why-us-single">
                                            <div class="my-why-us-single-icon">
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                            </div>
                                            <h3>Luxurious Hotels</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum
                                                corporis commodi, ipsum sequi quae nemo quasi voluptatibus quaerat
                                                nulla! Doloribus cumque ipsum, tempore veritatis quibusdam quae numquam
                                                minus iste!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mu-why-us-single">
                                            <div class="my-why-us-single-icon">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                            </div>
                                            <h3>The Best Service</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum
                                                corporis commodi, ipsum sequi quae nemo quasi voluptatibus quaerat
                                                nulla! Doloribus cumque ipsum, tempore veritatis quibusdam quae numquam
                                                minus iste!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mu-why-us-single">
                                            <div class="my-why-us-single-icon">
                                                <i class="fa fa-plane" aria-hidden="true"></i>
                                            </div>
                                            <h3>Unique Experience</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eum
                                                corporis commodi, ipsum sequi quae nemo quasi voluptatibus quaerat
                                                nulla! Doloribus cumque ipsum, tempore veritatis quibusdam quae numquam
                                                minus iste!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us -->

        <!-- Start Video -->
        <section id="mu-video">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-video-area">
                            <h2>Watch Our Recent Trip Video</h2>
                            <p class="mu-title-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                                impedit nostrum porro possimus nesciunt voluptate, id nam. Harum deserunt nobis esse
                                iste voluptatem cumque neque quo sunt velit. Nostrum, provident!</p>

                            <!-- Start Video content -->
                            <div class="mu-video-content">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/58K5QL0x6Zo"
                                    allowfullscreen></iframe>
                            </div>
                            <!-- End Video content -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Video -->

        <!-- Start Featured Tours -->
        <section id="mu-featured-tours">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-featured-tours-area">
                            <h2>Our Featured Tours</h2>
                            <p class="mu-title-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Delectus, officia aut molestiae quod. Veritatis voluptas, possimus. Quae qui optio minus
                                dolorem fugit dolore, cum at, harum omnis sint? Saepe, asperiores.</p>

                            <!-- Start Featured Tours content -->
                            <div class="mu-featured-tours-content">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="mu-featured-tours-single">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="img">
                                            <div class="mu-featured-tours-single-info">
                                                <h3>Abu Dhabi</h3>
                                                <h4> 2 Days, 3 Nights</h4>
                                                <span class="mu-price-tag">$650</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quidem
                                                    earum sed. Sint, magnam eligendi!</p>
                                                <a href="#" class="mu-book-now-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mu-featured-tours-single">
                                            <img src="{{ asset('assets/images/thailand.jpg') }}" alt="img">
                                            <div class="mu-featured-tours-single-info">
                                                <h3>Thailand</h3>
                                                <h4> 2 Days, 3 Nights</h4>
                                                <span class="mu-price-tag">$845</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quidem
                                                    earum sed. Sint, magnam eligendi!</p>
                                                <a href="#" class="mu-book-now-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mu-featured-tours-single">
                                            <img src="{{ asset('assets/images/france.jpg') }}" alt="img">
                                            <div class="mu-featured-tours-single-info">
                                                <h3>France</h3>
                                                <h4> 2 Days, 3 Nights</h4>
                                                <span class="mu-price-tag">$450</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quidem
                                                    earum sed. Sint, magnam eligendi!</p>
                                                <a href="#" class="mu-book-now-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mu-featured-tours-single">
                                            <img src="{{ asset('assets/images/switzerland.jpg') }}" alt="img">
                                            <div class="mu-featured-tours-single-info">
                                                <h3>Switzerland</h3>
                                                <h4> 2 Days, 3 Nights</h4>
                                                <span class="mu-price-tag">$1030</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quidem
                                                    earum sed. Sint, magnam eligendi!</p>
                                                <a href="#" class="mu-book-now-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mu-featured-tours-single">
                                            <img src="{{ asset('assets/images/italy.jpg') }}" alt="img">
                                            <div class="mu-featured-tours-single-info">
                                                <h3>Italy</h3>
                                                <h4> 2 Days, 3 Nights</h4>
                                                <span class="mu-price-tag">$650</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quidem
                                                    earum sed. Sint, magnam eligendi!</p>
                                                <a href="#" class="mu-book-now-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mu-featured-tours-single">
                                            <img src="{{ asset('assets/images/england.jpg') }}" alt="img">
                                            <div class="mu-featured-tours-single-info">
                                                <h3>England</h3>
                                                <h4> 2 Days, 3 Nights</h4>
                                                <span class="mu-price-tag">$950</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quidem
                                                    earum sed. Sint, magnam eligendi!</p>
                                                <a href="#" class="mu-book-now-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Featured Tours content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Tours -->

        <!-- Start Client Testimonials -->
        <section id="mu-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-testimonials-area">
                            <h2>What Our Travelers Says</h2>

                            <div class="mu-testimonials-block">
                                <ul class="mu-testimonial-slide">

                                    <li>
                                        <i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
                                        <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever."</p>
                                        <img class="mu-rt-img" src="{{ asset('assets/images/traveler-1.jpg') }}"
                                            alt="img">
                                        <h5 class="mu-rt-name"> - Alice Boga</h5>
                                        <span class="mu-rt-title">Zurich, Switzerland </span>
                                    </li>

                                    <li>
                                        <i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
                                        <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever."</p>
                                        <img class="mu-rt-img" src="{{ asset('assets/images/traveler-2.jpg') }}"
                                            alt="img">
                                        <h5 class="mu-rt-name"> - Jhon Doe</h5>
                                        <span class="mu-rt-title">Pattaya., Thailand</span>
                                    </li>

                                    <li>
                                        <i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
                                        <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever."</p>
                                        <img class="mu-rt-img" src="{{ asset('assets/images/traveler-3.jpg') }}"
                                            alt="img">
                                        <h5 class="mu-rt-name"> - Jessica Doe</h5>
                                        <span class="mu-rt-title">Bali, Indonesia</span>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Testimonials -->

        <!-- Start Clients -->
        <section id="mu-clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-clients-area">
                            <h2>Our Awesome Clients</h2>

                            <!-- Start Clients brand logo -->
                            <div class="mu-clients-slider">

                                <div class="mu-clients-single">
                                    <img src="{{ asset('assets/images/sponsor-logo-1.png') }}" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="{{ asset('assets/images/sponsor-logo-2.png') }}" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="{{ asset('assets/images/sponsor-logo-3.png') }}" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="{{ asset('assets/images/sponsor-logo-4.png') }}" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="{{ asset('assets/images/sponsor-logo-5.png') }}" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="{{ asset('assets/images/sponsor-logo-6.png') }}" alt="Brand Logo">
                                </div>
                            </div>
                            <!-- End Clients brand logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients -->

        <!-- Start Call to Action -->
        <section id="mu-callto-action">
            <div class="container">
                <div class="row col-md-12">
                    <div class="mu-callto-action-area">
                        <h2>Explore the world by making journey with us</h2>
                        <a class="mu-book-now-btn" href="#">Start Journey</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Call to Action -->

        <!-- Start Contact -->
        <section id="mu-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-contact-area">
                            <h2>Contact Us</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever</p>

                            <!-- Start Contact Content -->
                            <div class="mu-contact-content">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mu-contact-form-area">
                                            <div id="form-messages"></div>
                                            <form id="ajax-contact" method="post" action="mailer.php"
                                                class="mu-contact-form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Name" id="name" name="name"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder="Enter Email" id="email"
                                                                name="email" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Your Subject" id="subject" name="subject"
                                                        required>
                                                </div>

                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
                                                </div>
                                                <button type="submit" class="mu-send-msg-btn"><span>Send
                                                        Message</span></button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Contact Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Start Google Map -->

        <div id="mu-google-map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.8176744277202!2d-81.47150788457147!3d28.424757900613237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77e378ec5a9a9%3A0x2feec9271ed22c5b!2sOrange+County+Convention+Center!5e0!3m2!1sen!2sbd!4v1503833952781" width="850" height="450" allowfullscreen></iframe> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.9849115472457!2d115.23315677083276!3d-8.670589179280855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f51f1412a5%3A0xa7e549b0b86dc50e!2sLapangan%20Puputan%20Renon!5e0!3m2!1sid!2sid!4v1681191178920!5m2!1sid!2sid"
                width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- End Google Map -->

    </main>

    <!-- End main content -->


    <!-- Start footer -->
    <footer id="mu-footer">
        <div class="container">
            <div class="mu-footer-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mu-footer-left">
                            <p class="mu-copy-right">&copy; Copyright <a rel="nofollow"
                                    href="http://markups.io">markups.io</a>. All right reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mu-footer-right">
                            <div class="mu-social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End footer -->


    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>



    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vanila-tilt.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"
        integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            AOS.init();
        });
    </script>

</body>

</html>
