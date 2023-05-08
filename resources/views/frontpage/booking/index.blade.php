@extends('layouts.frontapp')

@section('title', 'Booking')

@section('content')
    <form action="" class="mb-5" id="booking-form">
        <section id="main-cont" class="bg-maroon">
            <div class="container">
                <h2 class="welcome text-yellow text-shadow">BOOK A CYCLE TOUR ONLINE</h2>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4 class="text-center text-yellow">Sanur Cycle Tours Booking Form</h4>
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
                            <input type="text" class="form-control bg-maroon text-yellow" id="name" name="name">
                            <small class="text-danger name-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-yellow">Email Address<span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control bg-maroon text-yellow" id="email" name="email">
                            <small class="text-danger email-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label text-yellow">Phone Number<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control bg-maroon text-yellow" id="phone" name="phone">
                            <small class="text-danger phone-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="staying-sanur" class="form-label text-yellow">
                                Where are you staying in Sanur (including address) ?<span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control bg-maroon text-yellow" id="staying-sanur" name="stying_sanur"></textarea>
                            <small class="text-danger staying_sanur-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="room" class="form-label text-yellow">Room Number</label>
                            <input type="number" class="form-control bg-maroon text-yellow" id="room" name="room">
                        </div>

                        <hr class="text-yellow fw-bold">

                        <div class="mb-3">
                            <label for="tour-id" class="form-label text-yellow">Select Tour<span
                                    class="text-danger">*</span></label>
                            <select class="form-select text-yellow bg-maroon" name="tour_id" id="tour-id">
                                <option class="text-yellow bg-maroon" value="" hidden selected>Select Tour Package
                                </option>
                                @foreach ($tours as $tour)
                                    <option class="text-yellow bg-maroon" value="{{ $tour->id }}">
                                        {{ title_filter($tour->name) }} <b>Rp.
                                            {{ number_format($tour->adult_price) }}</b>
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-danger tour_id-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label text-yellow">Preferred Tour Date</label>
                            <input type="date" class="form-control bg-maroon text-yellow" id="date" name="date">
                        </div>

                        <div class="mb-3">
                            <label for="adult" class="form-label text-yellow">How many Adults are attending ?<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control bg-maroon text-yellow" id="adult" name="adult">
                            <small class="text-danger adult-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="child" class="form-label text-yellow">Any Children are attending ?<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control bg-maroon text-yellow" id="child" name="child">
                            <small class="text-danger child-error-feedback"></small>
                        </div>

                        <div class="mb-3">
                            <label for="child-age" class="form-label text-yellow">Child ages</label>
                            <input type="number" class="form-control bg-maroon text-yellow" id="child-age"
                                name="child_age">
                        </div>

                        <div class="mb-3">
                            <label for="long-cycle" class="form-label text-yellow">
                                Height of the cyclists (in centimeters)?
                            </label>
                            <input type="number" class="form-control bg-maroon text-yellow" id="long-cycle"
                                name="long_cycle">
                        </div>

                        <div class="mb-3">
                            <label for="special-req" class="form-label text-yellow">
                                Is there anything else you would like to ask/tell us?
                            </label>
                            <textarea class="form-control bg-maroon text-yellow" id="special-req" name="special_req"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="hear-sanurcycle" class="form-label text-yellow">
                                Where did you hear about Sanur Cycle Tours ?
                            </label>
                            <input type="text" class="form-control bg-maroon text-yellow" id="hear-sanurcycle"
                                name="hear_sanurcycle">
                        </div>

                        <div class="mb-3">
                            <p class="text-yellow fw-bold">
                                Note : If paying a deposit for our tours when you are in Bali. Do not
                                forget to turn your roaming on to enable the booking verification code to be sent to you
                            </p>
                        </div>

                        <a href="javascript:void(0)" class="mu-book-now-btn text-yellow w-100 text-center"
                            id="book-button">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
                        <h3 class="text-center">Review Tour</h3>
                        <h4 id="tour-name">Tour Name</h4>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="fw-bold">Tour Date</p>
                                <p id="modal-date">date</p>
                            </div>

                            <div class="col-lg-4">
                                <p class="fw-bold">Adult</p>
                                <p id="modal-adult">adult</p>
                            </div>

                            <div class="col-lg-4">
                                <p class="fw-bold">Child</p>
                                <p id="modal-child">child</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="fw-bold">Total Price</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="fw-bold float-end" id="total-price">Rp. total_price</h6>
                            </div>
                        </div>

                        <div class="row text-danger">
                            <div class="col-lg-6">
                                <h6 class="fw-bold">Deposit 25%</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="fw-bold float-end" id="total-deposit">Rp. deposit</h6>
                            </div>
                        </div>

                        <hr class="text-yellow">

                        <h3 class="text-center">Billing Information</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="billing-name" class="form-label text-yellow">Names<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-maroon text-yellow" id="billing-name"
                                        name="billing_name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="billing-email" class="form-label text-yellow">Email Address<span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control bg-maroon text-yellow" id="billing-email"
                                        name="billing_email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="billing-phone" class="form-label text-yellow">Phone<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control bg-maroon text-yellow" id="billing-phone"
                                        name="billing_phone">
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
                                        <option class="text-yellow bg-maroon" value="" hidden selected>Select Your
                                            Country
                                        </option>
                                        @foreach ($countries as $country)
                                            <option class="text-yellow bg-maroon" value="{{ $country->country_code }}">
                                                {{ $country->country_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="billing-state" class="form-label text-yellow">State<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-maroon text-yellow" id="billing-state"
                                        name="billing_state">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="billing-city" class="form-label text-yellow">City<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-maroon text-yellow" id="billing-city"
                                        name="billing_city">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="billing-poscode" class="form-label text-yellow">Pos Code<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control bg-maroon text-yellow" id="billing-poscode"
                                        name="billing_poscode">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="billing-address" class="form-label text-yellow">Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-maroon text-yellow" id="billing-address"
                                        name="billing_address">
                                </div>
                            </div>
                        </div>

                        <h6 class="text-danger">NOTE</h6>
                        <ul class="text-danger ms-5">
                            <li>Please make sure your credit card is using 3D Secure</li>
                            <li>If you are here in Bali, please make sure your roaming of your mobile phone is off to
                                obtain the verification code</li>
                        </ul>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#book-button').click(function() {
                $.ajax({
                    url: "{{ route('frontpage.form.validation') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: $('#name').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        staying_sanur: $('#staying-sanur').val(),
                        tour_id: $('#tour-id').val(),
                        adult: $('#adult').val(),
                        child: $('#child').val(),
                    },
                    success: function(response) {
                        if (response.error) {
                            console.log(response.error);
                            if (response.error.name) {
                                $('.name-error-feedback').text(response.error.name[0]);
                            } else {
                                $('.name-error-feedback').text('');
                            }

                            if (response.error.email) {
                                $('.email-error-feedback').text(response.error.email[0]);
                            } else {
                                $('.email-error-feedback').text('');
                            }

                            if (response.error.phone) {
                                $('.phone-error-feedback').text(response.error.phone[0]);
                            } else {
                                $('.phone-error-feedback').text('');
                            }

                            if (response.error.staying_sanur) {
                                $('.staying_sanur-error-feedback').text(response.error
                                    .staying_sanur[
                                        0]);
                            } else {
                                $('.staying-sanur-error-feedback').text('');
                            }

                            if (response.error.tour_id) {
                                $('.tour_id-error-feedback').text(response.error.tour_id[0]);
                            } else {
                                $('.tour_id-error-feedback').text('');
                            }

                            if (response.error.adult) {
                                $('.adult-error-feedback').text(response.error.adult[0]);
                            } else {
                                $('.adult-error-feedback').text('');
                            }

                            if (response.error.child) {
                                $('.child-error-feedback').text(response.error.child[0]);
                            } else {
                                $('.child-error-feedback').text('');
                            }

                            alert('please check the form again');
                        } else {
                            $('#confirmationModal').modal('show');

                            const myModalEl = document.getElementById('confirmationModal')
                            myModalEl.addEventListener('show.bs.modal', event => {
                                $.ajax({
                                    url: "{{ route('frontpage.detail.billing') }}",
                                    method: "GET",
                                    data: {
                                        tour_id: $('#tour-id').val(),
                                        adult: $('#adult').val(),
                                        child: $('#child').val(),
                                    },
                                    success: function(response) {
                                        $('#tour-name').html(response
                                            .fixed_tour_name);

                                        $('#total-price').html(
                                            `Rp. ${response.total_price}`
                                        );
                                        $('#total-deposit').html(
                                            `Rp. ${response.deposit}`
                                        );
                                    },
                                    error: function(error) {
                                        console.log(error);
                                    }
                                });

                                $('#modal-date').html($('#date').val());
                                $('#modal-adult').html($('#adult').val());
                                $('#modal-child').html($('#child').val());
                            });
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush
