@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ route('admin.gallery.add') }}" class="btn btn-outline-success rounded-0">Tambah Item</a>
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


        <h3>Video</h3>
        <div class="row mt-3">
            @foreach ($galleries as $gallery)
                @if ($gallery->category == 'video')
                    <div class="col-lg-3 mb-3 position-relative">
                        <a href="{{ $gallery->link }}" target="_blank">
                            <img src="{{ asset($gallery->image) }}" alt="thumbnail-video" class="w-100 img-fluid">
                            <a href="{{ route('admin.gallery.delete', $gallery->id) }}"
                                class="position-absolute top-0 badge rounded-pill bg-danger " style="right: 12px;">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>

        <hr>

        <h3>Image</h3>
        <div class="row mt-3">
            @foreach ($galleries as $gallery)
                @if ($gallery->category == 'image')
                    <div class="col-lg-2 position-relative mb-3">
                        <img src="{{ asset($gallery->image) }}" alt="thumbnail-video" class="img-fluid w-100">
                        <a href="{{ route('admin.gallery.delete', $gallery->id) }}"
                            class="position-absolute top-0 badge rounded-pill bg-danger " style="right: 12px;">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
