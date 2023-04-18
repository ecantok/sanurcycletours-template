@extends('layouts.frontapp')

@section('content')
    <!-- Start Contact -->
    <section id="mu-contact">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                  <img src="{{ asset('assets/images/cycle-logo.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 content order-last order-lg-first">
                  <h3>{{ $about->title }}</h3>
                  {!! $about->overview !!}
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->
@endsection
