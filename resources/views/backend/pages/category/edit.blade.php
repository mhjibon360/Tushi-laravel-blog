@extends('backend.layouts.backend-master')
@section('title', 'add new category')
@section('content')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Category</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Category
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.category.index') }}">
                            All Category
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                <div class="pd-20">
                                    <form action="{{ route('admin.category.update',$category->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue h5 mb-20">
                                                    Add New Category
                                                </h4>

                                                <div class="form-group">
                                                    <label for="category_name">Category Name</label>
                                                    <input id="category_name" name="category_name"
                                                        value="{{ $category->category_name }}"
                                                        class="form-control form-control-lg @error('category_name') is-invalid @enderror"
                                                        type="text">
                                                    @error('category_name')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </ul>
                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary" value="Update Category">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.layouts.includes.footer')
    </div>

@endsection
