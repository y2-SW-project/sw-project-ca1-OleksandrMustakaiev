@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="mt-2">{{ __('Dashboard') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="h4">You are logged in as an Ordinary User!</p>
                    <p></p>
                    <p class="h6">Go back to <a class="link-danger" href="/user/products">Products Page</a> to view our products.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
