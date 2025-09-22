@extends('frontend.layouts.frontend-master')
@section('title', $author->name)
@section('main')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 text-center">
                    <div class="mb-5">
                        <img loading="lazy" class="img-fluid" src="{{ asset($author->profile) }}" alt="{{ $author->username }}"
                            width="180" height="180">
                    </div>
                    <h1 class="h2 text-dark mb-1">{{ $author->name }}</h1>
                    <p>{{ $author->email }}</p>
              
                    <p class="mb-3">
                        <span class="fw-medium text-black">
                            <i class="ti ti-edit-circle me-2"></i>{{ $authorpostscount }} </span> Published Posts
                    </p>
                    <div class="content">
                        <p>{!! $author->details !!}</p>
                    </div>
                    <ul class="list-inline social-links mt-4">
                        <li class="list-inline-item me-4 mt-1 text-center">
                            <a class="lh-1" href="{{ $author->twitter }}" title="Twitter">
                                <i class="ti ti-brand-twitter"></i>
                                <span class="text-link">Twitter</span>
                            </a>
                        </li>
                        <li class="list-inline-item me-4 mt-1 text-center">
                            <a class="lh-1" href="{{ $author->linkdin }}" title="Linkedin">
                                <i class="ti ti-brand-linkedin"></i>
                                <span class="text-link">Linkedin</span>
                            </a>
                        </li>
                        <li class="list-inline-item me-4 mt-1 text-center">
                            <a class="lh-1" href="{{ $author->facebook }}" title="Facebook">
                                <i class="ti ti-brand-facebook"></i>
                                <span class="text-link">Facebook</span>
                            </a>
                        </li>
                    </ul>
                    <div class="section">
                        <div class="border-top"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center section-title">
                <div class="col-12 text-center">
                    <h2 class="h3 mb-0 title">Recent Posts</h2>
                </div>
            </div>
            <div class="row gy-5 gx-md-5">
                @foreach ($authorposts as $post)
                    <div class="col-lg-4 col-md-6">
                        <article class="bg-white d-flex flex-column h-100">
                            <div class="post-image">
                                <a class="d-block" href="{{ route('post.details', $post->slug) }}" title="Msoft\" s=""
                                    smart="" fabric="" that="" can="" detect=""
                                    objects="" and="" gestures'="">
                                    <img loading="lazy" class="w-100 h-auto" src="{{ asset($post->thumbnail) }}"
                                        alt="Msoft's smart fabric that can detect objects and gestures" width="400"
                                        height="264">
                                </a>
                            </div>
                            <div class="p-4 ">
                                <ul class="post-meta list-inline mb-3">
                                    <li class="list-inline-item">
                                        <i class="ti ti-calendar-event me-1"></i>
                                        {{ $post->created_at->format('jS  M, Y') }}
                                    </li>
                                    <li class="list-inline-item">•</li>
                                    <li class="list-inline-item">
                                        <i class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                                    </li>
                                </ul>
                                <div class="position-relative">
                                    <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                                        <a class="text-link stretched-link" href="{{ route('post.details', $post->slug) }}"
                                            title="{{ $post->title }}" s="" smart="" fabric="" that=""
                                            can="" detect="" objects="" and="" gestures'="">
                                            {!! Str::words($post->title, '8', ' ') !!}
                                        </a>
                                    </h3>
                                    <p class="mb-0 line-clamp clamp-3">{!! Str::limit(strip_tags($post->details), '200', ' ') !!}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    @include('frontend.layouts.inc.subscribe-news-letter')
@endsection
