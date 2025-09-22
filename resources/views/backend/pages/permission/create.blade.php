@extends('backend.layouts.backend-master')
@section('title', 'add new permission')
@section('content')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Permission</h4>
                        </div>
                        <nav aria-label="breadcrumb" permission="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Permission
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.permission.index') }}">
                            All Permission
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade active show" id="timeline" permission="tabpanel">
                                <div class="pd-20">
                                    <form action="{{ route('admin.permission.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue h5 mb-20">
                                                    Add New Permission
                                                </h4>

                                                <div class="form-group">
                                                    <label for="name"> Enter Permission Name</label>
                                                    <input id="name" name="name" value="{{ old('name') }}"
                                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                        type="text">
                                                    @error('name')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="group_name"> Permission Group</label>
                                                    <select id="group_name" name="group_name"
                                                        class="form-control custom-select2 form-control-lg text-capitalize @error('group_name') is-invalid @enderror">
                                                        <option value="dashboard">Dashboard</option>
                                                        <option value="language">Language</option>
                                                        <option value="category">Category</option>
                                                        <option value="tag">Tag</option>
                                                        <option value="post">Post</option>
                                                        <option value="about">About</option>
                                                        <option value="setting">Setting</option>
                                                        <option value="newsletter">Newsletter</option>
                                                        <option value="message">Message</option>
                                                        <option value="role">Role</option>
                                                        <option value="permission">Permission</option>
                                                    </select>

                                                    @error('group_name')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </ul>
                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary" value="Save Permission">
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
