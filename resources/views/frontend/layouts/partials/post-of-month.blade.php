@php
    $postofmonths = App\Models\Post::with(['author', 'category'])
        ->where([
            'status' => 1,
            'post_of_the_month' => 1,
        ])
        ->get();
@endphp
@push('style_file')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
<section class="post-of-the-month"
    style="background-image:url('{{ asset( $sitesetting->post_of_month_bg) }}')">
    <div class="container">
        <div class="row owl-carousel">
            @foreach ($postofmonths as $post)
                <div class="col-xl-7 col-lg-8 col-md-10 mx-auto text-center">
                    <div class="mb-5 pb-4">
                        <h2 class="text-uppercase h6 text-black bg-white mb-0 d-inline-block px-3 py-2 lh-1">Post of
                            the month</h2>
                    </div>
                    <ul class="post-meta list-inline mb-3 text-light">
                        <li class="list-inline-item">
                            <i class="ti ti-calendar-event me-1"></i>
                            {{ $post->created_at->format('jS M, Y') }}
                        </li>
                        <li class="list-inline-item">•</li>
                        <li class="list-inline-item">
                            <i class="ti ti-clock-2 me-1"></i>{{ $post->created_at->diffForHumans() }}
                        </li>
                    </ul>
                    <h3 class="h2 post-title mb-4 position-relative">
                        <a class='text-white text-link stretched-link' href='{{ route('post.details', $post->slug) }}'>
                            {!! $post->title !!}
                        </a>
                    </h3>
                    <div class="post-author">
                        <a class='is-hoverable' href='{{ route('post.author', $post->author->username) }}'
                            title='Read all posts of - Alexander Hipp'>
                            <img loading="lazy" class="w-auto rounded-circle me-2"
                                src="{{ asset($post->author->profile) }}" alt="{{ $post->author->name }}" width="26"
                                height="26">
                        </a>
                        <span class="text-light">by </span>
                        <a class='text-link text-white' href='{{ route('post.author', $post->author->username) }}'
                            title='Read all posts of - {{ $post->author->name }}'>{{ $post->author->name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@push('script_file')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                center: true,
                autoplay: true,
            });
        });
    </script>
@endpush
