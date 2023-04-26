@extends('layouts.frontapp')

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">GALLERY</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Start Feature Content -->
                        <nav>
                            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                                <button class="nav-link active text-yellow fw-bold" id="photo-gallery-tab"
                                    data-bs-toggle="tab" data-bs-target="#photo-gallery" type="button" role="tab"
                                    aria-controls="photo-gallery" aria-selected="true">Photo Gallery</button>
                                <button class="nav-link text-yellow fw-bold" id="video-gallery-tab" data-bs-toggle="tab"
                                    data-bs-target="#video-gallery" type="button" role="tab"
                                    aria-controls="video-gallery" aria-selected="false">Video Gallery</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="photo-gallery" role="tabpanel"
                                aria-labelledby="photo-gallery-tab">
                                <div class="row mt-2">
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 mb-3">
                                        <a href="{{ asset('assets/images/dubai.jpg') }}" data-lightbox="image-1"
                                            data-title="My caption">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="video-gallery" role="tabpanel"
                                aria-labelledby="video-gallery-tab">
                                <div class="row mt-2">
                                    <div class="col-lg-4 mb-3">
                                        <a href="">
                                            <img src="{{ asset('assets/images/dubai.jpg') }}" alt="video-thumbnail"
                                                class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Feature Content -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
