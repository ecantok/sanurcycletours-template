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
                                    <img class="" src="{{ asset('assets/images/about-us-img.webp') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-about-right bg-maroon">
                                    <h2 class="text-yellow text-shadow">About Sanur Cycle Tours</h2>
                                    <p class="text-yellow">
                                        “Sanur Cycle Tours” is a100% locally owned and operated business based in central
                                        Sanur and we would like to show you the real Sanur village & Bali with our 3 to 4
                                        hour local tours as well as our longer & multi-day adventure cycling Tours. Join us
                                        as we take you on a leisurely ride thru the village of Sanur introducing you to
                                        village locals and the Balinese culture. Or allow us to share the real Bali & Nusa
                                        Penida Island with you on our specialised Adventure rides! <a class="link"
                                            href="{{ route('frontpage.about') }}">Read more...</a>
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
    <section id="mu-why-us" class="bg-maroon-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-why-us-area">
                        <h2 class="text-yellow text-shadow">Why Us?</h2>
                        <div class="mu-why-us-content bg-maroon-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-why-us-single-icon">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    </div>
                                    <h3 class="text-yellow">The Best Service</h3>
                                    <p class="text-yellow">
                                        “Sanur Cycle Tours “has been operating since 2012. We started with 1 local tour
                                        of rural Sanur & now have 21 various cycling tours of both Bali & Nusa Penida
                                        Island.
                                        <br>
                                        <br>
                                        Since we started our genuine Bali cycling tours in 2012, we have only used
                                        Balinese or Indonesian made products ie; Polygon Bikes”, “Toska cycling
                                        jerseys”.(As can be seen with our special crew jerseys that support Poleng
                                        sleeves & the local Frangipani flower). We also utilise Balinese run warungs &
                                        accommodation houses” This makes us stand out from the big cycling companies!
                                        <br>
                                        <br>
                                        So, we try to support the local Balinese businesses as much as we can. Which is
                                        the reason that people visit Bali in the first place ( For the real Balinese
                                        feel, their warmth & hospitality & for their unique culture).
                                    </p>
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
                        <h2 class="text-yellow text-shadow">Watch Our Recent Trip Video</h2>
                        <p class="mu-title-content text-yellow">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Eum
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
    <section id="mu-featured-tours bg-maroon">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-featured-tours-area">
                        <h2 class="text-yellow text-shadow mt-4">Our New Tours</h2>
                        <p class="mu-title-content text-yellow">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Delectus, officia aut molestiae quod. Veritatis voluptas, possimus. Quae qui optio minus
                            dolorem fugit dolore, cum at, harum omnis sint? Saepe, asperiores.</p>

                        <!-- Start Featured Tours content -->
                        <div class="mu-featured-tours-content">
                            <div class="row">
                                @foreach ($tours as $tour)
                                    <div class="col-md-4 mb-3">
                                        <div class="mu-featured-tours-single bg-maroon-1">
                                            @if (!blank($tour->images))
                                                <img src="{{ asset($tour->images->first()->path) }}" alt="img"
                                                    class="w-100 h-100" style="max-height: 300px; min-height: 300px;">
                                            @else
                                                <img src="{{ asset('assets/images/default-thumbnail.webp') }}"
                                                    alt="img" class="w-100 h-100"
                                                    style="max-height: 300px; min-height: 300px;">
                                            @endif
                                            <div class="mu-featured-tours-single-info">
                                                <h3 class="text-yellow">{{ title_filter($tour->name) }}</h3>
                                                <div class="text-yellow">{!! str_limit($tour->content, 200) !!}</div>
                                                <a href="{{ route('frontpage.tour.detail', $tour->slug) }}"
                                                    class="float-start mu-book-now-btn text-yellow">Detail</a>
                                                <a href="{{ route('frontpage.booking') }}"
                                                    class="mu-book-now-btn text-yellow">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Featured Tours content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Tours -->

    <!-- Start Contact -->
    <section id="mu-contact bg-maroon">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <h2 class="text-yellow text-shadow">Contact Us</h2>
                        <p class="text-yellow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum
                            has been the industry's standard dummy text ever</p>

                        <!-- Start Contact Content -->
                        <div class="mu-contact-content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mu-contact-form-area">
                                        <div id="form-messages"></div>
                                        <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name"
                                                            id="name" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Enter Email"
                                                            id="email" name="email" required>
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
                                            <button type="submit" class="mu-send-msg-btn bg-maroon-1"><span>Send
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1435.2086552289873!2d115.25297091130547!3d-8.708602779937895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241c7a57e3203%3A0x33975af2565cd6bc!2sSanur%20Cycle%20Tours!5e0!3m2!1sid!2sid!4v1682311211439!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- End Google Map -->
@endsection
