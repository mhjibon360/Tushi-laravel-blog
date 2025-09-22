@extends('backend.layouts.backend-master')
@section('title', 'edit permission')
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
                                    <form action="{{ route('admin.permission.update', $permission->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue h5 mb-20">
                                                    Edit Permission
                                                </h4>

                                                <div class="form-group">
                                                    <label for="name"> Enter Permission Name</label>
                                                    <input id="name" name="name" value="{{ $permission->name }}"
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
                                                        <option value="dashboard"
                                                            {{ $permission->group_name == 'dashboard' ? 'selected' : '' }}>
                                                            Dashboard</option>
                                                        <option value="language"
                                                            {{ $permission->group_name == 'language' ? 'selected' : '' }}>
                                                            Language</option>
                                                        <option value="category"
                                                            {{ $permission->group_name == 'category' ? 'selected' : '' }}>
                                                            Category</option>
                                                        <option value="tag"
                                                            {{ $permission->group_name == 'tag' ? 'selected' : '' }}>Tag
                                                        </option>
                                                        <option value="post"
                                                            {{ $permission->group_name == 'post' ? 'selected' : '' }}>Post
                                                        </option>
                                                        <option value="about"
                                                            {{ $permission->group_name == 'about' ? 'selected' : '' }}>About
                                                        </option>
                                                        <option value="setting"
                                                            {{ $permission->group_name == 'setting' ? 'selected' : '' }}>
                                                            Setting</option>
                                                        <option value="newsletter"
                                                            {{ $permission->group_name == 'newsletter' ? 'selected' : '' }}>
                                                            Newsletter</option>
                                                        <option value="message"
                                                            {{ $permission->group_name == 'message' ? 'selected' : '' }}>
                                                            Message</option>
                                                        <option value="role"
                                                            {{ $permission->group_name == 'role' ? 'selected' : '' }}>Role
                                                        </option>
                                                        <option value="permission"
                                                            {{ $permission->group_name == 'permission' ? 'selected' : '' }}>
                                                            Permission</option>
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
