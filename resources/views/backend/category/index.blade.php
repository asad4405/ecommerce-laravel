@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Category ({{ $categories->count() }})</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('category.create') }}" class="align-items-center btn btn-theme">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        @if (session('category-update'))
                            <div class="alert alert-success">{{ session('category-update') }}</div>
                        @endif
                        @if (session('category-delete'))
                            <div class="alert alert-success">{{ session('category-delete') }}</div>
                        @endif

                        <div class="table-responsive category-table">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Category Slug</th>
                                        <th>Date</th>
                                        <th>Slug</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('uploads/category_images') }}/{{ $category->category_image }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>{{ $category->category_name }}</td>

                                            <td>{{ $category->category_slug }}</td>

                                            <td>{{ $category->created_at }}</td>

                                            <td>{{ $category->category_slug }}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('category.show', $category->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            Show
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('category.edit', $category->id) }}"
                                                            class="btn btn-sm btn-info">
                                                            Edit
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <form action="{{ route('category.destroy', $category->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-secondary">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-danger">No Category Available !</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
