@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3>Add New Tour</h3>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-12">
                <form action="{{ route('admin.tour.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="start" class="form-label">Start Time</label>
                                <input type="time" name="start" id="start" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="pickup-time" class="form-label">Pickup Time</label>
                                <input type="time" name="pickup_time" id="pickup-time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="pickup-location" class="form-label">Pickup Location</label>
                                <input type="text" name="pickup_location" id="pickup-location" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="adult-price" class="form-label">Adult Price</label>
                                <input type="number" name="adult_price" id="adult-price" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="child-price" class="form-label">Child Price</label>
                                <input type="number" name="child_price" id="child-price" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="infant-price" class="form-label">Infant Price</label>
                                <input type="number" name="infant_price" id="infant-price" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="image" class="form-label">Slide Images</label>
                                <input type="file" name="image[]" id="image" class="form-control" multiple>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline-primary rounded-0 w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/richtexteditor/rte_theme_default.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/richtexteditor/rte.js') }}"></script>
    <script src="{{ asset('assets/vendor/richtexteditor/plugins/all_plugins.js') }}"></script>

    <script>
        var editor1 = new RichTextEditor("#content");
    </script>
@endpush
