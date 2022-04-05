@extends('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                    PC: {{ $product->name }}
                    </div>
                    <div class="card-body">
                        <table id="table-festivals" class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $product->name }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <td>GPU</td>
                                    <td>{{ $product->gpu }}</td>
                                </tr>
                                <tr>
                                    <td>CPU</td>
                                    <td> {{ $product->cpu }}</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td> {{ $product->ram }}</td>
                                </tr>
                                <tr>
                                    <td>Mother Board</td>
                                    <td>{{ $product->motherboard }}</td>
                                </tr>
                                <tr>
                                    <td>Storage Device</td>
                                    <td>{{ $product->storage_device }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="{{ route('user.products.index') }}" class="btn btn-danger">Back</a>
                    </div>
            </div>
        </div>
    </div>
</div>