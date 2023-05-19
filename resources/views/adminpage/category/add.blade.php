@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3>Add New Category</h3>
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
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline-primary rounded-0 w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
