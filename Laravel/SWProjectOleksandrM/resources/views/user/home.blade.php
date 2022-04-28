@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="h4">You are logged in as an Ordinary User!</p>
                    <p></p>
                    <p class="h6">Go back to <a class="nav-link" href="/user/products">Products Page</a> to view our products.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
