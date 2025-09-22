@php
    $recentposts = App\Models\Post::where(['status' => 1])
        ->latest()
        ->paginate(6);
@endphp
<section class="section">
    <div class="container">
        <div class="row align-items-center section-title">
            <div class="col-sm-7">
                <h2 class="h3 mb-0 title">{{ $sitesetting->recentpost_title }}</h2>
            </div>
            <div class="col-sm-5 text-end d-none d-sm-block">
                <a class='text-link lead active' href='{{ route('all.blogs') }}'> All Posts <i
                        class="ti ti-arrow-up-right"></i>
                </a>
            </div>
        </div>
        <div class="row gy-5 gx-md-5">
            @foreach ($recentposts as $post)
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
                                    title='Read all posts of - {{ $post->author->name }}'>
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
            <div class="col-12 text-center pt-5 mt-5">
                {{ $recentposts->links('pagination::mypagination') }}
                {{-- <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link page-link-previous bg-transparent rounded-0 px-0 border-0 text-dark text-link active text-uppercase fw-medium"
                            href="#!" aria-label="Pagination Arrow">
                            <i class="ti ti-chevron-left"></i>
                            <span>Previous</span>
                        </a>
                    </li>
                    <li class="page-item page-count" title="Page 1 of 2">
                        <span class="current-page">1</span>
                        <span class="total-page">2</span>
                    </li>
                    <li class="page-item">
                        <a aria-label='Pagination Arrow'
                            class='page-link bg-transparent rounded-0 px-0 border-0 text-dark text-link active text-uppercase fw-medium'
                            href='blog.html'>
                            <span>Next</span>
                            <i class="ti ti-chevron-right"></i>
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
</section>
