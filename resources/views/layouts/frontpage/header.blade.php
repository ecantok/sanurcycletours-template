    <!-- Start Header -->
    @if (session()->has('success'))
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container top-0 end-0 p-3">
                <div class="toast align-items-center bg-maroon" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body text-yellow">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <header class="d-flex flex-column">
        <div id="mu-hero" class="w-100 pr-0 pl-0 mb-4">
            <div class="mu-hero-area">
                <div id="headerNavbar" class="mu-hero-top">
                    <!-- Start center Logo -->
                    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                        <a class="logo" href="{{ route('frontpage.home') }}">
                            <img src="{{ asset('assets/images/cycle-logo.webp') }}" alt="logo">
                        </a>
                        {{-- <!-- Uncomment this code if you want to add the site name after site logo --> --}}
                        <i class="mobile-nav-toggle mobile-nav-show bi bi-list text-yellow text-shadow"></i>
                        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x text-yellow text-shadow"></i>
                        @include('layouts.frontpage.navbar')
                    </div>
                </div>
                @if (request()->routeIs('frontpage.home'))
                    <!-- Start hero featured area -->
                    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li type="button" data-target="#carouselBasicExample" data-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></li>
                            <li type="button" data-target="#carouselBasicExample" data-slide-to="1"
                                aria-label="Slide 2">
                            </li>
                            <li type="button" data-target="#carouselBasicExample" data-slide-to="2"
                                aria-label="Slide 3">
                            </li>
                        </ol>

                        <!-- Inner -->
                        <div class="carousel-inner">
                            <div data-tilt data-tilt-max="20" data-tilt-reverse="true" data-tilt-full-page-listening
                                class="main-text d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <h1 data-aos="fade-right" data-aos-duration="800" class="text-yellow text-shadow">
                                        Welcome To Sanur Cycle Tours </h1>
                                    <h3 data-aos="fade-left" data-aos-duration="800" data-aos-delay="800"
                                        class="text-yellow text-shadow">
                                        We Provide the best tours for you
                                    </h3>
                                    <p class="fs-4 text-yellow text-shadow" data-aos="fade-up" data-aos-duration="800"
                                        data-aos-delay="1400" style="font-size: 1.5rem;">Your adventure cycling tours of
                                        Sanur, Bali & Beyond.</p>
                                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="1600">
                                        <a href="{{ route('frontpage.booking') }}"
                                            class="btn btn-outline-light mt-2 big-transition text-yellow text-shadow btn-book"
                                            style="font-size: 1.75rem;">Book Now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/homepage.webp') }}" class="zoom"
                                    alt="Sunset Over the City" />
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
                @else
                    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li type="button" data-target="#carouselBasicExample" data-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></li>
                            <li type="button" data-target="#carouselBasicExample" data-slide-to="1"
                                aria-label="Slide 2">
                            </li>
                            <li type="button" data-target="#carouselBasicExample" data-slide-to="2"
                                aria-label="Slide 3">
                            </li>
                        </ol>

                        <!-- Inner -->
                        <div class="carousel-inner" style="height: 240px">

                            <!-- Single item -->
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/homepage.webp') }}" alt="Sunset Over the City" />
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
                @endif
                <!-- End hero featured area -->

            </div>
        </div>
        @if (request()->routeIs('frontpage.home'))
            <div class="container main-text-mobile">
                <div class="text-left">
                    <h1 class="text-yellow text-shadow">
                        Welcome To The Travel Agency </h1>
                    <h3 class="text-yellow text-shadow">
                        We Provide the best tours for you
                    </h3>
                    <p class="fs-4 text-yellow text-shadow">Now Available exclusively for Lorem Ipsum</p>
                </div>
                <div>
                    <a href="{{ route('frontpage.booking') }}"
                        class="mu-book-now-btn mt-2 big-transition fs-3 btn-book text-yellow">Book
                        Now!</a>
                </div>
            </div>
        @endif
    </header>
    <!-- End Header -->
