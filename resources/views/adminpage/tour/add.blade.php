@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3>Add New Tour</h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row mt-3">
            <div class="col-lg-12">
                <form action="{{ route('admin.tour.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="mb-3 col-lg-8">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="name" class="form-label">Category</label>
                            <select class="custom-select" name="category_id" id="category-id">
                                <option value="" hidden selected>Open this select menu</option>
                                @foreach (get_categories() as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="overview">Overview</label>
                        <textarea class="form-control" id="overview" rows="3" name="overview">{{ old('overview') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content">{{ old('content') }}</textarea>
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

                    <hr class="mb-0 font-weight-bold">
                    <small class="text-warning mt-0 mb-3 text-center">* Warning Option</small>

                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset class="form-group row">
                                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Show</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="show" id="show-1"
                                            value="1" checked>
                                        <label class="form-check-label" for="show-1">
                                            True
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="show" id="show-2"
                                            value="0">
                                        <label class="form-check-label" for="show-2">
                                            False
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-lg-4">
                            <fieldset class="form-group row">
                                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Book Page</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="book_package"
                                            id="book-package-1" value="1" checked>
                                        <label class="form-check-label" for="book-package-1">
                                            True
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="book_package"
                                            id="book-package-2" value="0">
                                        <label class="form-check-label" for="book-package-2">
                                            False
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-lg-4">
                            <input type="number" name="order" id="order" class="form-control"
                                placeholder="order content" value="{{ old('order') }}">
                            <small>
                                <a href="#" data-toggle="modal" data-target="#contentOrderModal">
                                    show order content
                                </a>
                            </small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline-primary rounded-0 w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="contentOrderModal" tabindex="-1" aria-labelledby="contentOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="list-group list-group-flush w-100">
                        @foreach ($tours as $tour)
                            <li class="list-group-item">{{ title_filter($tour->name) }} <span
                                    class="float-right font-weight-bold">{{ $tour->order }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
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
