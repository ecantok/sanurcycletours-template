@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ route('admin.testimonial.add') }}" class="btn btn-outline-success rounded-0">
                    Tambah Testimonial
                </a>
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
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-light">
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Star</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $index => $testimonial)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $testimonial->title }}</td>
                                <td>{{ str_limit($testimonial->content, 100) }}</td>
                                <td>
                                    @for ($i = 1; $i <= $testimonial->stars; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </td>
                                <td>
                                    <a href="{{ route('admin.testimonial.edit', $testimonial->slug) }}" class="mr-3 mb-3">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="{{ route('admin.testimonial.delete', $testimonial->slug) }}"
                                        onclick="return confirm('are you sure?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Not Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
