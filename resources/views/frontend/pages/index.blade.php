@php
    $sitesetting = App\Models\SiteSetting::first();
    $seosetting = App\Models\SeoSetting::first();
@endphp
@extends('frontend.layouts.frontend-master')
@section('title', $seosetting->meta_title)
@section('main')
    <!-- start of banner -->
    @include('frontend.layouts.partials.banner')
    <!-- end of banner -->

    <!-- start of Recent Posts -->
    @include('frontend.layouts.partials.recent-post')
    <!-- end of Recent Posts -->

    <!-- start of Top Authors -->
    @include('frontend.layouts.partials.top-author')
    <!-- end of Top Authors -->

    <!-- start of Featured Posts -->
    @include('frontend.layouts.partials.featured')
    <!-- end of Featured Posts -->

    <!-- start of Post of the month -->
    @include('frontend.layouts.partials.post-of-month')
    <!-- end of Post of the month -->

    <!-- start newsletter -->
    @include('frontend.layouts.inc.subscribe-news-letter')
    <!-- end newsletter -->

@endsection
