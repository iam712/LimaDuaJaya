@extends('layouts.app')

@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('title', 'Sign In')

@section('content')

    <style>
        /* General Styles */
        a {
            text-decoration: none;
        }

        .signin-page {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color4 }}));
            overflow: hidden;
        }

        .btn-primary {
            background-color: rgb({{ $color4 }});
            border: none;
        }

        /* Background and Text Color Styles */
        .bg-custom {
            background-color: rgb({{ $color1 }});
            color: rgb({{ $color2 }});
        }

        .bg-custom .form-label,
        .bg-custom .input-group-text,
        .bg-custom h3,
        .bg-custom button {
            color: rgb({{ $color2 }});
        }

        @media (max-width: 768px) {
            .signin-page {
                height: auto;
                padding: 20px 0;
            }

            h3 {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .signin-page {
                height: auto;
                padding: 10px 0;
            }
        }

        /* Animated Background Styles */
        .area {
            width: 100%;
            height: 100vh;
            position: absolute;
            z-index: 0;
        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 1);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        .parallax {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
    </style>

    <section class="parallax">
        <div class="signin-page">
            <!-- Animated Background -->
            <div class="area">
                <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <!-- Sign In Form Content -->
            <div class="container py-5 py-md-3 py-lg-3 mt-5 mt-md-3 mt-lg-3"
                style="font-family: 'LibreBaskerville', serif; z-index: 10;">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="bg-custom shadow rounded-3 p-4 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <!-- Title Above Form -->
                                    <h3 class="text-center mb-4">Please Sign In</h3>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form">

                                        <!-- Display error message -->
                                        @if ($errors->has('login_error'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('login_error') }}
                                            </div>
                                        @endif

                                        <form action="{{ route('signin') }}" method="POST" class="row g-3">
                                            @csrf
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                                    <input type="email" id="email" name="email" class="form-control"
                                                        placeholder="Enter Email" value="{{ old('email') }}" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control" placeholder="Enter Password" required>
                                                </div>
                                            </div>

                                            <div class="col-12" style="z-index: 10;">
                                                <button type="submit" class="btn btn-danger w-100 mt-3">Sign In</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <!-- Static Logo -->
                                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center mt-4 mt-md-0 mt-lg-0">
                                    <img src="{{ asset('images/logo-square.png') }}" alt="Logo Image" class="img-fluid w-75">
                                </div>
                                <!-- End of Static Logo -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
