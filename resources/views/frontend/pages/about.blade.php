@extends('frontend.layouts.frontend-master')
@section('title', 'about us')
@section('main')
    <section class="section">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="row gy-2 align-items-center section-title mb-0 section pt-0">
                        <div class="col-12">
                            <h1 class="h3 mb-0 title">About Us</h1>
                        </div>
                        <div class="col-12">
                            <ul class="list-inline breadcrumb-menu">
                                <li class="list-inline-item">
                                    <a class="text-link" href="https://platol.netlify.app/">Home</a>
                                </li>
                                <li class="list-inline-item">• &nbsp; <a class="text-link" href="about.html">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <img class="img-fluid mb-5" loading="lazy" src="{{ asset('frontend') }}/assets/images/about-image.jpg"
                        alt="">
                    <div class="content">
                        <h3 id="tushi-is-a-media-network-that-builds-and-operates">Tushi is a media network that builds and
                            operates.</h3>
                        <p>We do this with the aim of creating the future of media. The future of media is one that is
                            disruptive, agile, and credible. It embraces diversity, creates a positive impact, and leaves
                            its audience in a better place than where they were before. We advocate for a media that
                            embraces this and we embody.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="section-title">
                        <h2 class="h3 mb-0 title">Our Story</h2>
                    </div>
                    <div class="row gx-lg-5 gy-4">
                        <div class="col-md-6">
                            <div class="content">
                                <p>The truth is important to us, so our work must always be trustworthy and demonstrate
                                    integrity. We push ourselves to move fast and not be afraid to change things up.</p>
                                <p>We actively encourage fresh ideas and creative ways of doing things better.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">Our work must positively impact the lives. We come from different
                                backgrounds and are varied in our thoughts and beliefs. We respect diversity and our work
                                reflects that.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        $ourauthors = App\Models\User::where('status', '1')->where('role', 'admin')->take('4')->get();
    @endphp
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="section-title">
                        <h2 class="h3 mb-0 title">Our Authors</h2>
                    </div>
                    <div id="author-list" class="row gy-5 gx-md-5">
                        @foreach ($ourauthors as $author)
                            <div class="col-md-6">
                                <a class="bg-white text-dark p-3 d-flex is-hoverable" href="author-single.html">
                                    <div class="flex-shrink-0 me-3">
                                        <img loading="lazy" class="shadow img-fluid" src="{{ asset($author->profile) }}"
                                            alt="{{ $author->name }}" width="90" height="90">
                                    </div>
                                    @php
                                        $postocunt = App\Models\Post::where('status', '1')
                                            ->where('author_id', $author->id)
                                            ->count();
                                    @endphp
                                    <div class="flex-grow-1">
                                        <div class="d-flex flex-column h-100">
                                            <div>
                                                <h3 class="h4 text-dark mb-1 line-clamp clamp-1">{{ $author->name }}</h3>
                                                <p class="mb-2 lh-1 line-clamp clamp-1">{{ $author->username }} /
                                                    {{ $author->email }}</p>
                                            </div>
                                            <p class="fw-medium mt-auto mb-0 small">
                                                <i class="ti ti-edit-circle me-2"></i>
                                                <span class="text-black">{{ $postocunt }}</span> Published posts
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="mt-5">
                        <a class="text-link lead active" href="{{ route('all.authors') }}"> View All Authors <i
                                class="ti ti-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.inc.subscribe-news-letter')
@endsection
