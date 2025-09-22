@php
    $topAuthors = DB::table('posts')
        ->select('author_id', DB::raw('COUNT(*) as total_posts'))
        ->groupBy('author_id')
        ->orderByDesc('total_posts')
        ->take(6)
        ->get();
@endphp
<section class="section bg-white">
    <div class="container">
        <div class="row align-items-center section-title">
            <div class="col-sm-7">
                <h2 class="h3 mb-0 title">{{ $sitesetting->topauthor_title }}</h2>
            </div>
            <div class="col-sm-5 text-end d-none d-sm-block">
                <a class='text-link lead active' href='{{ route('all.authors') }}'> All Authors <i
                        class="ti ti-arrow-up-right"></i>
                </a>
            </div>
        </div>
        <div id="author-list" class="row gy-5 gx-md-5">
            @foreach ($topAuthors as $author)
                @php
                    $authorsdata = App\Models\User::where('id', $author->author_id)->get();
                @endphp
                @foreach ($authorsdata as $authorinfo)
                    <div class="col-lg-4 col-md-6">
                        <a class='bg-body text-dark p-3 d-flex is-hoverable' href='{{ route('post.author',$authorinfo->username) }}'>
                            <div class="flex-shrink-0 me-3">
                                <img loading="lazy" class="shadow img-fluid"
                                    src="{{ asset($authorinfo->profile) }}" alt="{{ $authorinfo->name }}"
                                    width="90" height="90">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex flex-column h-100">
                                    <div>
                                        <h3 class="h4 text-dark mb-1 line-clamp clamp-1">{{ $authorinfo->name }}</h3>
                                        <p class="mb-2 lh-1 line-clamp clamp-1">{{ $authorinfo->username }} / {{ $authorinfo->email }}</p>
                                    </div>
                                    <p class="fw-medium mt-auto mb-0 small">
                                        <i class="ti ti-edit-circle me-2"></i>
                                        <span class="text-black">{{ $author->total_posts }}</span> Published posts
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
