@extends('backend.layouts.backend-master')
@section('title', 'edit post')
@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- switchery css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/src/plugins/switchery/switchery.min.css" />
    <!-- bootstrap-tagsinput css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend') }}/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')


    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Post</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Post
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.post.index') }}">
                            All Post
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="pd-20">
                                    <ul class="profile-edit-list row">
                                        <li class="weight-500 col-md-12">
                                            <h4 class="text-blue h5 mb-20">
                                                Eedit post
                                            </h4>

                                            <div class="form-group">
                                                <label for="title">post Title</label>
                                                <input id="title" name="title" value="{{ $post->title }}"
                                                    class="form-control form-control-lg @error('title') is-invalid @enderror"
                                                    type="text">
                                                @error('title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="details">post Details</label>
                                                <textarea id="summernote" name="details" class="form-control form-control-lg @error('details') is-invalid @enderror"
                                                    type="text" rows="4">{!! $post->details !!}</textarea>
                                                @error('details')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="thumbnail">post Thumbnail</label>
                                                <input id="thumbnail" name="thumbnail" value=""
                                                    class="dropify form-control form-control-lg " type="file"
                                                    data-default-file="{{ asset($post->thumbnail) }}">
                                                @error('thumbnail')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mb-30">
                        <div class="card-box  overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <!-- Timeline Tab start -->
                                <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                    <div class="pd-20">
                                        <div class="form-group">
                                            <label for="post_name">Post Category</label>
                                            <select name="category_id" id="category_id" class="custom-select2 form-control">
                                                <option value="" selected disabled>--select category--</option>
                                                @foreach ($allcategory as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                                        {{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        @php
                                            $tagids = explode(',', $post->tag_id);
                                            $tagdata = App\Models\Tag::whereIn('id', $tagids)->pluck('id')->toArray();
                                            // dd($tagdata);
                                        @endphp
                                        <div class="form-group">
                                            <label for="post_name">Post Tags</label>
                                            <select name="tag_id[]" multiple id="tag_id"
                                                class="custom-select2 form-control">
                                                <option value="" style="display: none" disabled>--select
                                                    category--</option>
                                                @foreach ($alltag as $tag)
                                                    <option value="{{ $tag->id }}"
                                                        {{ in_array($tag->id, $tagdata) ? 'selected' : '' }}>
                                                        {{ $tag->tag_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('tag_id')
                                                <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <hr>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="post_name">Featured Post</label>
                                                    <br>
                                                    <input type="checkbox" id="post_name" value="1"
                                                        {{ $post->featured == '1' ? 'checked' : '' }} name="featured"
                                                        class="switch-btn" data-size="small" data-color="#0099ff" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="post_of_the_month">Post Month</label>
                                                    <br>
                                                    <input type="checkbox" id="post_of_the_month"
                                                        {{ $post->post_of_the_month == '1' ? 'checked' : '' }}
                                                        value="1" name="post_of_the_month" class="switch-btn"
                                                        data-size="small" data-color="#f56767" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <br>
                                                    <input type="checkbox" {{ $post->status == '1' ? 'checked' : '' }}
                                                        id="status" value="1" name="status" class="switch-btn"
                                                        data-size="small" data-color="#a683eb" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary" value="Update post">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
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
    <!-- switchery js -->
    <script src="{{ asset('backend') }}/src/plugins/switchery/switchery.min.js"></script>
    <script src="{{ asset('backend') }}/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- bootstrap-touchspin js -->
    <script src="{{ asset('backend') }}/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="{{ asset('backend') }}/vendors/scripts/advanced-components.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endpush
