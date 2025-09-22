@php
    $sitesetting = App\Models\SiteSetting::first();
@endphp
<footer class="bg-white">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-4 text-center text-lg-start">
                <ul class="list-inline footer-menu">
                    <li class="list-inline-item m-0">
                        <a class="text-link" href="javascript::void;"><i class="{{ $sitesetting->rss_icon }}"></i>
                            {{ $sitesetting->rss_text }} </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-link" href="javascript::void;">{{ $sitesetting->site_map_text }}</a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class='text-link' href='javascript::void;'> {{ $sitesetting->privacy_text }} </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <p class="copyright-text mb-0">&copy;{{ now()->year }} {{ $sitesetting->footer_text }}</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <ul class="list-inline social-links">
                    <li class="list-inline-item  lead text-center">
                        <a class="is-hoverable" target="_blank" href="{{ $sitesetting->twitter }}" title="Twitter">
                            <i class="ti ti-brand-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item ms-3 lead text-center">
                        <a class="is-hoverable" target="_blank" href="{{ $sitesetting->linkdin }}" title="LinkedIn">
                            <i class="ti ti-brand-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item ms-3 lead text-center">
                        <a class="is-hoverable" target="_blank" href="{{ $sitesetting->instagram }}" title="Instagram">
                            <i class="ti ti-brand-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item ms-3 lead text-center">
                        <a class="is-hoverable" target="_blank" href="{{ $sitesetting->facebook }}" title="Facebook">
                            <i class="ti ti-brand-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
