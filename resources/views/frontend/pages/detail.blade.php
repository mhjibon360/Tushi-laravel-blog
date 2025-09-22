@extends('frontend.layouts.frontend-master')
@section('title', $post->slug)
@push('style_file')
    <link href="{{ asset('frontend/assets/css/prism.css') }}" rel="stylesheet" />
@endpush
@section('main')
    <section class="bg-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    @php
                        $words = str_word_count(strip_tags($post->details));
                        $minToRead = ceil($words / 200); // Assuming 200 words per minute
                    @endphp

                    {{ str_pad($minToRead, 2, '0', STR_PAD_LEFT) }} min read {{ $post->created_at->format('jS M, Y') }}

                    <div class="section">
                        <p class="mb-4 text-muted"> {{ str_pad($minToRead, 2, '0', STR_PAD_LEFT) }} min reading in <span
                                class="mx-2">—</span>
                            <a class="text-link "
                                href="{{ route('post.category', $post->category->category_slug) }}">{{ $post->category->category_name }}</a>
                        </p>
                        <h1 class="mb-3">{{ $post->title }}</h1>
                        <p class="mb-4 pb-1">{{ $post->slug }}</p>
                        <div class="post-author d-flex">
                            <div class="flex-shrink-0">
                                <a class="is-hoverable" href="{{ route('post.author', $post->author->username) }}"
                                    title="Read all posts of - {{ $post->author->name }}">
                                    <img loading="lazy" class="rounded-circle w-auto"
                                        src="{{ asset($post->author->profile) }}" alt="{{ $post->author->name }}"
                                        width="50" height="50">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3"> by <a class="text-link"
                                    href="{{ route('post.author', $post->author->username) }}"
                                    title="Read all posts by - Robert Britt">{{ $post->author->name }}</a>
                                <p class="mb-0 lh-base">Published at {{ $post->created_at->format('jS F, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <img loading="lazy" class="w-100 h-auto" src="{{ asset($post->thumbnail) }}"
                        alt="Can You Build Muscle When You’re Older?" width="1020" height="660">
                </div>
                <div class="col-xl-9 col-lg-10">
                    <div class="section">
                        <div class="content">
                            {!! $post->details !!}
                        </div>
                        <div class="d-block d-sm-flex justify-content-between align-items-center mt-5 pt-3">
                            <ul class="taxonomy-lists list-unstyled list-inline">
                                <li class="list-inline-item d-block mb-3">Tags: </li>
                                @php
                                    $tagids = explode(',', $post->tag_id);
                                    $tags = App\Models\Tag::whereIn('id', $tagids)->get();
                                @endphp
                                @foreach ($tags as $tag)
                                    <li class="list-inline-item">
                                        <a class="bg-white"
                                            href="{{ route('post.tag', $tag->tag_slug) }}">{{ $tag->tag_name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                            <ul class="list-inline social-share text-start text-sm-end mt-4 mt-sm-0">
                                <li class="list-inline-item d-block mb-2 text-start">Share: </li>
                                <li class="list-inline-item lead text-center is-hoverable">
                                    <i class="ti ti-brand-twitter"></i>
                                </li>
                                <li class="list-inline-item lead text-center is-hoverable ms-3">
                                    <i class="ti ti-brand-facebook"></i>
                                </li>
                                <li class="list-inline-item lead text-center is-hoverable ms-3">
                                    <i class="ti ti-brand-linkedin"></i>
                                </li>
                                <li class="list-inline-item lead text-center is-hoverable ms-3">
                                    <i class="ti ti-brand-reddit"></i>
                                </li>
                                <li class="list-inline-item lead text-center is-hoverable ms-3">
                                    <i class="ti ti-brand-pinterest"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="h3 mb-0 title">Related Posts</h2>
                        </div>
                        <div class="row gy-5 gx-4 g-xl-5">
                            @foreach ($relatedposts as $post)
                                <div class="col-lg-4 col-md-6">
                                    <article class="bg-white d-flex flex-column h-100">
                                        <div class="p-4 pb-0">
                                            <ul class="post-meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <i class="ti ti-calendar-event me-1"></i>
                                                    {{ $post->created_at->format('jS  M, Y') }}
                                                </li>
                                                <li class="list-inline-item">•</li>
                                                <li class="list-inline-item">
                                                    <i
                                                        class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                                                </li>
                                            </ul>
                                            <div class="position-relative">
                                                <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                                                    <a class="text-link stretched-link"
                                                        href="{{ route('post.details', $post->slug) }}"
                                                        title="Read more about - {{ $post->title }}">
                                                        {!! Str::words($post->title, '8', ' ') !!}</a>
                                                </h3>
                                                <p class="mb-0 line-clamp clamp-2">
                                                    {!! Str::limit(strip_tags($post->details), '200', ' ') !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="post-author mt-auto p-4 pt-3">
                                            <a class="is-hoverable" href="author-single.html"
                                                title="Read all posts of - Robert Britt">
                                                <img loading="lazy" class="w-auto rounded-circle me-2"
                                                    src="{{ asset($post->author->profile) }}"
                                                    alt="{{ $post->author->username }}" width="26" height="26">
                                            </a> by <a class="text-link" href="author-single.html"
                                                title="Read all posts of - {{ $post->author->name }}">{{ $post->author->name }}</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.layouts.inc.subscribe-news-letter')
@endsection
@push('script_file')
    <script src="{{ asset('frontend/assets/js/prism.js') }}"></script>
@endpush
