@extends('layouts.frontapp')

@section('title', 'Our Bicycle')

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">OUR BICYCLE</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Start Feature Content -->
                        <div class="row">
                            @foreach ($bicycles as $bicycle)
                                <div class="col-md-4 mb-3">
                                    <div class="mu-featured-tours-single bg-maroon-1">
                                        <img src="{{ asset($bicycle->path) }}" alt="img" class="w-100 h-100"
                                            style="max-height: 300px; min-height: 300px;">
                                        <div class="mu-featured-tours-single-info">
                                            <h3 class="text-yellow">{{ $bicycle->name }}</h3>
                                            <p class="text-yellow">{{ $bicycle->description }}</p>
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
