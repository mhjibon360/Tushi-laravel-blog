@extends('backend.layouts.backend-master')
@section('title', 'add new role')
@push('admin_style')
    <!-- switchery css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/src/plugins/switchery/switchery.min.css" />
@endpush
@section('content')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Role</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Role
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.role.index') }}">
                            All Role
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
                                    <form action="{{ route('admin.role.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue h5 mb-20">
                                                    Add New role
                                                </h4>

                                                <div class="form-group">
                                                    <label for="name"> Enter Role</label>
                                                    <input id="name" name="name" value="{{ old('name') }}"
                                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                        type="text">
                                                    @error('name')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                @foreach ($allpermissions as $key => $permission)
                                                    <div class=" row">
                                                        <div class="col-12">
                                                            <strong class="  text-capitalize">{{ $key }}</strong>
                                                            <div class="row">
                                                                @foreach ($permission as $key => $item)
                                                                    <div class="col-md-4">
                                                                        <span class=" font-weight-normal"><label  class=" form-label"
                                                                            for="{{ $item->id }}">{{ $item->name }}</label></span>

                                                                        <input type="checkbox" name="permission[]" id="{{ $item->id }}" 
                                                                            class="switch-btn" data-size="small"
                                                                            data-color="#0099ff" value="{{ $item->name }}" />
                                                                    </div>
                                                                @endforeach


                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach
                                        </ul>
                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary" value="Save Role">
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
@push('admin_script')
    <!-- switchery js -->
    <script src="{{ asset('backend') }}/src/plugins/switchery/switchery.min.js"></script>
    <script src="{{ asset('backend') }}/vendors/scripts/advanced-components.js"></script>
@endpush
