@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12 mb-3">
                <h3 class="fw-bold"><u>{{ $tour->name }}</u>
                    <a href="{{ route('admin.tour.edit', $tour->slug) }}"><i class="bi bi-pencil-square"></i></a>
                </h3>

                <div class="content">
                    @if (!blank($tour->images))
                        <div class="splide col-md-3 float-right" aria-label="Splide Basic HTML Example">
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
