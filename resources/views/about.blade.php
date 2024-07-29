@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Banner -->
    <section class="banner d-flex align-items-center" style="background-color: #FFF2D7; height: 500px; position: relative;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: #FFE0B5; width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px;">
            <h2 class="text-center">Smaller Container</h2> <br>
            <p class="text-center">This is a smaller container inside the banner.</p>
            <button type="button" class="btn" style="background-color: #F8C794; width: auto;">Read more</button>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-muted">Our Story</span>
                        <h2 class="display-5 fw-bold">About Us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="{{ asset('images/logo.png') }}" alt="Company Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background: #ddd;"></div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="{{ asset('images/logo.png') }}" alt="Company Logo">
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-muted">Visi</span>
                        <h2 class="display-5 fw-bold">Visi</h2>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-muted">Misi</span>
                        <h2 class="display-5 fw-bold">Misi</h2>
                        <p class=""><span>1. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <p class=""><span>2. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p class="mb-0"><span>3. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="{{ asset('images/logo.png') }}" alt="Company Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background: #ddd;"></div>
    </div>

    <!-- Review Section -->
    <section class="py-4 mb-2" style="background-color: #FFF2D7;">
        <div class="container">
            <h1 class="text-center">Apa kata mereka?</h1>
        </div>
        <div class="container d-flex justify-content-center mt-5">
            <div class="row d-flex align-items-center">
                <div style="overflow: hidden; white-space: nowrap; position: relative;">
                    <div class="" style="display: flex; align-items: center; animation: marquee 20s linear infinite;">
                        <!-- Static Review Cards -->
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
@endsection
