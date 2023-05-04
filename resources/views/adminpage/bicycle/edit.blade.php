@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3>Edit {{ $bicycle->name }}</h3>
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
                <form action="{{ route('admin.bicycle.update', $bicycle->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $bicycle->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ $bicycle->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Images</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline-primary rounded-0 w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
