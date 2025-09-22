<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <title>blog | @yield('title')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend') }}/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend') }}/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('backend') }}/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/vendors/styles/style.css" />
    @stack('admin_style')
    @routes();
</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="{{ asset('backend') }}/vendors/images/deskapp-logo.svg" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> --}}

    @include('backend.layouts.includes.top-nav')

    @include('backend.layouts.includes.right-sidebar')

    @include('backend.layouts.includes.side-nav')

    <div class="main-container">
        @yield('content')
    </div>

    <!-- js -->
    <script src="{{ asset('backend') }}/vendors/scripts/core.js"></script>
    <script src="{{ asset('backend') }}/vendors/scripts/script.min.js"></script>
    <script src="{{ asset('backend') }}/vendors/scripts/process.js"></script>
    <script src="{{ asset('backend') }}/vendors/scripts/layout-settings.js"></script>
    @stack('admin_script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>
