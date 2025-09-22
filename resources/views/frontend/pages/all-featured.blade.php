@extends('frontend.layouts.frontend-master')
@section('title', 'all featured')
@section('main')
    <section class="section">
        <div class="container">
            <div class="row gy-2 align-items-center section-title mb-0 section pt-0">
                <div class="col-12">
                    <p class="mb-3"></p>
                    <h1 class="h3 mb-0 title">All Featured Posts</h1>
                </div>
                <div class="col-12">
                    <ul class="list-inline breadcrumb-menu">
                        <li class="list-inline-item">
                            <a class="text-link" href="{{ route('home.index') }}">Home</a>
                        </li>
                       
                        <li class="list-inline-item">• &nbsp; <a class="text-link"
                                href="javascript:;">Featured</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row gy-5 gx-md-5">

                @foreach ($allfeatured as $post)
                    <div class="col-lg-4 col-md-6">
                        <article class="bg-white d-flex flex-column h-100">
                            <div class="post-image">
                                <a class='d-block' href='{{ route('post.details', $post->slug) }}'
                                    title='What Do You Do When You Know You’re Not Fine?'>
                                    <img loading="lazy" class="w-100 h-auto" src="{{ asset($post->thumbnail) }}"
                                        alt="{{ $post->title }}" width="400" height="264">
                                </a>
                            </div>
                            <div class="p-4 pb-0">
                                <ul class="post-meta list-inline mb-3">
                                    <li class="list-inline-item">
                                        <i class="ti ti-calendar-event me-1"></i>
                                        {{ $post->created_at->format('jS  M, Y') }}
                                    </li>
                                    <li class="list-inline-item">•</li>
                                    <li class="list-inline-item">
                                        <i class="ti ti-clock-2 me-1"></i> {{ $post->created_at->diffForHumans() }}
                                    </li>
                                </ul>
                                <div class="position-relative">
                                    <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                                        <a class='text-link stretched-link' href='{{ route('post.details', $post->slug) }}'
                                            title='{{ $post->title }}'>
                                            {!! Str::words($post->title, '8', ' ') !!}
                                        </a>
                                    </h3>
                                    <p class="mb-0 line-clamp clamp-3">
                                        {!! Str::limit(strip_tags($post->details), '200', ' ') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="post-author d-flex mt-auto p-4">
                                <div class="flex-shrink-0">
                                    <a class='is-hoverable' href='{{ route('post.author', $post->author->username) }}'
                                        title='Read all posts of - {{ $post->author->username }}'>
                                        <img loading="lazy" class="rounded-circle w-auto"
                                            src="{{ asset($post->author->profile) }}" alt="{{ $post->author->username }}"
                                            width="42" height="42">
                                    </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="mb-0 lh-base small">Written by</p>
                                    <a class='text-link' href='{{ route('post.author', $post->author->username) }}'
                                        title='Read all posts by - {{ $post->author->name }}'>{{ $post->author->name }}</a>
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
