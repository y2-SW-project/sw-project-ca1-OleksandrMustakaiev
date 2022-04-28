@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center my-4">
            <h1 class="text-white">Gaming PC and Laptops in stock</h1>
            <h6 class="text-white">All models of computers and laptops are available in stock. You can order delivery or pick up at our warehouse.</h6>
        </div>
    </div>
        <hr>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gaming PC and Laptops in stock</div>
                        <div class= "card-body">
                            @if (count ($products)=== 0)
                                <p>There are no Product</p>
                            @else
                                <table id="table-products" class="table table-hover">
                                    <thead>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>GPU:</th>
                                        <th>CPU:</th>
                                        <th>RAM:</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                    <tr data-id="{{ $product->id }}">
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->gpu }}</td>
                                        <td>{{ $product->cpu }}</td>
                                        <td>{{ $product->ram }}</td>

                                        <td>
                                            <a href="{{ route('user.products.show', $product->id) }}" class="btn btn-danger">View</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection





<!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gaming PC and Laptops in stock</div>
                        <div class= "card-body">
                            @if (count ($products)=== 0)
                                <p>There are no Product</p>
                            @else
                                <table id="table-products" class="table table-hover">
                                    <thead>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>GPU:</th>
                                        <th>CPU:</th>
                                        <th>RAM:</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                    <tr data-id="{{ $product->id }}">
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->gpu }}</td>
                                        <td>{{ $product->cpu }}</td>
                                        <td>{{ $product->ram }}</td>

                                        <td>
                                            <a href="{{ route('user.products.show', $product->id) }}" class="btn btn-danger">View</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div> -->