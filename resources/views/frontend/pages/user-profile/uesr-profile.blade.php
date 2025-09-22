@extends('frontend.layouts.frontend-master')
@section('title', 'your profile')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.layouts.inc.uer-sidebar')
            </div>
            <div class="col-md-8">
                <div class="card mt-4 p-4">
                    <h6 class=" text-capitalize">edit profile</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">edit profile</li>
                        </ol>
                    </nav>
                    <hr>
                    <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="row">
                            <div class="col-lg-7">

                                <div class="form-group my-2">
                                    <label for="name" class=" form-label">Name</label>
                                    <input type="text"
                                        class=" form-control @error('name')
                                        is-invalid
                                    @enderror"
                                        name="name" id="name" value="{{ Auth::user()->name }}">
                                    @error('name')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group my-2">
                                    <label for="username" class=" form-label">UseruserName</label>
                                    <input type="text"
                                        class=" form-control @error('username')
                                        is-invalid
                                    @enderror"
                                        name="username" id="username" value="{{ Auth::user()->username }}">
                                    @error('username')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group my-2">
                                    <label for="email" class=" form-label">E-mail</label>
                                    <input type="email"
                                        class=" form-control @error('email')
                                        is-invalid
                                    @enderror"
                                        name="email" id="email" value="{{ Auth::user()->email }}">
                                    @error('email')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-5">

                                <div class="form-group my-2">
                                    <label for="profile" class=" form-label">Profile Photo</label>
                                    <input type="file" class=" form-control dropify" name="profile" id="profile"
                                        data-default-file="{{ asset(Auth::user()->profile) }}" data-height="230">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button class=" btn btn-primary btn-md rounded-sm" type="submit">Save</button>
                            <a href="{{ route('dashboard') }}" class=" btn btn-danger btn-md rounded-sm"
                                type="submit">Cancel</a>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
@push('script_file')
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
