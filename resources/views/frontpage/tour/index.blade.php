@extends('layouts.frontapp')

@section('title', 'Tours')

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">TOURS</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Start Feature Content -->
                        <div class="row">
                            @foreach ($tours as $tour)
                                <div class="col-md-4 mb-3">
                                    <div class="mu-featured-tours-single bg-maroon-1">
                                        @if (!blank($tour->images))
                                            <img src="{{ asset($tour->images->first()->path) }}" alt="img"
                                                class="w-100 h-100" style="max-height: 300px; min-height: 300px;">
                                        @else
                                            <img src="{{ asset('assets/images/default-thumbnail.webp') }}" alt="img"
                                                class="w-100 h-100" style="max-height: 300px; min-height: 300px;">
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
                    <!-- End Feature Content -->
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
