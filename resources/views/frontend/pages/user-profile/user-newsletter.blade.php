@extends('frontend.layouts.frontend-master')
@section('title', 'change your password')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.layouts.inc.uer-sidebar')
            </div>
            <div class="col-md-8">
                <div class="card mt-4 p-4">
                    <h6 class=" text-capitalize">Subscription E-mail</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">newsletter-subscription</li>
                        </ol>
                    </nav>
                    <hr>

                    <div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newletter as $letter)
                                        <tr class="">
                                            <td scope="row">{{ $letter->created_at->diffForHumans() }}</td>
                                            <td>{{ $letter->email }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $newletter->links('pagination::mypagination') }}
                        </div>

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
