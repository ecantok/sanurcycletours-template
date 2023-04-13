    <!-- Start Header -->
    <header class="d-flex flex-column">
        <div id="mu-hero" class="w-100 pr-0 pl-0">
            <div class="mu-hero-area">
                <div id="headerNavbar" class="mu-hero-top">
                    <!-- Start center Logo -->
                    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                        <a class="logo" href="index.html">
                            <img src="{{ asset('assets/images/cycle-logo.jpg') }}" alt="logo">
                        </a>
                        {{-- <!-- Uncomment this code if you want to add the site name after site logo --> --}}
                        {{-- <h1>{{ Site Name }}</h1> --}}
                        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
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
                        <div class="carousel-inner carousel-header" style="height: 240px">

                            <!-- Single item -->
                            <div class="carousel-item active" >
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp"
                                    class="d-block w-100 zoom" alt="Sunset Over the City" />
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item" >
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp"
                                    class="d-block w-100 zoom" alt="Canyon at Nigh" />
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item" >
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
                @endif
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