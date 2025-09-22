@php
    $sitesetting = App\Models\SiteSetting::first();
    $seosetting = App\Models\SeoSetting::first();
    $siderecentposts = App\Models\Post::with(['category', 'author'])
        ->where('status', 1)
        ->latest()
        ->take(5)
        ->get();
    $allpopularcategory = App\Models\Category::inRandomOrder()->take(15)->get();
@endphp
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style>
        .content .navbar-light .navbar-nav a.nav-link:not(.btn),
        .navbar-light .navbar-nav .content a.nav-link:not(.btn),
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .show>.nav-link {
            /* color: rgba(0,0,0,.9); */
            color: #0a101a !important;
        }



        .skiptranslate {
            display: none !important;
        }
    </style>
    <meta name="author" content="{{ $seosetting->meta_author }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="{{ $seosetting->meta_description }}">
    <meta name="keywords" content="{{ $seosetting->meta_keywords }}">
    <meta name="robots" content="{{ $seosetting->meta_robots }}">

    <link rel="canonical" href="{{ $seosetting->canonical_url }}">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="{{ $seosetting->og_title }}">
    <meta property="og:description" content="{{ $seosetting->og_description }}">
    <meta property="og:image" content="{{ asset($seosetting->og_image) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seosetting->twitter_title }}">
    <meta name="twitter:description" content="{{ $seosetting->twitter_description }}">
    <meta name="twitter:image" content="{{ asset($seosetting->twitter_image) }}">

    <link rel="shortcut icon" href="{{ asset($sitesetting->fav_icon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset($sitesetting->fav_icon) }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset($sitesetting->fav_icon) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css" rel="stylesheet" />

    <!-- CSS Plugins and Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    @stack('style_file')
    @routes()
</head>

<body>

    <div class="header-height-fix"></div>
    <!-- start header-nav -->
    @include('frontend.layouts.inc.header')
    <!-- end header-nav -->

    <!-- start search block -->
    <div class="search-overlay" data-toggle="search-close"></div>
    <div class="search-block overflow-auto bg-body">
        <div data-toggle="search-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>

        <div class="is-hidden">
            <input type="text" id="search_data" name="search_data" id="js-search-input"
                placeholder="Type to search blog.." aria-label="search-query">
        </div>

        <div class="mt-4 pt-2 is-hidden popular-topics">
            <div class="post-meta">
                <div class="section-title mb-3">
                    <p class="title h4 mb-0">Popular topics</p>
                </div>
                <ul class="taxonomy-lists list-inline">
                    @foreach ($allpopularcategory as $category)
                        <li class="list-inline-item me-2 mt-2">
                            <a class='bg-white'
                                href='{{ route('post.category', $category->category_slug) }}'>{{ $category->category_name }}</a>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>

        <div class="mt-4 pt-2 is-hidden recent-posts search_post_holder" id="search_post_holder">
            <!--search post-->
        </div>

        <div class="mt-4 pt-2 is-hidden recent-posts" id="recent_posts">
            <div class="post-meta">
                <div class="section-title mb-3 pb-1">
                    <p class="title h4 mb-0">Recent Posts</p>
                </div>
                <div class="row gy-4">
                    @foreach ($siderecentposts as $post)
                        <div class="col-md-6">
                            <article class="row gx-3 align-items-start position-relative">
                                <div class="col-auto">
                                    <img loading="lazy" class="img-fluid" src="{{ asset($post->thumbnail) }}"
                                        alt="{{ $post->title }}" width="75" height="75">
                                </div>
                                <div class="col">
                                    <span class="d-block lh-1 mb-2 zIndexed line-clamp clamp-2">
                                        <a class='small lh-1 text-muted text-link'
                                            href='{{ route('post.category', $post->category->category_slug) }}'>{{ $post->category->category_name }}</a>
                                    </span>
                                    <a class='fs-lg lh-base text-dark text-link stretched-link'
                                        href='{{ route('post.details', $post->slug) }}'>{{ $post->title }}</a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- end search block -->

    @yield('main')

    <!-- start footer -->
    @include('frontend.layouts.inc.footer')

    <!-- scroll-to-top -->
    <button class="scroll-to-top">
        <i class="ti ti-arrow-up"></i>
    </button>
    <!-- end footer -->

    <!-- JS Plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/lightense/lightense.min.js"></script>

    <!-- Main Script -->
    <script src="{{ asset('frontend') }}/assets/js/script.js"></script>




    @stack('script_file')
    <script>
        $(document).ready(function() {
            $(document).on('keyup', '#search_data', function() {
                var search_data = $(this).val();
                if (search_data.length > 0) {
                    $.ajax({
                        type: "GET",
                        url: route('search.blog'),
                        data: {
                            search_data: search_data,
                        },
                        dataType: "html",
                        success: function(response) {
                            $('#search_post_holder').html(response);
                            $('#recent_posts').hide();

                        }
                    });
                } else {
                    $('#search_post_holder').html('');
                    $('#recent_posts').show();
                }

            });
        });
    </script>
</body>

</html>
