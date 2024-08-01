@extends('layouts.app')

{{-- Color library --}}
@php
    $color0 = '216, 174, 126'; // #d8ae7e
    $color1 = '232, 186, 137'; // #e8ba89
    $color2 = '248, 199, 148'; // #f8c794
    $color3 = '251, 211, 164'; // #fbd3a4
    $color4 = '255, 224, 181'; // #ffe0b5
    $color5 = '255, 233, 198'; // #ffe9c6
    $color6 = '255, 242, 215'; // #fff2d7
    $color7 = '255, 248, 235'; // #fff8eb
    $color8 = '255, 255, 255'; // #000000
    $color9 = '0, 0, 0'; // #ffffff
    $color10 = '255, 0, 0'; // #ff0000
    $color11 = '163, 54, 54'; // #a33636
    $color12 = '75, 12, 12'; // #4b0c0c
    $color13 = '255, 184, 0'; // #ffb800
    $color14 = '255, 199, 55'; // #FFC737
    $color15 = '255, 214, 110'; // #FFD66E
    $color16 = '255, 229, 150'; // #FFE596
    $color17 = '255, 239, 180'; // #FFEFB4

    // Command to use rgb color
    // style="color: rgb({{ $color0 }});"
    // style="background-color: rgb({{ $color1 }});"
    // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));"

@endphp

@section('title', 'About Us')

@section('content')
    <!-- Banner -->
    <section class="banner d-flex align-items-center"
        style="background-color: rgb({{ $color13 }}); height: 100vh; position: relative;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: rgb({{ $color14 }}); width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px;">
            <h2 class="text-center">Smaller Container</h2> <br>
            <p class="text-center">This is a smaller container inside the banner.</p>
            <a href="#aboutUsSection" class="btn text-light"
                style="background-color: rgb({{ $color12 }}); width: auto;">Read more</a>
        </div>
    </section>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color13 }});"></div>
    </div>

    <!-- About Us -->
    <section id="aboutUsSection" class="py-5 py-sm-5 fade-section"
        style="background: linear-gradient(to bottom, rgb({{ $color13 }}), rgb({{ $color14 }}));">
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
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color14 }});"></div>
    </div>


    <div style="background: linear-gradient(to bottom, rgb({{ $color14 }}), rgb({{ $color15 }}));">
        <!-- Visi -->
        <section id="visiSection" class="py-5 fade-section fade-in-left"
            style="">
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


        <!-- Misi -->
        <section id="misiSection" class="py-5 fade-section fade-in-right"
            style="">
            <div class="container">
                <div class="row align-items-center gx-4">
                    <div class="col-md-6 offset-md-1">
                        <div class="ms-md-2 ms-lg-5">
                            <span class="text-muted">Misi</span>
                            <h2 class="display-5 fw-bold">Misi</h2>
                            <p class=""><span>1. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            <p class=""><span>2. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
                                eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="mb-0"><span>3. </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do
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

    </div>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color15 }});"></div>
    </div>

    <!-- Review Section -->
    <section class="py-4 mb-2"
        style="background: linear-gradient(to bottom, rgb({{ $color15 }}), rgb({{ $color16 }}));">
        <div class="container">
            <h1 class="text-center">Apa kata mereka?</h1>
        </div>
        <div class="container d-flex justify-content-center mt-5">
            <div class="review-wrapper d-flex align-items-center overflow-hidden">
                <div class="review-content d-flex">
                    <!-- Review Cards -->
                    @for ($i = 0; $i < 10; $i++)
                        <div class="card mx-2"
                            style="width: 18rem; flex-shrink: 0; background-color: rgb({{ $color12 }});">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text text-light">Will come back again!</p>
                                <p class="card-text mb-2 text-light">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </section>

    <style>
        .review-wrapper {
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .review-content {
            display: flex;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .fade-section {
            opacity: 0;
            transition: opacity 0.6s ease-out;
        }

        .fade-section.visible {
            opacity: 1;
        }

        .fade-in-left {
            transform: translateX(-50px);
            transition: transform 0.6s ease-out, opacity 0.6s ease-out;
        }

        .fade-in-left.visible {
            transform: translateX(0);
        }

        .fade-in-right {
            transform: translateX(50px);
            transition: transform 0.6s ease-out, opacity 0.6s ease-out;
        }

        .fade-in-right.visible {
            transform: translateX(0);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.fade-section');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            }, {
                threshold: 0.1 // Adjust as needed
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
@endsection
