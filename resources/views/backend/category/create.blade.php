@extends('layouts.backend_master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                @if (session('category-success'))
                                    <div class="alert alert-success">{{ session('category-success') }}</div>
                                @endif

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('category.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="category_name" type="text"
                                                placeholder="Category Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Details</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="category_details" rows="6"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="category_image">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title"></label>
                                        <div class="form-group col-sm-9">
                                            <button type="submit" class="btn btn-animation">Add New Category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
