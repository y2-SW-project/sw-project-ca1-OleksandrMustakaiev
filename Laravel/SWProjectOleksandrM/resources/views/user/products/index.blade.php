@extends('layouts.app')

@section('content')
<style>
    .hr_grey {
        border: 1px solid grey;
    }

</style>

<div class="container pt-5">
    <div class="text-center my-4">
        <h1 class="text-white">Gaming PC and Laptops in stock</h1>
        <h6 class="text-white">All models of computers and laptops are available in stock. You can order delivery or
            pick up at our warehouse.</h6>
    </div>
</div>
<hr class="hr_grey">
<!-- Card -->
<div class="container">
    <div class="col-md-12">
        <div class="row">
            @foreach ($products as $product)
            <div class="card bg-dark text-white m-3 shadow" style="width: 18rem;">
                <img src="{{ asset('storage/images/' . $product->image_location) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <h5 class="card-title">{{ $product->price }}</h5>
                    <p class="card-text text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-check-circle" viewBox="0 0 19 19">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg> In Stock</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gpu-card" viewBox="0 0 19 19">
                            <path
                                d="M4 8a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm7.5-1.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z" />
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .5.5V4h13.5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5H2v2.5a.5.5 0 0 1-1 0V2H.5a.5.5 0 0 1-.5-.5Zm5.5 4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM9 8a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z" />
                            <path
                                d="M3 12.5h3.5v1a.5.5 0 0 1-.5.5H3.5a.5.5 0 0 1-.5-.5v-1Zm4 1v-1h4v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5Z" />
                        </svg> GPU: {{ $product->gpu }}</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cpu" viewBox="0 0 19 19">
                            <path
                                d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                        </svg> CPU: {{ $product->cpu }}</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-memory" viewBox="0 0 19 19">
                            <path
                                d="M1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.586a1 1 0 0 0 .707-.293l.353-.353a.5.5 0 0 1 .708 0l.353.353a1 1 0 0 0 .707.293H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1Zm.5 1h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm5 0h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm4.5.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4ZM2 10v2H1v-2h1Zm2 0v2H3v-2h1Zm2 0v2H5v-2h1Zm3 0v2H8v-2h1Zm2 0v2h-1v-2h1Zm2 0v2h-1v-2h1Zm2 0v2h-1v-2h1Z" />
                        </svg> RAM: {{ $product->ram }}</p>
                    <div class="d-grid">
                        <a href="{{ route('user.products.show', $product->id) }}"
                            class="btn btn-danger stretched-link md-block"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 19 19">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg> View Product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Footer -->
<section class="bg-dark mt-5">
    <div class="container">
        <div class="row text-white justify-content-between">
            <div class="col-md-4 my-5">
                <h2 class="navbar-brand fw-bold"><strong>AuroraPC</strong></h2>
                <p>an online shop that repairing, upgrading and sells Gaming Laptops, Custom PC, Gaming PC, PC for work
                    – working with photoshop, lightroom etc. Also, it will sell Accessories for gaming such as –
                    Monitors, mouses, keyboards, Headsets, Microphones and so on.</p>
            </div>

            <div class="col-md-4 my-5">
                <div class="row text-center text-sm-start">
                    <ul class="nav flex-column col-md-4 mb-5">
                        <li class="fw-bold">Account</li>
                        <li class="mt-2">Profile</li>
                        <li class="mt-1">Settings</li>
                        <li class="mt-1">Billing</li>
                        <li class="mt-1">Notifications</li>
                    </ul>
                    <ul class="nav flex-column col-md-4 mb-5">
                        <li class="fw-bold">About</li>
                        <li class="mt-2">Services</li>
                        <li class="mt-1">Contact</li>
                        <li class="mt-1">Careers</li>
                    </ul>
                    <ul class="nav flex-column col-md-4 mb-5">
                        <li class="fw-bold">Company</li>
                        <li class="mt-2">Terms</li>
                        <li class="mt-1">Privacy</li>
                        <li class="mt-1">Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
