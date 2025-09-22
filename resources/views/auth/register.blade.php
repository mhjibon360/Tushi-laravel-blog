@extends('frontend.layouts.frontend-master')
@section('title', 'register')
@section('main')
    <div class="container">
        @include('frontend.layouts.partials.banner')
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="card-header bg-transparent text-center">
                            <h5 style="font-size: 20px;font-weight:bold;color:#84876a;"> Register</h5>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group my-2">
                                <label for="name" class=" form-label  font-weight-bold">Full Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class=" form-control @error('name')
                                is-invalid
                            @enderror"
                                    placeholder="name">
                                @error('name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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
                                <label for="password_confirmation" class=" form-label  font-weight-bold">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" value=""
                                    class=" form-control @error('password_confirmation')
                                is-invalid
                            @enderror"
                                    placeholder="password confirmation">
                                @error('password_confirmation')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           
                            <div class="form-group my-2 text-end">
                                <a href="{{ route('login') }}">Already registered?</a>
                                <button class=" btn btn-dark" type="submit">Register</button> &nbsp;
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
