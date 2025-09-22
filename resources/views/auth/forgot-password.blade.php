@extends('frontend.layouts.frontend-master')
@section('title', 'forget password')
@section('main')
    <div class="container">
        @include('frontend.layouts.partials.banner')
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mx-auto">
                <div class="card mb-5 border border-left">
                    <div class="card-body">
                        <div class="card-header bg-transparent text-start">
                            <span>Forgot your password? No problem. Just let us know your email address and we will email
                                you a password reset link that will allow you to choose a new one.</span>
                        </div>

                        @if (Session::has('status'))
                            <div class=" text-success" role="alert">
                                {{ Session::get('status') }}
                            </div>
                        @endif


                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group my-2">
                                <label for="email" class=" form-label  font-weight-bold">E-mail</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class=" form-control @error('email')
                                is-invalid
                            @enderror"
                                    placeholder="email">
                                @error('email')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group my-2 text-end">
                                <button class=" btn btn-dark" type="submit">Email Password Reset Link</button> &nbsp;
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
