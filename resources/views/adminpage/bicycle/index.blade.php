@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ route('admin.bicycle.add') }}" class="btn btn-outline-success rounded-0">Tambah Bicycle</a>
            </div>
        </div>

        @if (session('success'))
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt-3">
            @foreach ($bicycles as $bicycle)
                <div class="col-lg-4 mb-3">
                    <div class="card rounded-0">
                        <img src="{{ asset($bicycle->path) }}" class="card-img-top" alt="img" class="w-100 h-100"
                            style="max-height: 300px; min-height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bicycle->name }}</h5>
                            <p class="card-text">{{ $bicycle->description }}</p>
                            <a href="{{ route('admin.bicycle.edit', $bicycle->slug) }}" class="btn btn-link">Edit</a>
                            <form action="{{ route('admin.bicycle.delete', $bicycle->slug) }}" class="d-inline"
                                method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
