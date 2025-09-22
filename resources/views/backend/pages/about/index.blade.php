@extends('backend.layouts.backend-master')
@section('title', 'about us page')
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
                            <h4>About</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About
                                </li>
                            </ol>
                        </nav>
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
                                            <form action="{{ route('admin.update.about') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $about->id }}">

                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">
                                                            Manage About Us(About Us)
                                                        </h4>

                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input id="title" name="title" value="{{ $about->title }}"
                                                                class="form-control form-control-lg @error('title')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('title')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="icon">About Heaing Icon</label>
                                                            <input id="icon" name="icon" value=""
                                                                class="dropify form-control form-control-lg " type="file"
                                                                data-default-file="{{ asset($about->icon) }}">
                                                            @error('icon')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="heading">Heading</label>
                                                            <input id="heading" name="heading"
                                                                value="{{ $about->heading }}"
                                                                class="form-control form-control-lg @error('heading')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('heading')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="image">About Image</label>
                                                            <input id="image" name="image" value=""
                                                                class="dropify form-control form-control-lg " type="file"
                                                                data-default-file="{{ asset($about->image) }}">
                                                            @error('image')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="big_heading">Big Heading</label>
                                                            <input id="big_heading" name="big_heading"
                                                                value="{{ $about->big_heading }}"
                                                                class="form-control form-control-lg @error('big_heading')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('big_heading')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="details">Details</label>
                                                            <textarea id="details" name="details" class="form-control form-control-lg" rows="4">{{ $about->details }}</textarea>

                                                            @error('details')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">
                                                            About us page(Our Story)
                                                        </h4>

                                                        <div class="form-group">
                                                            <label for="story_icon">Story story_icon</label>
                                                            <input id="story_icon" name="story_icon" value=""
                                                                class="dropify form-control form-control-lg " type="file"
                                                                data-default-file="{{ asset($about->story_icon) }}">
                                                            @error('story_icon')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="story_heading">Story story_heading</label>
                                                            <input id="story_heading" name="story_heading"
                                                                value="{{ $about->story_heading }}"
                                                                class="form-control form-control-lg @error('story_heading')
                                                                    is-invalid
                                                                @enderror"
                                                                type="text">
                                                            @error('story_heading')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="story_details_left">Story Details left</label>
                                                            <textarea id="story_details_left" name="story_details_left" class="form-control form-control-lg" rows="4">{{ $about->story_details_left }}</textarea>

                                                            @error('story_details_left')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="story_details_right">Story Details Right</label>
                                                            <textarea id="story_details_right" name="story_details_right" class="form-control form-control-lg" rows="4">{{ $about->story_details_right }}</textarea>

                                                            @error('story_details_right')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="short">Story Short Details </label>
                                                            <textarea id="short" name="short" class="form-control form-control-lg" rows="4">{{ $about->short }}</textarea>

                                                            @error('short')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
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
