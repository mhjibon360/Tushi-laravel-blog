<div class="post-meta">
    <div class="section-title mb-3 pb-1">
        <p class="title h4 mb-0">Search Result</p>
    </div>
    <div class="row gy-4">
        @forelse ($searchpostresults as $post)
            <div class="col-md-6">
                <article class="row gx-3 align-items-start position-relative">
                    <div class="col-auto">
                        <img loading="lazy" class="img-fluid" src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}"
                            width="75" height="75">
                    </div>
                    <div class="col">
                        <span class="d-block lh-1 mb-2 zIndexed line-clamp clamp-2">
                            <a class='small lh-1 text-muted text-link'
                                href='{{ route('post.category', $post->category->category_slug) }}'>{{ $post->category->category_name }}</a>
                        </span>
                        <a class='fs-lg lh-base text-dark text-link stretched-link'
                            href='{{ route('post.details', $post->slug) }}'>{{ $post->title }}</a>
                    </div>
                </article>
            </div>
        @empty
            <h5 class=" text-danger">no data found</h5>
        @endforelse
    </div>
</div>
