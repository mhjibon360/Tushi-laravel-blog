@php
    $totalpost = App\Models\Post::count();
    $totalactivepost = App\Models\Post::where('status', 1)->count();
    $totalinactivepost = App\Models\Post::where('status', 0)->count();

    $totalfeaturedpost = App\Models\Post::where('featured', 1)->count();
    $totalmonthpost = App\Models\Post::where('post_of_the_month', 1)->count();

    $totallanguage = App\Models\Language::count();
    $totalcategory = App\Models\Category::count();
    $totaltag = App\Models\Tag::count();
    // dd($totalcategory);
@endphp
@extends('backend.layouts.backend-master')
@section('title', 'admin dashboard')
@section('content')
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Welcome Back</h2>
        </div>

        <div class="row pb-10">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totalpost }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Post
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf">
                                <i class="icon-copy fi-arrows-out"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totalactivepost }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Active Post
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b">
                                <span class="icon-copy fi-arrow-up"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totalinactivepost }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Deactive Post
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i class="icon-copy fi-arrow-down" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totalfeaturedpost }}</div>
                            <div class="font-14 text-secondary weight-500">Featured Post</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#09cc06">
                                <i class="icon-copy fi-paperclip" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totalmonthpost }}</div>
                            <div class="font-14 text-secondary weight-500">Post of Month</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ee006c">
                                <i class="icon-copy fi-calendar" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totallanguage }}</div>
                            <div class="font-14 text-secondary weight-500">Total Language</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#21e4e9">
                                <i class="icon-copy fi-shield" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totalcategory }}</div>
                            <div class="font-14 text-secondary weight-500">Total Category</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#4085c6">
                                <i class="icon-copy fi-lightbulb" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $totaltag }}</div>
                            <div class="font-14 text-secondary weight-500">Total Tag</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#962a8b">
                                <i class="icon-copy fi-pricetag-multiple"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-10">
            <div class="col-md-12 mb-20">
                <div class="card-box height-100-p pd-20">
                    <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                        <div class="h5 mb-md-0">Blog Post Report</div>
                        <div class="form-group mb-md-0">

                        </div>
                    </div>
                    {{-- <div id="activities-chart"></div> --}}
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>



        <div class="card-box pb-10">
            <div class="h5 pd-20 mb-0">Recent Blog Post</div>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Author</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Post Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentposts as $item)
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="{{ asset($item->author->profile) }}" class="border-radius-100 shadow"
                                            width="40" height="40" alt="" />
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">{{ $item->author->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('post.details',$item->slug) }}" target="_blank">

                                    {!! Str::limit($item->title, '10', '...') !!}
                                </a>
                            </td>
                            <td>{{ $item->category->category_name }}</td>
                            <td> {{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                @if ($item->status == '0')
                                    <span class="badge badge-pill" data-bgcolor="#ffcccc"
                                        data-color="#ff1a1a">Deactive</span>
                                @else
                                    <span class="badge badge-pill" data-bgcolor="#e7ebf5"
                                        data-color="#265ed7">Active</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class=" px-3">
                {{ $recentposts->links('pagination::bootstrap-5') }}
            </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0">Quick Start</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-20">
                <a href="{{ route('admin.language.index') }}" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="{{ asset('backend') }}/vendors/images/medicine-bro.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Language</h3>
                        <p class="max-width-200">
                            We provide superior health care in a compassionate maner
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="{{ route('admin.category.index') }}" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="{{ asset('backend') }}/vendors/images/remedy-amico.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Category</h3>
                        <p class="max-width-200">
                            Look for prescription and over-the-counter drug information.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="{{ route('admin.post.index') }}" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="{{ asset('backend') }}/vendors/images/paper-map-cuate.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Post</h3>
                        <p class="max-width-200">
                            Convenient locations when and where you need them.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        @include('backend.layouts.includes.footer')
    </div>

@endsection
@push('admin_script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line', // Change type as needed
            data: {
                labels: ['Active Post', 'Deactive Post', 'Featured Post', 'Post of month',
                    'Supported all Language'
                ], // Example labels
                datasets: [{
                    label: 'post data',
                    data: [{{ $totalactivepost }}, {{ $totalinactivepost }}, {{ $totalfeaturedpost }},
                        {{ $totalmonthpost }}, {{ $totallanguage }}
                    ], // Example data
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        // Add more colors if needed
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        // Add more borders if needed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
