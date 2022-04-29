@extends('layouts.app')

@section ('content')
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12 col-md-offset-2">
        <div class="card">
          <div class="card-header bg-dark text-white">
          <h4 class="pt-2">Edit Product</h4>
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.products.update', $product->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $product->description) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="gpu">GPU</label>
                <input type="text" class="form-control" id="gpu" name="gpu" value="{{ old('gpu', $product->gpu) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="cpu">CPU</label>
                <input type="text" class="form-control" id="cpu" name="cpu" value="{{ old('cpu', $product->cpu) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="ram">RAM</label>
                <input type="text" class="form-control" id="ram" name="ram" value="{{ old('ram', $product->ram) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="motherboard">Motherboard</label>
                <input type="text" class="form-control" id="motherboard" name="motherboard" value="{{ old('motherboard', $product->motherboard) }}" />
              </div>
              <div class="form-group pt-2">
                <label for="storage_device">Storage Device</label>
                <input type="text" class="form-control" id="storage_device" name="storage_device" value="{{ old('storage_device', $product->storage_device) }}" />
              </div>

              <button type="submit" class="btn btn-danger float-right mt-4">Submit</button>
              <a href="{{ route('admin.products.index') }}" class="btn btn-outline-danger mt-4">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
