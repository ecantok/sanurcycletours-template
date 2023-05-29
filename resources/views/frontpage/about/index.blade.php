@extends('layouts.frontapp')

@section('title', 'About Us')

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">ABOUT US</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Start Feature Content -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-about-left">
                                    <img class="" src="{{ asset('assets/images/lined-up-cycle.webp') }}"
                                        alt="img">
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
                                        Penida Island with you on our specialised Adventure rides!
                                    </p>
                                    @if (Request::input('show') == true)
                                        <p class="text-yellow">
                                            There is much more to Sanur Village than just the tourist strip! “Sanur Cycle
                                            Tours” offers several tours around this bustling community.
                                        </p>
                                        <ul class="mb-3 text-yellow">
                                            <li class="text-yellow">
                                                Our “<a class="link"
                                                    href="https://sanurcycletours.com/index.php?page=jurassicpark">Jurassic
                                                    Park Tour</a>” visits the abandoned ghost town of "Taman Festival" as
                                                well as riding along the 7 km beach path experiencing Sanur's wonderful
                                                sunrises.
                                            </li>
                                            <li class="text-yellow">
                                                The “<a class="link"
                                                    href="https://sanurcycletours.com/index.php?page=morningtour">Morning
                                                    Tour</a>” is a leisurely ride of around 3 - 4 hours visiting the
                                                traditional morning markets in Intaran, riding along beautiful rice fields,
                                                visiting Sanur's own Beatles mania Cavern.
                                                Enjoying a traditional breakfast purchased by our guides at “Warung
                                                Belissimo” in Sanur and finally, exploring the local
                                            </li>
                                            <li class="text-yellow">
                                                Our “<a class="link"
                                                    href="https://sanurcycletours.com/index.php?page=afternoontour">Afternoon
                                                    Tour</a>” which covers the same as our morning tour but begins in the
                                                afternoon for the not so early risers.
                                            </li>
                                            <li class="text-yellow">
                                                Our new “<a class="link"
                                                    href="https://sanurcycletours.com/index.php?page=afternoondrinkstour">Afternoon
                                                    drinks tour</a>" This covers some other areas of Sanur while enjoying a
                                                cold drink at several establishments during your 3 hour tour.
                                            </li>
                                        </ul>
                                        <p>
                                            For the adventurous and keen cyclists, choose one of our new Ubud tours. Where,
                                            you cycle from Sanur to Ubud via small, serviced roads and rice fields.
                                        </p>

                                        <p>
                                            For the real adventure seekers & Diehards of cycling Why not try our special
                                            Jatiluwih rides or our multi-day tours of both Bali & Nusa Penida.
                                            We promise you that we can show you the Bali that no one gets to see.
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Feature Content -->

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-9">
                    <p class="text-yellow">
                        There is much more to Sanur Village than just the tourist strip! “Sanur Cycle Tours” offers several
                        tours around this bustling community.
                    </p>
                    <ul class="mb-3">
                        <li class="text-yellow">
                            Our “<a class="link" href="https://sanurcycletours.com/index.php?page=jurassicpark">Jurassic
                                Park Tour</a>” visits the abandoned ghost town of "Taman Festival" as well as riding along
                            the 7 km beach path experiencing Sanur's wonderful sunrises.
                        </li>
                        <li class="text-yellow">
                            The “<a class="link" href="https://sanurcycletours.com/index.php?page=morningtour">Morning
                                Tour</a>” is a leisurely ride of around 3 - 4 hours visiting the traditional morning markets
                            in Intaran, riding along beautiful rice fields, visiting Sanur's own Beatles mania Cavern.
                            Enjoying a traditional breakfast purchased by our guides at “Warung Belissimo” in Sanur and
                            finally, exploring the local
                        </li>
                        <li class="text-yellow">
                            Our “<a class="link" href="https://sanurcycletours.com/index.php?page=afternoontour">Afternoon
                                Tour</a>” which covers the same as our morning tour but begins in the afternoon for the not
                            so early risers.
                        </li>
                        <li class="text-yellow">
                            Our new “<a class="link"
                                href="https://sanurcycletours.com/index.php?page=afternoondrinkstour">Afternoon drinks
                                tour</a>" This covers some other areas of Sanur while enjoying a cold drink at several
                            establishments during your 3 hour tour.
                        </li>
                        <li class="text-yellow">
                            For the adventurous and keen cyclists, choose one of our new Ubud tours. Where, you cycle from
                            Sanur
                            to Ubud via small, serviced roads and rice fields.
                        </li>
                        <li class="text-yellow">
                            For the real adventure seekers & Diehards of cycling Why not try our special
                            Jatiluwih rides or our multi-day tours of both Bali & Nusa Penida.
                        </li>
                    </ul>

                    <p class="text-yellow fw-bold">
                        We promise you that we can show you the Bali that no one gets to see.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
