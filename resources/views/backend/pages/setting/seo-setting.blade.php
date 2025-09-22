@extends('backend.layouts.backend-master')
@section('title', 'manage seo setting')
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
                            <h4>Setting</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    seo-setting
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
                                            <form action="{{ route('admin.seo.setting.update') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $seosetting->id }}">

                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-12">
                                                        <h4 class="text-blue h5 mb-20">
                                                            Manage seo Setting
                                                        </h4>

                                                        <div class="form-group">
                                                            <label for="meta_title">Meta Title</label>
                                                            <input id="meta_title" name="meta_title"
                                                                value="{{ $seosetting->meta_title }}"
                                                                class="form-control form-control-lg @error('meta_title')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('meta_title')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meta_description">Meta Descriptions</label>
                                                            <input id="meta_description" name="meta_description"
                                                                value="{{ $seosetting->meta_description }}"
                                                                class="form-control form-control-lg @error('meta_description')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('meta_description')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meta_keywords">Meta Keyword</label>
                                                            <input id="meta_keywords" name="meta_keywords"
                                                                value="{{ $seosetting->meta_keywords }}"
                                                                class="form-control form-control-lg @error('meta_keywords')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('meta_keywords')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meta_author">Meta Author</label>
                                                            <input id="meta_author" name="meta_author"
                                                                value="{{ $seosetting->meta_author }}"
                                                                class="form-control form-control-lg @error('meta_author')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('meta_author')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meta_robots">Meta Robot</label>
                                                            <input id="meta_robots" name="meta_robots"
                                                                value="{{ $seosetting->meta_robots }}"
                                                                class="form-control form-control-lg @error('meta_robots')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('meta_robots')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="canonical_url">Canonical Url</label>
                                                            <input id="canonical_url" name="canonical_url"
                                                                value="{{ $seosetting->canonical_url }}"
                                                                class="form-control form-control-lg @error('canonical_url')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('canonical_url')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="og_description">Og Title</label>
                                                            <input id="og_description" name="og_description"
                                                                value="{{ $seosetting->og_description }}"
                                                                class="form-control form-control-lg @error('og_description')        is-invalid    @enderror"
                                                                type="text">
                                                            @error('og_description')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="og_description">Og Descriptions</label>
                                                            <input id="og_description" name="og_description"
                                                                value="{{ $seosetting->og_description }}"
                                                                class="form-control form-control-lg @error('og_description') is-invalid    @enderror"
                                                                type="text">
                                                            @error('og_description')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="og_image">Og Image</label>
                                                            <input id="og_image" name="og_image"
                                                                class="dropify form-control form-control-lg "
                                                                type="file"
                                                                data-default-file="{{ asset($seosetting->og_image) }}"
                                                                data-height="200">
                                                            @error('og_image')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="twitter_title">Twitter Title</label>
                                                            <input id="twitter_title" name="twitter_title"
                                                                value="{{ $seosetting->twitter_title }}"
                                                                class="form-control form-control-lg @error('twitter_title') is-invalid @enderror"
                                                                type="text">
                                                            @error('twitter_title')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="twitter_description">Twitter Descriptions</label>
                                                            <input id="twitter_description" name="twitter_description"
                                                                value="{{ $seosetting->twitter_description }}"
                                                                class="form-control form-control-lg @error('twitter_description') is-invalid @enderror"
                                                                type="text">
                                                            @error('twitter_description')
                                                                <small class=" text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="twitter_image">Twitter Image</label>
                                                            <input id="twitter_image" name="twitter_image"
                                                                class="dropify form-control form-control-lg "
                                                                type="file"
                                                                data-default-file="{{ asset($seosetting->twitter_image) }}"
                                                                data-height="200">
                                                            @error('twitter_image')
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
