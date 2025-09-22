@php
    $sitesetting = App\Models\SiteSetting::first();
    $activeroute = Route::currentRouteName();
    $alllanguage = App\Models\Language::all();
@endphp

<header class="header-nav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <button class="navbar-toggler d-inline-flex d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navHeader" aria-controls="navHeader" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="menu-open" width="32" height="32"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="4" y1="6" x2="20" y2="6"></line>
                            <line x1="4" y1="12" x2="14" y2="12"></line>
                            <line x1="4" y1="18" x2="18" y2="18"></line>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="menu-close" width="32" height="32"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <a class='navbar-brand d-flex mb-0 me-0' href='{{ route('home.index') }}' title>
                        <img loading="lazy" class="img-fluid" width="130" height="31"
                            src="{{ asset($sitesetting->logo) }}" alt="">
                    </a>
                    <div class="d-block d-lg-none">
                        <button class="search-toggle" data-toggle="search" aria-label="Search Toggle">
                            <svg width="28" height="28" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="square"
                                    stroke-linejoin="square" />
                                <path
                                    d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z"
                                    stroke="currentColor" stroke-linecap="square" stroke-linejoin="square" />
                            </svg>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navHeader">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item ">
                                <a class='nav-link {{ $activeroute == 'home.index' ? 'active' : '' }}'
                                    href='{{ route('home.index') }}'>Home</a>
                            </li>

                            <li class="nav-item ">
                                <a class='nav-link {{ $activeroute == 'all.featured' ? 'active' : '' }}'
                                    href='{{ route('all.featured') }}'>Featured</a>
                            </li>
                            <li class="nav-item ">
                                <a class='nav-link  {{ $activeroute == 'all.blogs' ? 'active' : '' }}'
                                    href='{{ route('all.blogs') }}'>Latest</a>
                            </li>

                            <li class="nav-item ">
                                <a class='nav-link {{ $activeroute == 'about' ? 'active' : '' }}'
                                    href='{{ route('about') }}'>About</a>
                            </li>
                            <li class="nav-item ">
                                <a class='nav-link {{ $activeroute == 'contact' ? 'active' : '' }}'
                                    href='{{ route('contact') }}'>Contact</a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item ">
                                    <a class='nav-link {{ $activeroute == 'dashboard' ? 'active' : '' }}'
                                        href='{{ route('dashboard') }}'>Hi {{ Auth::user()->name }}!</a>
                                </li>
                            @else
                                <li class="nav-item ">
                                    <a class='nav-link {{ $activeroute == 'login' ? 'active' : '' }}'
                                        href='{{ route('login') }}'>Login/Register</a>
                                </li>
                            @endif

                            <li class="nav-item ">
                                <!-- Google Translate Hidden Div -->
                                <div id="google_translate_element" style="display:none;"></div>

                                <!-- Custom Language Dropdown -->
                                <select id="custom_translate_dropdown" class="form-control sm">
                                    <option value="" disabled style="display: none;">Select Language</option>
                                    @foreach ($alllanguage as $language)
                                        <option value="{{ $language->language_short }}">
                                            {{ $language->language_name }}</option>
                                    @endforeach
                                </select>
                            </li>
                        </ul>
                        <div class="navbar-right d-none d-lg-block">
                            <button class="search-toggle ms-2" data-toggle="search" aria-label="Search Toggle">
                                <svg width="30" height="30" stroke-width="1.5" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="square"
                                        stroke-linejoin="square" />
                                    <path
                                        d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z"
                                        stroke="currentColor" stroke-linecap="square" stroke-linejoin="square" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@push('script_file')
    <!-- Google Translate Init -->
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        function triggerGoogleTranslate(lang) {
            var interval = setInterval(function() {
                var select = document.querySelector('.goog-te-combo');
                if (select) {
                    select.value = lang;
                    select.dispatchEvent(new Event('change'));
                    clearInterval(interval);
                    setSelectedLang(lang); // Custom select এ সিলেক্ট রাখবে
                }
            }, 500);
        }

        document.getElementById('custom_translate_dropdown').addEventListener('change', function() {
            var lang = this.value;
            if (lang) {
                triggerGoogleTranslate(lang);
            }
        });
    </script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
@endpush
