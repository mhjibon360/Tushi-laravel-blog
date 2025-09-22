@extends('backend.layouts.backend-master')
@section('title', 'admin profile')
@section('content')
    @push('admin_style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Profile
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                                    class="fa fa-pencil"></i></a>
                            <img src="{{ asset(Auth::user()->profile) }}" alt="" class="avatar-photo">
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="{{ asset('backend') }}/vendors/images/photo2.jpg"
                                                    alt="Picture" class="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0">{{ Auth::user()->name }}</h5>
                        <p class="text-center text-muted font-14">
                            {{ Auth::user()->username }}
                        </p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    {{ Auth::user()->email }}
                                </li>
                                <li>
                                    <span>Username:</span>
                                    {{ Auth::user()->username }}
                                </li>
                                <li>
                                    <span>Role:</span>
                                    {{ Auth::user()->role }}
                                </li>

                            </ul>
                        </div>
                        <div class="profile-social">
                            <h5 class="mb-20 h5 text-blue">Social Links</h5>
                            <ul class="clearfix">
                                <li>
                                    <a href="{{ Auth::user()->facebook }}" class="btn" data-bgcolor="#3b5998"
                                        data-color="#ffffff"
                                        style="color: rgb(255, 255, 255); background-color: rgb(59, 89, 152);"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ Auth::user()->twitter }}" class="btn" data-bgcolor="#1da1f2"
                                        data-color="#ffffff"
                                        style="color: rgb(255, 255, 255); background-color: rgb(29, 161, 242);"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ Auth::user()->linkdin }}" class="btn" data-bgcolor="#007bb5"
                                        data-color="#ffffff"
                                        style="color: rgb(255, 255, 255); background-color: rgb(0, 123, 181);"><i
                                            class="fa fa-linkedin"></i></a>
                                </li>

                            </ul>
                        </div>
                        <div class="profile-skills">
                            <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                            <p>
                                {!! Auth::user()->details !!}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"
                                            aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tasks" role="tab"
                                            aria-selected="false">Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Timeline Tab start -->
                                    <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                        <div class="pd-20">
                                            <form action="{{ route('admin.update.profile') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">
                                                            Edit Your Personal Setting
                                                        </h4>

                                                        <div class="form-group">
                                                            <label for="name">Full Name</label>
                                                            <input id="name" name="name"
                                                                value="{{ Auth::user()->name }}"
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
                                                            <input id="email" name="email"
                                                                value="{{ Auth::user()->email }}"
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
                                                                value="{{ Auth::user()->username }}"
                                                                class="form-control form-control-lg @error('username')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('username')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="details">Details</label>
                                                            <textarea id="details" name="details" class="form-control form-control-lg" rows="4">{{ Auth::user()->details }}</textarea>
                                                            @error('details')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>





                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">
                                                            Edit Social Media links
                                                        </h4>
                                                        <div class="form-group">
                                                            <label for="faebook">Facebook Url</label>
                                                            <input id="faebook" name="facebook"
                                                                value="{{ Auth::user()->facebook }}"
                                                                class="form-control form-control-lg " type="text">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="twitter">Twitter Url</label>
                                                            <input id="twitter" name="twitter"
                                                                value="{{ Auth::user()->twitter }}"
                                                                class="form-control form-control-lg " type="text">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="linkdin">Linkdin Url</label>
                                                            <input id="linkdin" name="linkdin"
                                                                value="{{ Auth::user()->linkdin }}"
                                                                class="form-control form-control-lg " type="text">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="profile">Profile Photo</label>
                                                            <input id="profile" name="profile" value=""
                                                                class="dropify form-control form-control-lg "
                                                                type="file"
                                                                data-default-file="{{ asset(Auth::user()->profile) }}">

                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-group mb-0">
                                                    <input type="submit" class="btn btn-primary"
                                                        value="Save &amp; Update">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Timeline Tab End -->
                                    <!-- Tasks Tab start -->
                                    <div class="tab-pane fade" id="tasks" role="tabpanel">
                                        <div class="pd-20 profile-task-wrap">
                                            <div class="container pd-0">
                                                <!-- Open Task start -->
                                                <div class="task-title row align-items-center">
                                                    <div class="col-md-11 col-sm-12">
                                                        <form action="{{ route('admin.update.password') }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="id"
                                                                value="{{ Auth::user()->id }}">

                                                            <h4 class="text-blue h5 mb-20">
                                                                Change Password
                                                            </h4>

                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input id="password" name="password" value=""
                                                                    class="form-control form-control-lg @error('password')
                                                                    is-invalid
                                                                @enderror"
                                                                    type="password">
                                                                @error('password')
                                                                    <small class=" text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            

                                                            <div class="form-group">
                                                                <label for="new_password"> New Password</label>
                                                                <input id="new_password" name="new_password"
                                                                    value=""
                                                                    class="form-control form-control-lg @error('new_password')
                                                                    is-invalid
                                                                @enderror"
                                                                    type="password">
                                                                @error('new_password')
                                                                    <small class=" text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="confirm_password"> Confirm Password</label>
                                                                <input id="confirm_password" name="confirm_password"
                                                                    value=""
                                                                    class="form-control form-control-lg @error('confirm_password')
                                                                    is-invalid
                                                                @enderror"
                                                                    type="password">
                                                                @error('confirm_password')
                                                                    <small class=" text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-danger"
                                                                    value="Save &amp; Update">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tasks Tab End -->
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
