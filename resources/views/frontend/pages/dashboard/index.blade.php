@extends('frontend.layouts.frontend-master')
@section('title', 'dashboard')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.layouts.inc.uer-sidebar')
            </div>
            <div class="col-md-8">
                <div class="card mt-4 p-4">
                    <h6 class=" text-capitalize">Dashboard</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">dashboard</li>
                        </ol>
                    </nav>
                    <hr>

                    <div class="row">
                        <div class="col-lg-7" style="background: #F2F3E8;">

                            <div class="form-group my-2">
                                <input type="text" disabled style="background: #F2F3E8" class="form-control "
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group my-2">
                                <input type="text" disabled style="background: #F2F3E8" class="form-control "
                                    value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group my-2">
                                <input type="text" disabled style="background: #F2F3E8" class="form-control "
                                    value="{{ Auth::user()->username }}">
                            </div>
                            <div class="form-group my-2">
                                <input type="text" disabled style="background: #F2F3E8" class="form-control "
                                    value="{{ Auth::user()->created_at->format('d/M/Y') }} (join date)">
                            </div>





                        </div>
                        <div class="col-lg-5">

                            <div class="form-group my-2 ">
                                <img src="{{ asset(Auth::user()->profile) }}" class=" img-fluid img-thumbnail"
                                    style="height: 240px;width:240px;" style="background: #F2F3E8" alt="">

                            </div>
                        </div>
                    </div>
                    <hr>




                    <div class="card-footer" style="background: #F2F3E8">
                        <strong>Last Update :
                            {{ Auth::user()->updated_at ? Auth::user()->updated_at->diffForHumans() : 'no update found' }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script_file')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush
