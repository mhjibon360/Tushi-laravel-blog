@extends('backend.layouts.backend-master')
@section('title', 'edit admin account')
@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Admin-Account</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    admin/account
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.account.create') }}">
                            All Admin Account
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">

                                <div class="tab-content">
                                    <!-- Timeline Tab start -->
                                    <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                        <div class="pd-20">
                                            <form action="{{ route('admin.account.update',$admin->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-12">
                                                        <h4 class="text-blue h5 mb-20">
                                                           Edit Admin User
                                                        </h4>

                                                        <div class="form-group">
                                                            <label for="profile">Profile Photo</label>
                                                            <input id="profile" name="profile" value=""
                                                                class="dropify form-control form-control-lg " type="file"
                                                                data-default-file="{{ asset($admin->profile) }}" data-height="200">

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">Full Name</label>
                                                            <input id="name" name="name" value="{{ $admin->name }}"
                                                                class="form-control form-control-lg @error('name')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('name')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="email">E-mail</label>
                                                            <input id="email" name="email" value="{{ $admin->email }}"
                                                                class="form-control form-control-lg @error('email')
                                                                    is-invalid
                                                                @enderror"
                                                                type="email">
                                                            @error('email')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input id="username" name="username"
                                                                value="{{ $admin->username }}"
                                                                class="form-control form-control-lg @error('username')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('username')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control form-control-lg @error('password')
                                                                    is-invalid
                                                                @enderror">
                                                            @error('password')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="roles">Acount Role</label>
                                                            <select name="roles" id="roles"
                                                                class=" custom-select2 form-control select2 @error('password')
                                                                    is-invalid
                                                                @enderror">
                                                                <option value="" selected disabled>--choose role--
                                                                </option>
                                                                @foreach ($allrole as $role)
                                                                    <option value="{{ $role->id }}">
                                                                        {{ $role->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('roles')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>



                                                </ul>
                                                <div class="form-group mb-0">
                                                    <input type="submit" class="btn btn-primary" value="Create Admin">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Timeline Tab End -->

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
@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush
