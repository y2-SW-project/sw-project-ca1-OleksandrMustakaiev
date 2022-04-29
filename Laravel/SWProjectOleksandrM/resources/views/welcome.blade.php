@extends('layouts.app')

@section ('content')
<style>
    .button_class {
        position: absolute;
        bottom: 30px;
        right: 30px;
    }

</style>

<!-- Container 01 - Image -->
<div class="col-12 position-relative">
    <img src="{{ URL::to('/storage//homepage copy.jpg') }}" class="img-fluid">
    <a href="/user/products" class="btn btn-danger button_class">VIEW ALL PRODUCTS</a>
</div>

<!-- Container 02 - Other Companies -->
<div class="bg-dark shadow">
    <div class="container">
        <div class="row">
            <div class="text-white text-center mt-5">
                <h1 class="mt-3">YOU CAN ALSO BUY OUR PC HERE</h1>
            </div>
            <!-- Card 1 -->
            <div class="my-5" style="width: 18rem;">
                <img src="{{ URL::to('/storage//amazon.png') }}" class="card-img-top" alt="...">
            </div>
            <!-- Card 2 -->
            <div class="my-5" style="width: 18rem;">
                <img src="{{ URL::to('/storage//adverts.png') }}" class="card-img-top" alt="...">
            </div>
            <!-- Card 3 -->
            <div class="my-5" style="width: 18rem;">
                <img src="{{ URL::to('/storage//ebay.png') }}" class="card-img-top" alt="...">
            </div>
            <!-- Card 4 -->
            <div class="my-5" style="width: 18rem;">
                <img src="{{ URL::to('/storage//dd.png') }}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
</div>

<!-- Container 03 - New Products -->
<div class="text-white text-center mt-5">
    <h1 class="">POPULAR PRODUCTS</h1>
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row g-0 justify-content-center">
                <!-- Card 1 -->
                <div class="card bg-dark text-white mt-5 col-3 mx-2 shadow" style="width: 18rem;">
                    <img src="{{ URL::to('/storage/images/bRvJdMKe1KVduwugUhy9jHtAfqk5NOAWWRdm6Cj4.jpg') }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ELITE</h5>
                        <p class="card-text">Fully white gaming PC</p>
                        <div class="d-grid">
                            <a href="http://localhost:8000/user/products/15"
                                class="btn btn-danger btn-lg md-block">More Info</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card bg-dark text-white mt-5 col-3 mx-2 shadow" style="width: 18rem;">
                    <img src="{{ URL::to('/storage/images/zYeRn1rrT8BC6ZsvgiSXKTaH4IWlAEQnUm0hgwoG.jpg') }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">LUMEN</h5>
                        <p class="card-text">Ideal gaming PC</p>
                        <div class="d-grid">
                            <a href="http://localhost:8000/user/products/4"
                                class="btn btn-danger btn-lg md-block">More Info</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card bg-dark text-white mt-5 col-3 mx-2 shadow" style="width: 18rem;">
                    <img src="{{ URL::to('/storage/images/QFxHoT6YFAbugDIjMbg5Ttgehcwd2Wv6TyE6PvEx.jpg') }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">EPIX</h5>
                        <p class="card-text">Starter gaming PC</p>
                        <div class="d-grid">
                            <a href="http://localhost:8000/user/products/3"
                                class="btn btn-danger btn-lg md-block">More Info</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card bg-dark text-white mt-5 col-3 mx-2 shadow" style="width: 18rem;">
                    <img src="{{ URL::to('/storage/images/F5J8EUIaKF7IZvdcJkMXX9UOm1gYiHTCdgL0FVOf.jpg') }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">DYNAMIC</h5>
                        <p class="card-text">Powerful gaming PC</p>
                        <div class="d-grid">
                            <a href="http://localhost:8000/user/products/5"
                                class="btn btn-danger btn-lg md-block">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<section class="bg-dark mt-5">
    <div class="container">
      <div class="row text-white justify-content-between">
        <div class="col-md-4 my-5">
          <h2 class="navbar-brand fw-bold"><strong>AuroraPC</strong></h2>
          <p>an online shop that repairing, upgrading and sells Gaming Laptops, Custom PC, Gaming PC, PC for work – working with photoshop, lightroom etc. Also, it will sell Accessories for gaming such as – Monitors, mouses, keyboards, Headsets, Microphones and so on.</p>
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
