@push('style_file')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .btn-outline-success {
            color: #198754;
            border: 1px solid #198754;
        }

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
@php
    $uercurrentroutename = Route::currentRouteName();
@endphp
<div class="card my-4 justify-content-center text-center">
    <div class="card-heder  p-2">
        <div class=" img-thumbnail shadow-sm">
            <img class="card-img-top img-thumbnail img-fluid " style="height: 120px;width:120px;"
                src="{{ asset(Auth::user()->profile) }}" alt="Title" />
            <h4 class="card-title mt-1 mb-0">{{ Auth::user()->name }}</h4>
            <p class="card-text  font-italic" style="font-style: italic">{{ Auth::user()->email }}</p>
        </div>
    </div>
    <hr style="width: 200px;margin:0 auto;">
    <div class="card-body">
        <a href="{{ route('dashboard') }}"
            class="w-full btn-block  my-1 {{ $uercurrentroutename == 'dashboard' ? 'btn  btn-success' : 'btn  btn-outline-success' }}"
            style="width: 100%;">Dashboard</a>
        <a href="{{ route('edit.profile') }}"
            class="w-full btn-block  my-1 {{ $uercurrentroutename == 'edit.profile' ? 'btn  btn-primary' : 'btn  btn-outline-primary' }}"
            style="width: 100%;">Edit Profile</a>
        <a href="{{ route('edit.password') }}"
            class="w-full btn-block  my-1 {{ $uercurrentroutename == 'edit.password' ? 'btn btn-warning' : 'btn btn-outline-warning' }}"
            style="width: 100%;">change
            Password</a>
        <a href="{{ route('newsletter') }}"
            class="w-full btn-block  my-1 {{ $uercurrentroutename == 'newsletter' ? 'btn btn-dark' : 'btn btn-outline-dark' }}"
            style="width: 100%;">Newsletter</a>
        <a href="{{ route('contact.message') }}"
            class="w-full btn-block my-1 {{ $uercurrentroutename == 'contact.message' ? 'btn btn-info' : 'btn btn-outline-info' }}"
            style="width: 100%;">Contact
            Message</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            @method('POST')
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                        this.closest('form').submit();"
                class="w-full btn-block btn btn-outline-danger my-1" style="width: 100%;">Logout</a>
        </form>
    </div>
</div>
