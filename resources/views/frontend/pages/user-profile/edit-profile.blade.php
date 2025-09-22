@extends('frontend.layouts.frontend-master')
@section('title', 'your profile')
@push('style_file')
    <style>
        .btn-outline-primary {
            color: blue;
            border: 1px solid blue;
        }

        .btn-outline-warning {
            color: #FFC107;
            border: 1px solid #FFC107;
        }

        .btn-outline-dark {
            color: black;
            border: 1px solid black;
        }

        .btn-outline-info {
            color: #0DCAF0;
            border: 1px solid #0DCAF0;
        }

        .btn-outline-danger {
            color: red;
            border: 1px solid red;
        }
    </style>
@endpush
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-3">


                @include('frontend.layouts.inc.uer-sidebar')

            </div>
            <div class="col-md-8">
                <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Main</a></li>
                            <li class="breadcrumb-item"><a href="#">Sub</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Active</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
@endsection
