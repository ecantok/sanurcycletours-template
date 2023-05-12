@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ route('admin.tour.add') }}" class="btn btn-outline-success rounded-0">Tambah Tour</a>
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
            @foreach ($tours as $tour)
                <div class="col-lg-4 mb-3">
                    <div class="card rounded-0 {{ $tour->show == 1 ? 'border-success' : 'border-danger' }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tour->name }}</h5>
                            <a href="{{ route('admin.tour.show', $tour->slug) }}" class="card-link btn btn-link">Detail</a>
                            <a href="{{ route('admin.tour.update', $tour->slug) }}" class="card-link btn btn-link">Edit</a>
                            <form class="d-inline" action="{{ route('admin.tour.delete', $tour->slug) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="card-link btn btn-link">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
