@extends('frontend.layouts.frontend-master')
@section('title', 'change your password')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-3">


                @include('frontend.layouts.inc.uer-sidebar')

            </div>
            <div class="col-md-8">
                <div class="card mt-4 p-4">
                    <h6 class=" text-capitalize">Change Your Password</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">change password</li>
                        </ol>
                    </nav>
                    <hr>
                    <form action="{{ route('update.password') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="form-group my-2">
                            <label for="password" class=" form-label">Password</label>
                            <input type="password"
                                class=" form-control @error('password')
                                is-invalid
                            @enderror"
                                name="password" id="password" value="">
                            @error('password')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="new_password" class=" form-label">New Password</label>
                            <input type="password"
                                class=" form-control @error('new_password')
                                is-invalid
                            @enderror"
                                name="new_password" id="new_password" value="">
                            @error('new_password')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="confirm_password" class=" form-label">Confirm Password</label>
                            <input type="password"
                                class=" form-control @error('confirm_password')
                                is-invalid
                            @enderror"
                                name="confirm_password" id="confirm_password" value="">
                            @error('confirm_password')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <hr>
                        <div>
                            <button class=" btn btn-dark btn-md rounded-sm" type="submit">Save</button>
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
