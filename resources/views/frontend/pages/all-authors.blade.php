@extends('frontend.layouts.frontend-master')
@section('title', 'all authors')
@section('main')
    <section class="section pb-0">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="row gy-2 align-items-center section-title mb-0 section pt-0">
                        <div class="col-12">
                            <h1 class="h3 mb-0 title">Authors</h1>
                        </div>
                        <div class="col-12">
                            <ul class="list-inline breadcrumb-menu">
                                <li class="list-inline-item">
                                    <a class="text-link" href="{{ route('home.index') }}">Home</a>
                                </li>
                                <li class="list-inline-item">• &nbsp; <a class="text-link" href="javascript:;">Author</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-0">
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <!-- author item -->

                @foreach ($allauthors as $author)
                    <div class="col-xl-9 col-lg-10">
                        <div class="bg-white p-4">
                            <div class="d-sm-flex">
                                <div class="flex-shrink-0">
                                    <img loading="lazy" class="img-fluid me-4 me-md-5" src="{{ asset($author->profile) }}"
                                        alt="{{ $author->name }}" width="124" height="124">
                                </div>
                                <div class="flex-grow-1 mt-3 mt-sm-0">
                                    <h4 class="text-dark mb-1">{{ $author->name }}</h4>
                                    <p class="mb-2">{{ $author->username }}/{{ $author->email }}</p>
                                    <span>{!! Str::words($author->details, '60', ' ') !!}</span>
                                    <a class="ms-2 text-link active"
                                        href="{{ route('post.author', $author->username) }}">Read More <i
                                            class="ti ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="opacity-50 pt-2 pb-1">
                                <hr class="text-dark my-4">
                            </div>
                            <div class="section-title mb-0">
                                <p class="h4 title mb-4">Recent Posts</p>
                            </div>
                            @php
                                $authorrecentposts = App\Models\Post::with(['category', 'author'])
                                    ->where('status', 1)
                                    ->where('author_id', $author->id)
                                    ->latest()
                                    ->take(2)
                                    ->get();
                            @endphp
                            <div class="row gy-5 gx-md-5 align-items-center">
                                @foreach ($authorrecentposts as $post)
                                    <div class="col-lg-4 col-md-6">
                                        <article class="h-100 position-relative">
                                            <h3 class="h5 mb-2 mb-md-3 line-clamp clamp-2">
                                                <a class="text-link stretched-link"
                                                    href="{{ route('post.details', $post->slug) }}"
                                                    title="{{ $post->title }}">
                                                    {!! Str::words($post->title, '8', ' ') !!}
                                                </a>
                                            </h3>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="ti ti-calendar-event me-1"></i> {{ $post->created_at->format('jS  M') }}
                                                </li>
                                                <li class="list-inline-item">•</li>
                                                <li class="list-inline-item">
                                                    <i class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                                                </li>
                                            </ul>
                                        </article>
                                    </div>
                                @endforeach
                               

                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex align-items-center border position-relative p-3">
                                        <div class="flex-grow-1">
                                            <p class="mb-2 lh-1">Read all Posts of</p>
                                            <p class="h5 lh-1 mb-0">
                                                <a class="text-link stretched-link" href="{{ route('post.author',$author->username) }}">{{ $author->name }}</a>
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <line x1="17" y1="7" x2="7" y2="17"></line>
                                                <polyline points="8 7 17 7 17 16"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('frontend.layouts.inc.subscribe-news-letter')
@endsection
