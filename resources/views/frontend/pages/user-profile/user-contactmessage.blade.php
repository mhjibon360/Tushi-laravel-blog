@extends('frontend.layouts.frontend-master')
@section('title', 'contat message')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.layouts.inc.uer-sidebar')
            </div>
            <div class="col-md-8">
                <div class="card mt-4 p-4">
                    <h6 class=" text-capitalize">Contact Message</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact-message</li>
                        </ol>
                    </nav>
                    <hr>

                    <div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactmessage as $message)
                                        <tr class="">
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td scope="row">{{ $message->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $contactmessage->links('pagination::mypagination') }}
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
