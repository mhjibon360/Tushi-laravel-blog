@extends('frontend.layouts.frontend-master')
@section('title', 'login')
@section('main')
    <div class="container">
        @include('frontend.layouts.partials.banner')
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12 mx-auto">
                <div class="card mb-5 border border-left">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card-body shadow-md text-left text-start">
                                <div class="card-header bg-transparent text-center">
                                    <h5 style="font-size: 20px;font-weight:bold;color:#84876a;">Login with social media</h5>
                                </div>
                                <div class=" my-2">

                                    <a href="{{ url('auth/facebook') }}" class=" btn btn-primary w-full"
                                        style="width: 100%;background:#3e68b1;"><i class="fa-brands fa-facebook-f"></i>
                                        Login with Facebook</a>
                                </div>
                                <div class=" my-2">
                                    <a href="" disabled class="disabled btn btn-primary w-full"
                                        style="width: 100%;background:#4EB8EC;"><i class="fa-brands fa-twitter"></i> Login
                                        with Twitter</a>
                                </div>
                                <div class=" my-2">
                                    <a href="" disabled class="disabled btn btn-primary w-full"
                                        style="width: 100%;background:#D14C2D;"><i class="fa-brands fa-google-plus-g"></i>
                                        Login with Google</a>
                                </div>
                                <div class=" my-2">
                                    <a href="" disabled class="disabled btn btn-primary w-full"
                                        style="width: 100%;background:#444444;"><i class="fa-brands fa-github"></i> Login
                                        with Github</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="card-header bg-transparent text-center">
                                    <h5 style="font-size: 20px;font-weight:bold;color:#84876a;"> Login/ <a
                                            href="{{ route('register') }}">(Register)</a></h5>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
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
                                    <div class="form-group my-2">
                                        <label for="password" class=" form-label  font-weight-bold">Password</label>
                                        <input type="password" name="password" id="password" value=""
                                            class=" form-control @error('password')
                                is-invalid
                            @enderror"
                                            placeholder="password">
                                        @error('password')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="remember_me" class=" form-check-label  font-weight-bold">Remember
                                            me</label>
                                        <input type="checkbox" name="remember" id="remember_me" class="form-check-input  ">

                                    </div>
                                    <div class="form-group my-2 text-end">
                                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                                        <button class=" btn btn-dark" type="submit">Log in</button> &nbsp;
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
