@extends('layouts.frontapp')

@section('title', title_filter($tour->name))

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">{{ title_filter($tour->name) }}</h2>

            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-yellow">{{ $tour->name }}</h5>

                    <div class="text-yellow content">
                        @if (!blank($tour->images))
                            <div class="splide col-md-3 float-end ms-3" aria-label="Splide Basic HTML Example">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($tour->images as $image)
                                            <li class="splide__slide" style="max-height: 400px;">
                                                <img src="{{ asset($image->path) }}" alt="image"
                                                    class="w-100 h-100 img-responsive">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        {!! $tour->content !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/splide/css/splide.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/splide/js/splide.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                pauseOnHover: false,
                interval: 3000,
            }).mount();
        });
    </script>
@endpush
