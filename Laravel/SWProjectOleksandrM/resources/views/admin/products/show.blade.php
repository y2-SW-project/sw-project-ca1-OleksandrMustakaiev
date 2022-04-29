@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="pt-2">PC name: {{ $products->name }}</h4>
                </div>
                <div class="card-body">
                    <table id="table-products" class="table">
                        <tbody>
                            <tr>
                                <td rowspan="8"><img src="{{ asset('storage/images/' . $products->image_location) }}" width="400"></td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>{{ $products->name }}</td>
                            </tr>
                            <tr>
                                <td>Price:</td>
                                <td>{{ $products->price }}</td>
                            </tr>
                            <tr>
                                <td>GPU:</td>
                                <td>{{ $products->gpu }}</td>
                            </tr>
                            <tr>
                                <td>CPU:</td>
                                <td> {{ $products->cpu }}</td>
                            </tr>
                            <tr>
                                <td>RAM:</td>
                                <td> {{ $products->ram }}</td>
                            </tr>
                            <tr>
                                <td>Mother Board:</td>
                                <td>{{ $products->motherboard }}</td>
                            </tr>
                            <tr>
                                <td>Storage Device:</td>
                                <td>{{ $products->storage_device }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('admin.products.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
