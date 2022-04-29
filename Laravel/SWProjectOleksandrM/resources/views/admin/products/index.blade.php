@extends('layouts.app')

@section ('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-start">Products</h4>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-end">Add</a>
                </div>
                <div class="card-body">
                    @if (count($products)=== 0)
                    <p>There are no Products!</p>
                    @else
                    <table id="table-products" class="table table-hover">
                        <thead>
                            <th>Name:</th>
                            <th>Price:</th>
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
                                    <a href="{{ route('admin.products.show', $product->id) }}"
                                        class="btn btn-primary">View</a>
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="{{ route('admin.products.destroy', $product->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
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
