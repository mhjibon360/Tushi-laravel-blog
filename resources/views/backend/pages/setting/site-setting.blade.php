@extends('backend.layouts.backend-master')
@section('title', 'manage site setting')
@section('content')
    @push('admin_style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Setting</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    site-setting
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent">
                <form action="{{ route('admin.site.setting.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $sitesetting->id }}">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="pd-20 card-box">
                                <h5 class="h4 text-blue mb-20">Tab Menus</h5>
                                <div class="tab">
                                    <ul class="nav nav-pills flex-col" role="tablist" style="flex-direction: column">
                                        <li class="nav-item">
                                            <a class="nav-link active text-blue" data-toggle="tab" href="#header"
                                                role="tab" aria-selected="true">Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-blue" data-toggle="tab" href="#homebanner"
                                                role="tab" aria-selected="false">Home Banner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-blue" data-toggle="tab" href="#homtitle" role="tab"
                                                aria-selected="false">Home page title(optional)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-blue" data-toggle="tab" href="#postmonthbg"
                                                role="tab" aria-selected="false">Post of Month(Background)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-blue" data-toggle="tab" href="#newsletter"
                                                role="tab" aria-selected="false">Newsletter(Global)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-blue" data-toggle="tab" href="#contactpage"
                                                role="tab" aria-selected="false">Conatct page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-blue" data-toggle="tab" href="#footer" role="tab"
                                                aria-selected="false">Footer</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="p-20 card-box">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="header" role="tabpanel">
                                        <div class="pd-20">
                                            <h4 class="text-blue h5 mb-20">
                                                Manage Logo and Favicon
                                            </h4>
                                            <div class="form-group">
                                                <label for="fav_icon">Website Favicon</label>
                                                <input id="fav_icon" name="fav_icon"
                                                    class="dropify form-control form-control-lg " type="file"
                                                    data-default-file="{{ asset($sitesetting->fav_icon) }}"
                                                    data-height="50">
                                                @error('fav_icon')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="logo">Website Logo</label>
                                                <input id="logo" name="logo"
                                                    class="dropify form-control form-control-lg " type="file"
                                                    data-default-file="{{ asset($sitesetting->logo) }}" data-height="150">
                                                @error('logo')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="homebanner" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label for="home_banner_title">Home Banner Title</label>
                                                <input id="home_banner_title" name="home_banner_title"
                                                    value="{{ $sitesetting->home_banner_title }}"
                                                    class="form-control form-control-lg @error('home_banner_title')        is-invalid    @enderror"
                                                    type="text">
                                                @error('home_banner_title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="postmonthbg" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label for="post_of_month_bg">Post of Month Bg</label>
                                                <input id="post_of_month_bg" name="post_of_month_bg"
                                                    class="dropify form-control form-control-lg " type="file"
                                                    data-default-file="{{ asset($sitesetting->post_of_month_bg) }}"
                                                    data-height="300">
                                                @error('post_of_month_bg')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="homtitle" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label for="recentpost_title">Recent Title</label>
                                                <input id="recentpost_title" name="recentpost_title"
                                                    value="{{ $sitesetting->recentpost_title }}"
                                                    class="form-control form-control-lg @error('recentpost_title')        is-invalid    @enderror"
                                                    type="text">
                                                @error('recentpost_title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="topauthor_title">Top Author Title</label>
                                                <input id="topauthor_title" name="topauthor_title"
                                                    value="{{ $sitesetting->topauthor_title }}"
                                                    class="form-control form-control-lg @error('topauthor_title')        is-invalid    @enderror"
                                                    type="text">
                                                @error('topauthor_title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="featured_title">Featured Title</label>
                                                <input id="featured_title" name="featured_title"
                                                    value="{{ $sitesetting->featured_title }}"
                                                    class="form-control form-control-lg @error('featured_title')        is-invalid    @enderror"
                                                    type="text">
                                                @error('featured_title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="newsletter" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label for="subscribe_news_letter_title">News letter Left Title</label>
                                                <input id="subscribe_news_letter_title" name="subscribe_news_letter_title"
                                                    value="{{ $sitesetting->subscribe_news_letter_title }}"
                                                    class="form-control form-control-lg @error('subscribe_news_letter_title')        is-invalid    @enderror"
                                                    type="text">
                                                @error('subscribe_news_letter_title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="subscribe_news_letter_details">News letter Left
                                                    Details</label>
                                                <input id="subscribe_news_letter_details"
                                                    name="subscribe_news_letter_details"
                                                    value="{{ $sitesetting->subscribe_news_letter_details }}"
                                                    class="form-control form-control-lg @error('subscribe_news_letter_details')        is-invalid    @enderror"
                                                    type="text">
                                                @error('subscribe_news_letter_details')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="subscribe_news_button_text">News letter Button Text</label>
                                                <input id="subscribe_news_button_text" name="subscribe_news_button_text"
                                                    value="{{ $sitesetting->subscribe_news_button_text }}"
                                                    class="form-control form-control-lg @error('subscribe_news_button_text')        is-invalid    @enderror"
                                                    type="text">
                                                @error('subscribe_news_button_text')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="contactpage" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label for="contact_us_title">Contact Title (Heading)</label>
                                                <input id="contact_us_title" name="contact_us_title"
                                                    value="{{ $sitesetting->contact_us_title }}"
                                                    class="form-control form-control-lg @error('contact_us_title')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_title')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_button_text">Contact Us Button (Text)</label>
                                                <input id="contact_us_button_text" name="contact_us_button_text"
                                                    value="{{ $sitesetting->contact_us_button_text }}"
                                                    class="form-control form-control-lg @error('contact_us_button_text')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_button_text')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_right_heading">Contact Us Right
                                                    (Heading)</label>
                                                <input id="contact_us_right_heading" name="contact_us_right_heading"
                                                    value="{{ $sitesetting->contact_us_right_heading }}"
                                                    class="form-control form-control-lg @error('contact_us_right_heading')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_right_heading')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_right_details">Contact Us Right
                                                    (Details)</label>
                                                <input id="contact_us_right_details" name="contact_us_right_details"
                                                    value="{{ $sitesetting->contact_us_right_details }}"
                                                    class="form-control form-control-lg @error('contact_us_right_details')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_right_details')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_email_icon">Contact Us Email (icon
                                                    class)</label>
                                                <input id="contact_us_email_icon" name="contact_us_email_icon"
                                                    value="{{ $sitesetting->contact_us_email_icon }}"
                                                    class="form-control form-control-lg @error('contact_us_email_icon')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_email_icon')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_email_address">Contact Us Email
                                                    (Address)</label>
                                                <input id="contact_us_email_address" name="contact_us_email_address"
                                                    value="{{ $sitesetting->contact_us_email_address }}"
                                                    class="form-control form-control-lg @error('contact_us_email_address')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_email_address')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_phone_icon">Contact Us Phone (Icon
                                                    class)</label>
                                                <input id="contact_us_phone_icon" name="contact_us_phone_icon"
                                                    value="{{ $sitesetting->contact_us_phone_icon }}"
                                                    class="form-control form-control-lg @error('contact_us_phone_icon')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_phone_icon')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_us_phone_address">Contact Us Phone
                                                    (Address)</label>
                                                <input id="contact_us_phone_address" name="contact_us_phone_address"
                                                    value="{{ $sitesetting->contact_us_phone_address }}"
                                                    class="form-control form-control-lg @error('contact_us_phone_address')        is-invalid    @enderror"
                                                    type="text">
                                                @error('contact_us_phone_address')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="footer" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="form-group">
                                                <label for="rss_icon">Rss Icon(class only)</label>
                                                <input id="rss_icon" name="rss_icon"
                                                    value="{{ $sitesetting->rss_icon }}"
                                                    class="form-control form-control-lg @error('rss_icon')        is-invalid    @enderror"
                                                    type="text">
                                                @error('rss_icon')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="rss_text">Rss Text</label>
                                                <input id="rss_text" name="rss_text"
                                                    value="{{ $sitesetting->rss_text }}"
                                                    class="form-control form-control-lg @error('rss_text')        is-invalid    @enderror"
                                                    type="text">
                                                @error('rss_text')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="site_map_text">Site Map Text</label>
                                                <input id="site_map_text" name="site_map_text"
                                                    value="{{ $sitesetting->site_map_text }}"
                                                    class="form-control form-control-lg @error('site_map_text')   is-invalid @enderror"
                                                    type="text">
                                                @error('site_map_text')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="privacy_text">Privacy Text</label>
                                                <input id="privacy_text" name="privacy_text"
                                                    value="{{ $sitesetting->privacy_text }}"
                                                    class="form-control form-control-lg @error('privacy_text') is-invalid @enderror"
                                                    type="text">
                                                @error('privacy_text')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="footer_text">Footer Text</label>
                                                <input id="footer_text" name="footer_text"
                                                    value="{{ $sitesetting->footer_text }}"
                                                    class="form-control form-control-lg @error('footer_text') is-invalid @enderror"
                                                    type="text">
                                                @error('footer_text')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="twitter">Twitter Link</label>
                                                <input id="twitter" name="twitter" value="{{ $sitesetting->twitter }}"
                                                    class="form-control form-control-lg @error('twitter') is-invalid @enderror"
                                                    type="text">
                                                @error('twitter')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="linkdin">Linkdin Link</label>
                                                <input id="linkdin" name="linkdin" value="{{ $sitesetting->linkdin }}"
                                                    class="form-control form-control-lg @error('linkdin') is-invalid @enderror"
                                                    type="text">
                                                @error('linkdin')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="instagram">Instagram Link</label>
                                                <input id="instagram" name="instagram"
                                                    value="{{ $sitesetting->instagram }}"
                                                    class="form-control form-control-lg @error('instagram') is-invalid @enderror"
                                                    type="text">
                                                @error('instagram')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="facebook">Facebook Link</label>
                                                <input id="facebook" name="facebook"
                                                    value="{{ $sitesetting->facebook }}"
                                                    class="form-control form-control-lg @error('facebook') is-invalid @enderror"
                                                    type="text">
                                                @error('facebook')
                                                    <small class=" text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer bg-white text-right">
                        <div class="form-group mb-0 text-end justify-end">
                            <button type="submit" class="btn btn-primary text-right">Save &amp; Update</button>
                        </div>
                    </div>
                </form>
            </div>


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
@endpush
