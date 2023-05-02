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
            <div class="col-lg-4 mb-3">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#" class="card-link">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
