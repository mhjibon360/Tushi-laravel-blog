@php
    $featuredposts = App\Models\Post::where([
        'status' => 1,
        'featured' => 1,
    ])
        ->latest()
        ->take(4)
        ->get();
@endphp
<section class="featured-posts section">
    <div class="container">
        <div class="row align-items-center section-title">
            <div class="col-sm-7">
                <h1 class="h3 mb-0 title">{{ $sitesetting->featured_title }}</h1>
            </div>
            <div class="col-sm-5 text-end d-none d-sm-block">
                <a class='text-link lead active' href='{{ route('all.featured') }}'> Featured Posts <i
                        class="ti ti-arrow-up-right"></i>
                </a>
            </div>
        </div>
        <div class="row gy-5 gx-md-5">
            @foreach ($featuredposts->take(1) as $post)
                <div class="col-lg-4 col-md-6 order-0">
                    <article class="bg-white d-flex flex-column h-100">
                        <div class="post-image">
                            <a class='d-block' href='{{ route('post.details', $post->slug) }}'
                                title='{{ $post->title }}'>
                                <img loading="lazy" class="w-100 h-auto" src="{{ asset($post->thumbnail) }}"
                                    alt="{{ $post->title }}" width="400" height="264">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <ul class="post-meta list-inline mb-3">
                                <li class="list-inline-item">
                                    <i class="ti ti-calendar-event me-1"></i>{{ $post->created_at->format('jS  M, Y') }}
                                </li>
                                <li class="list-inline-item">•</li>
                                <li class="list-inline-item">
                                    <i class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                                </li>
                            </ul>
                            <div class="position-relative">
                                <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                                    <a class='text-link stretched-link' href='{{ route('post.details', $post->slug) }}'
                                        title='{{ $post->title }}'>{!! Str::words($post->title, '8', ' ') !!}</a>
                                </h3>
                                <p class="mb-0 line-clamp clamp-3">{!! Str::limit(strip_tags($post->details), '200', ' ') !!}</p>
                            </div>
                        </div>
                        <div class="post-author d-flex mt-auto p-4">
                            <div class="flex-shrink-0">
                                <a class='is-hoverable' href='{{ route('post.author', $post->author->username) }}'
                                    title='Read all posts of - Robert Britt'>
                                    <img loading="lazy" class="rounded-circle w-auto"
                                        src="{{ asset($post->author->profile) }}" alt="{{ $post->author->name }}"
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

            <div class="col-lg-4 col-md-12 order-2 order-lg-1">
                <div class="row gx-0 gx-md-5 gx-lg-0 gy-5">
                    @foreach ($featuredposts->slice(1, 2) as $post)
                        <div class="col-lg-12 col-md-6">
                            <article class="bg-white d-flex flex-column h-100">
                                <div class="p-4 pb-0">
                                    <ul class="post-meta list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i
                                                class="ti ti-calendar-event me-1"></i>{{ $post->created_at->format('jS  M, Y') }}
                                        </li>
                                        <li class="list-inline-item">•</li>
                                        <li class="list-inline-item">
                                            <i class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                                        </li>
                                    </ul>
                                    <div class="position-relative">
                                        <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                                            <a class='text-link stretched-link'
                                                href='{{ route('post.details', $post->slug) }}'
                                                title='{{ $post->title }}'>{!! Str::words($post->title, '8', ' ') !!}</a>
                                        </h3>
                                        <p class="mb-0 line-clamp clamp-2">{!! Str::limit(strip_tags($post->details), '200', ' ') !!}</p>
                                    </div>
                                </div>
                                <div class="post-author mt-auto p-4 pt-3">
                                    <a class='is-hoverable' href='{{ route('post.author', $post->author->username) }}'
                                        title='Read all posts of -{{ $post->author->name }}'>
                                        <img loading="lazy" class="w-auto rounded-circle me-2"
                                            src="{{ asset($post->author->profile) }}" alt="{{ $post->author->name }}"
                                            width="26" height="26">
                                    </a> by <a class='text-link'
                                        href='{{ route('post.author', $post->author->username) }}'
                                        title='Read all posts of - {{ $post->author->name }}'>{{ $post->author->name }}</a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
            @foreach ($featuredposts->slice(3, 1) as $post)
                <div class="col-lg-4 col-md-6  order-1 order-lg-2">
                    <article class="bg-white d-flex flex-column h-100">
                        <div class="post-image">
                            <a class='d-block' href='{{ route('post.details', $post->slug) }}'
                                title='{{ $post->title }}'>
                                <img loading="lazy" class="w-100 h-auto" src="{{ asset($post->thumbnail) }}"
                                    alt="{{ $post->title }}" width="400" height="264">
                            </a>
                        </div>
                        <div class="p-4 pb-0">
                            <ul class="post-meta list-inline mb-3">
                                <li class="list-inline-item">
                                    <i
                                        class="ti ti-calendar-event me-1"></i>{{ $post->created_at->format('jS  M, Y') }}
                                </li>
                                <li class="list-inline-item">•</li>
                                <li class="list-inline-item">
                                    <i class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                                </li>
                            </ul>
                            <div class="position-relative">
                                <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                                    <a class='text-link stretched-link'
                                        href='{{ route('post.details', $post->slug) }}'
                                        title='{{ $post->title }}'>{!! Str::words($post->title, '8', ' ') !!}</a>
                                </h3>
                                <p class="mb-0 line-clamp clamp-3">{!! Str::limit(strip_tags($post->details), '200', ' ') !!}</p>
                            </div>
                        </div>
                        <div class="post-author d-flex mt-auto p-4">
                            <div class="flex-shrink-0">
                                <a class='is-hoverable' href='{{ route('post.author', $post->author->username) }}'
                                    title='Read all posts of - Robert Britt'>
                                    <img loading="lazy" class="rounded-circle w-auto"
                                        src="{{ asset($post->author->profile) }}" alt="{{ $post->author->name }}"
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
        <div class="d-block d-sm-none mt-5 pt-3">
            <div class="text-center">
                <a class='text-link lead active' href='{{ route('all.featured') }}'> Featured Posts <i
                        class="ti ti-arrow-up-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
