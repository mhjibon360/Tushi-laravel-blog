@extends('frontend.layouts.frontend-master')
@section('title', '403 error')
@section('main')
    <!-- start of 404 -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto text-center">
                    <h1 class="page-not-found-title">4<span class="bg-dark text-white px-2">0</span>3</h1>
                    <p class="mb-4">Oops. The page you're looking for doesn't exist.</p>
                    <a href="{{ route('home.index') }}" class="btn btn-dark">Back to home</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of 404 -->

    <!-- start newsletter -->
    @include('frontend.layouts.inc.subscribe-news-letter')
    <!-- end newsletter -->

@endsection
