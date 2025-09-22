@php
    $sitesetting = App\Models\SiteSetting::first();
@endphp
@extends('frontend.layouts.frontend-master')
@section('title', 'contact')
@section('main')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="section-title">
                        <h1 class="h3 mb-0 title"> {{ $sitesetting->contact_us_title }} </h1>
                    </div>
                    <div class="row gy-5 gx-lg-5">
                        <div class="col-lg-6 order-1 order-lg-0">
                            @if (Auth::check())
                                <form class="row gy-4" action="{{ route('store.contact.message') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="col-md-12">
                                        <input type="email"
                                            class="form-control  @error('email')
                                     is-invalid
                                    @enderror"
                                            placeholder="Email address" name="email" autocomplete="new-email"
                                            value="{{ Auth::user()->email }}">
                                        @error('email')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text"
                                            class="form-control @error('name')
                                     is-invalid
                                    @enderror"
                                            placeholder="Your name here" name="name" autocomplete="new-name"
                                            value="{{ Auth::user()->name }}">
                                        @error('name')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <textarea
                                            class="form-control @error('message')
                                     is-invalid
                                    @enderror"
                                            placeholder="Ask question or just say Hi" rows="4" name="message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-light bg-white"
                                            aria-label="Send Message">{{ $sitesetting->contact_us_button_text }} <i
                                                class="ti ti-brand-telegram ms-1"></i>
                                        </button>
                                    </div>
                                </form>
                            @else
                                <form class="row gy-4" action="{{ route('store.contact.message') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="col-md-12">
                                        <input type="email"
                                            class="form-control  @error('email')
                                     is-invalid
                                    @enderror"
                                            placeholder="Email address" name="email" autocomplete="new-email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text"
                                            class="form-control @error('name')
                                     is-invalid
                                    @enderror"
                                            placeholder="Your name here" name="name" autocomplete="new-name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <textarea
                                            class="form-control @error('message')
                                     is-invalid
                                    @enderror"
                                            placeholder="Ask question or just say Hi" rows="4" name="message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class=" text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-light bg-white"
                                            aria-label="Send Message">{{ $sitesetting->contact_us_button_text }} <i
                                                class="ti ti-brand-telegram ms-1"></i>
                                        </button>
                                    </div>
                                </form>
                            @endif

                        </div>
                        <div class="col-lg-6 order-0 order-lg-1">
                            <div class="ps-0 ps-lg-4">
                                <div class="mb-4 mb-lg-5">
                                    <p class="h4 mb-3">{{ $sitesetting->contact_us_right_heading }}</p>
                                    <p>{{ $sitesetting->contact_us_right_details }}</p>
                                </div>
                                <p class="mb-2">
                                    {{-- ti ti-mail-forward --}}
                                    <i class="{{ $sitesetting->contact_us_email_icon }} d-inline-block me-2 text-dark"
                                        style="transform:translateY(2px)"></i>
                                    <a class="text-link"
                                        href="mailto:platoltheme@gmail.com">{{ $sitesetting->contact_us_email_address }}</a>
                                </p>
                                <p class="mb-0">
                                    {{-- ti ti-phone --}}
                                    <i class="{{ $sitesetting->contact_us_phone_icon }} d-inline-block me-2 text-dark"></i>
                                    <a class="text-link"
                                        href="tel:+98022964902">{{ $sitesetting->contact_us_phone_address }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.layouts.inc.subscribe-news-letter')
@endsection
