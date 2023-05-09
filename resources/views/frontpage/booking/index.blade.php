@extends('layouts.frontapp')

@section('title', 'Booking')

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">BOOK A CYCLE TOUR ONLINE</h2>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4 class="text-center text-yellow">Sanur Cycle Tours Booking Form</h4>
                    <form action="{{ route('frontpage.tour.book') }}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <small class="text-yellow">
                                    If you would like to book a cycle tour please use this form
                                    (All items marked <span class="text-danger">*</span> are required fields)
                                </small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label text-yellow">Name<span
                                    class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control bg-maroon text-yellow @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-yellow">Email Address<span
                                    class="text-danger">*</span></label>
                            <input type="email"
                                class="form-control bg-maroon text-yellow @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label text-yellow">Phone Number<span
                                    class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control bg-maroon text-yellow @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="staying-sanur" class="form-label text-yellow">
                                Where are you staying in Sanur (including address) ?<span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control bg-maroon text-yellow @error('staying_sanur') is-invalid @enderror" id="staying-sanur"
                                name="staying_sanur">{{ old('staying_sanur') }}</textarea>
                            @error('staying_sanur')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="room" class="form-label text-yellow">Room Number</label>
                            <input type="number"
                                class="form-control bg-maroon text-yellow @error('room') is-invalid @enderror"
                                id="room" name="room" value="{{ old('room') }}">
                            @error('room')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <hr class="text-yellow fw-bold">

                        <div class="mb-3">
                            <label for="tour-id" class="form-label text-yellow">Select Tour<span
                                    class="text-danger">*</span></label>
                            <select class="form-select text-yellow bg-maroon @error('tour_id') is-invalid @enderror"
                                name="tour_id" id="tour-id">
                                <option class="text-yellow bg-maroon" value="" hidden selected>Select Tour Package
                                </option>
                                @foreach ($tours as $tour)
                                    <option class="text-yellow bg-maroon" value="{{ $tour->id }}"
                                        {{ old('tour_id') == $tour->id ? 'selected' : '' }}>
                                        {{ title_filter($tour->name) }} <b>Rp.
                                            {{ number_format($tour->adult_price) }}</b>
                                    </option>
                                @endforeach
                            </select>
                            @error('tour_id')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label text-yellow">Preferred Tour Date</label>
                            <input type="date"
                                class="form-control bg-maroon text-yellow @error('date') is-invalid @enderror"
                                id="date" name="date" value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="adult" class="form-label text-yellow">How many Adults are attending ?<span
                                    class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control bg-maroon text-yellow @error('adult') is-invalid @enderror"
                                id="adult" name="adult" value="{{ old('adult') }}">
                            @error('adult')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="child" class="form-label text-yellow">Any Children are attending ?<span
                                    class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control bg-maroon text-yellow @error('child') is-invalid @enderror"
                                id="child" name="child" value="{{ old('child') }}">
                            @error('child')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="child-age" class="form-label text-yellow">Child ages</label>
                            <input type="number"
                                class="form-control bg-maroon text-yellow @error('child_age') is-invalid @enderror"
                                id="child-age" name="child_age" value="{{ old('child_age') }}">
                            @error('child_age')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="long-cycle" class="form-label text-yellow">
                                Height of the cyclists (in centimeters)?
                            </label>
                            <input type="number"
                                class="form-control bg-maroon text-yellow @error('long_cycle') is-invalid @enderror"
                                id="long-cycle" name="long_cycle" value="{{ old('long_cycle') }}">
                            @error('long_cycle')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="special-req" class="form-label text-yellow">
                                Is there anything else you would like to ask/tell us?
                            </label>
                            <textarea class="form-control bg-maroon text-yellow @error('special_req') is-invalid @enderror" id="special-req"
                                name="special_req">{{ old('special_req') }}</textarea>
                            @error('special_req')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hear-sanurcycle" class="form-label text-yellow">
                                Where did you hear about Sanur Cycle Tours ?
                            </label>
                            <input type="text"
                                class="form-control bg-maroon text-yellow @error('hear_sanurcycle') is-invalid @enderror"
                                id="hear-sanurcycle" name="hear_sanurcycle" value="{{ old('hear_sanurcycle') }}">
                            @error('hear_sanurcycle')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <p class="text-yellow fw-bold">
                                Note : If paying a deposit for our tours when you are in Bali. Do not
                                forget to turn your roaming on to enable the booking verification code to be sent to you
                            </p>
                        </div>

                        <button type="submit" class="mu-book-now-btn text-yellow w-100 text-center mb-5">Book
                            Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if (session('show') == 'true')
        <!-- Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-maroon">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-yellow" id="confirmationModalLabel">Booking Confirmation</h1>
                        <button type="button" class="btn-close text-yellow" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-yellow">
                        <form action="" method="post" id="billing-form">
                            @csrf

                            <h3 class="text-center">Review Tour</h3>
                            <h4 id="tour-name">{{ title_filter(session('booking')->tour->name) }} <b>Rp.
                                    {{ number_format(session('booking')->tour->adult_price) }}</b> </h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="fw-bold">Tour Date</p>
                                    <p id="modal-date">{{ session('booking')->date?->format('d-m-Y') }}</p>
                                </div>

                                <div class="col-lg-4">
                                    <p class="fw-bold">Adult</p>
                                    <p id="modal-adult">{{ session('booking')->adult }}</p>
                                </div>

                                <div class="col-lg-4">
                                    <p class="fw-bold">Child</p>
                                    <p id="modal-child">{{ session('booking')->child }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="fw-bold">Total Price</h6>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="fw-bold float-end" id="total-price">Rp.
                                        {{ number_format(session('booking')->total_price) }}</h6>
                                </div>
                            </div>

                            <div class="row text-danger">
                                <div class="col-lg-6">
                                    <h6 class="fw-bold">Deposit 25%</h6>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="fw-bold float-end" id="total-deposit">Rp.
                                        {{ number_format(session('booking')->total_dp) }}</h6>
                                </div>
                            </div>

                            <hr class="text-yellow">

                            <h3 class="text-center">Billing Information</h3>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="billing-name" class="form-label text-yellow">Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-maroon text-yellow"
                                            id="billing-name" name="billing_name"
                                            value="{{ session('booking')->name }}">
                                        <small class="text-danger billing_name-error-feedback"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="billing-email" class="form-label text-yellow">Email Address<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control bg-maroon text-yellow"
                                            id="billing-email" name="billing_email"
                                            value="{{ session('booking')->email }}">
                                        <small class="text-danger billing_email-error-feedback"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="billing-phone" class="form-label text-yellow">Phone<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control bg-maroon text-yellow"
                                            id="billing-phone" name="billing_phone"
                                            value="{{ session('booking')->phone }}">
                                        <small class="text-danger billing_phone-error-feedback"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="billing-country" class="form-label text-yellow">Country<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select text-yellow bg-maroon" name="billing_country"
                                            id="billing-country">
                                            <option class="text-yellow bg-maroon" value="" hidden selected>Select
                                                Your
                                                Country
                                            </option>
                                            @foreach ($countries as $country)
                                                <option class="text-yellow bg-maroon"
                                                    value="{{ $country->country_code }}">
                                                    {{ $country->country_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger billing_country-error-feedback"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="billing-state" class="form-label text-yellow">State<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-maroon text-yellow"
                                            id="billing-state" name="billing_state">
                                        <small class="text-danger billing_state-error-feedback"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="billing-city" class="form-label text-yellow">City<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-maroon text-yellow"
                                            id="billing-city" name="billing_city">
                                        <small class="text-danger billing_city-error-feedback"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="billing-poscode" class="form-label text-yellow">Pos Code<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control bg-maroon text-yellow"
                                            id="billing-poscode" name="billing_poscode">
                                        <small class="text-danger billing_poscode-error-feedback"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="billing-address" class="form-label text-yellow">Address<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-maroon text-yellow"
                                            id="billing-address" name="billing_address">
                                        <small class="text-danger billing_address-error-feedback"></small>
                                    </div>
                                </div>
                            </div>

                            <h6 class="text-danger">NOTE</h6>
                            <ul class="text-danger ms-5">
                                <li>Please make sure your credit card is using 3D Secure</li>
                                <li>If you are here in Bali, please make sure your roaming of your mobile phone is off to
                                    obtain the verification code</li>
                            </ul>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="billing-book-button" form="billing-form">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('js')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <script>
        $(document).ready(function() {
            $('#confirmationModal').modal('show');

            $('#billing-book-button').click(function() {
                $.ajax({
                    url: "{{ route('frontpage.form.billing.validation') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        billing_name: $('#billing-name').val(),
                        billing_email: $('#billing-email').val(),
                        billing_phone: $('#billing-phone').val(),
                        billing_country: $('#billing-country').val(),
                        billing_state: $('#billing-state').val(),
                        billing_city: $('#billing-city').val(),
                        billing_poscode: $('#billing-poscode').val(),
                        billing_address: $('#billing-address').val(),
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response.error) {
                            response.error.billing_name ? $('.billing_name-error-feedback')
                                .text(response.error.billing_name[0]) :
                                $('.billing_name-error-feedback').text('');

                            response.error.billing_email ? $('.billing_email-error-feedback')
                                .text(response.error.billing_email[0]) :
                                $('.billing_email-error-feedback').text('');

                            response.error.billing_phone ? $('.billing_phone-error-feedback')
                                .text(response.error.billing_phone[0]) :
                                $('.billing_phone-error-feedback').text('');

                            response.error.billing_country ?
                                $('.billing_country-error-feedback').text(response.error
                                    .billing_country[0]) :
                                $('.billing_country-error-feedback').text('');

                            response.error.billing_state ? $('.billing_state-error-feedback')
                                .text(response.error.billing_state[0]) :
                                $('.billing_state-error-feedback').text('');

                            response.error.billing_city ? $('.billing_city-error-feedback')
                                .text(response.error.billing_city[0]) :
                                $('.billing_city-error-feedback').text('');

                            response.error.billing_poscode ?
                                $('.billing_poscode-error-feedback').text(response.error
                                    .billing_poscode[0]) :
                                $('.billing_poscode-error-feedback').text('');

                            response.error.billing_address ?
                                $('.billing_address-error-feedback').text(response.error
                                    .billing_address[0]) :
                                $('.billing_address-error-feedback').text('');

                            alert('please check the form again');
                        } else {
                            $.ajax({
                                url: "{{ route('frontpage.generate.snap.token') }}",
                                method: "POST",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    billing_name: $('#billing-name').val(),
                                    billing_email: $('#billing-email').val(),
                                    billing_phone: $('#billing-phone').val(),
                                    billing_country: $('#billing-country').val(),
                                    billing_state: $('#billing-state').val(),
                                    billing_city: $('#billing-city').val(),
                                    billing_poscode: $('#billing-poscode').val(),
                                    billing_address: $('#billing-address').val(),
                                    booking_id: "{{ session('booking')?->id }}",
                                },
                                success: function(response) {
                                    snap.pay(response, {
                                        onSuccess: function(result) {
                                            console.log(result)
                                        },
                                        onPending: function(result) {
                                            console.log(result)
                                        },
                                        onError: function(result) {
                                            console.log(result)
                                        }
                                    });
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            });
        });
    </script>
@endpush
