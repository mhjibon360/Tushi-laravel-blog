@extends('backend.layouts.backend-master')
@section('title', 'manage setting')
@section('content')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Setting</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Setting
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
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                <div class="pd-20">

                                    <div class="card-box pd-20 height-100-p mb-30">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="https://help.leadsquared.com/wp-content/uploads/2025/02/Manage-Accounts.gif" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                                                    Welcome back
                                                    <div class="weight-600 font-30 text-blue">{{ Auth::user()->name }}!
                                                    </div>
                                                </h4>
                                                <p class="font-18 max-width-600">
                                                    Manage Website Settings and SEO Configuration
                                                    From this page, you can easily manage all essential settings of your
                                                    website. This includes general site settings like site name, logo,
                                                    favicon, contact information, and more.
                                                    You can also configure SEO settings such as meta title, meta
                                                    description, keywords, and Open Graph data — helping your website
                                                    perform better on search engines and social media platforms.
                                                    Additionally, manage social media links, SMTP email settings, and other
                                                    key options to ensure smooth website operation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pb-10">
                                      
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                            <div class="card-box height-100-p widget-style3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="widget-data">
                                                        <div class="weight-700 font-24 text-dark">10+</div>
                                                        <div class="font-14 text-secondary weight-500">
                                                            <a href="{{ route('admin.site.setting') }}"><h6>Site Setting</h6></a>
                                                        </div>
                                                    </div>
                                                    <div class="widget-icon">
                                                        <div class="icon" data-color="#ff5b5b"
                                                            style="color: rgb(255, 91, 91);">
                                                            <span class="icon-copy ti-heart"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                            <div class="card-box height-100-p widget-style3">
                                                <div class="d-flex flex-wrap">
                                                    <div class="widget-data">
                                                        <div class="weight-700 font-24 text-dark">12+</div>
                                                        <div class="font-14 text-secondary weight-500">
                                                             <a href="{{ route('admin.seo.setting') }}"><h6>Seo Setting</h6></a>
                                                        </div>
                                                    </div>
                                                    <div class="widget-icon">
                                                        <div class="icon">
                                                            <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
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
