@extends('layouts.frontapp')

@section('content')
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
                                    <img class="" src="{{ asset('assets/images/about-us-img.jpeg') }}" alt="img">
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
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/-DQo0Ccacy8"
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
                        <h2 style="position: relative">What Our Travelers Says</h2>

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
                                                        <input type="text" class="form-control" placeholder="Name"
                                                            id="name" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter Email" id="email" name="email"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Subject"
                                                    id="subject" name="subject" required>
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
@endsection
