@extends('layouts.app')

@section('content')
<!-- Container 01 -->
<div class="bg-dark shadow m-5">
    <div class="container mt-5 text-white">
        <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-md-6 p-5">
                <h2 class="h2"><strong>CHECKOUT</strong></h2>

                <!-- FORM -->
                <form class="row g-3 mt-5 border border-1 p-3">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">First Name</label>
                        <input type="search" class="form-control p-3" id="inputName" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Last Name</label>
                        <input type="search" class="form-control p-3" id="inputName" placeholder="Last Name">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="search" class="form-control p-3" id="inputAddress"
                            placeholder="Apartment / House number / Name of the building">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="search" class="form-control p-3" id="inputAddress2" placeholder="Street name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="search" class="form-control p-3" id="inputCity" placeholder="Dublin, etc.">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Post Code</label>
                        <input type="search" class="form-control p-3 mb-4" id="inputPostCode" placeholder="A12 B345">
                    </div>
                </form>
                <!-- DELIVERY -->
                <p class="h4 mt-5">Select a Shipping Method <svg xmlns="http://www.w3.org/2000/svg" width="25"
                        height="25" fill="currentColor" class="bi bi-truck ms-2" viewBox="0 0 16 16">
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg></p>
                <div class="mt-3 border border-1 pt-3 px-3 pb-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p class="list-text">Normal Delivery - <strong>An Post : 0,00 €</strong></p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <p class="list-text">Fast Delivery - UPS - <strong>UPS Express : 6,99 €</strong></p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <p class="list-text">Collect from Warehouse <strong>: FREE</strong></p>
                        </label>
                    </div>
                </div>
                <!-- DELIVERY -->
                <!-- FORM -->
            </div>
            <!-- LEFT SIDE -->
            <!-- RIGHT SIDE -->
            <div class="col-md-6 p-5">
                <h4>ORDER DETAILS (0)</h4>
            </div>
        </div>
        <!-- RIGHT SIDE -->
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
