@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ route('admin.category.add') }}" class="btn btn-outline-success rounded-0">Tambah Category</a>
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
                        <th>Slug</th>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach (get_categories() as $index => $category)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit', $category->slug) }}" class="mr-3 mb-3">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="{{ route('admin.category.delete', $category->slug) }}"
                                        onclick="return confirm('are you sure?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
