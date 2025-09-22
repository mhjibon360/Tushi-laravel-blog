@extends('backend.layouts.backend-master')
@section('title', 'add new language')
@section('content')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>language</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    language
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.language.index') }}">
                            All language
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
                                    <form action="{{ route('admin.language.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue h5 mb-20">
                                                    Add New language
                                                </h4>

                                                <div class="form-group">
                                                    <label for="language_name">Language Name</label>
                                                    <input type="text" id="language_name" name="language_name"
                                                        class="form-control form-control-lg @error('language_name') is-invalid @enderror">
                                                    @error('language_name')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="language_short">Language Short</label>
                                                    <input type="text" id="language_short" name="language_short"
                                                        class="form-control form-control-lg @error('language_short') is-invalid @enderror">
                                                    @error('language_short')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </ul>
                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary" value="Save language">
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
