@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Banner -->
    <section class="banner d-flex align-items-center" style="background-color: #FFF2D7; height: 100vh; position: relative;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: #FFE0B5; width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px;">
            <h2 class="text-center">Smaller Container</h2> <br>
            <p class="text-center">This is a smaller container inside the banner.</p>
            <a href="#aboutUsSection" class="btn" style="background-color: #F8C794; width: auto;">Read more</a>
        </div>
    </section>

    <section id="aboutUsSection" class="py-5 fade-section">
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

    <section id="visiSection" class="py-5 fade-section fade-in-left">
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

    <section id="misiSection" class="py-5 fade-section fade-in-right">
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
            <div class="review-wrapper d-flex align-items-center overflow-hidden">
                <div class="review-content d-flex">
                    <!-- Review Cards -->
                    @for ($i = 0; $i < 10; $i++)
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="review-content d-flex">
                    <!-- Duplicate Review Cards for seamless scrolling -->
                    @for ($i = 0; $i < 10; $i++)
                        <div class="card mx-2" style="width: 18rem; flex-shrink: 0; background-color:#F8C794;">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text">Will come back again!</p>
                                <p class="card-text mb-2 text-muted">Emily Davis | <span>emily@example.com</span></p>
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
            transition: opacity 1.2s ease-out; /* Longer duration */
        }

        .fade-section.visible {
            opacity: 1;
        }

        .fade-in-left {
            transform: translateX(-50px);
            transition: transform 1.2s ease-out, opacity 1.2s ease-out; /* Longer duration */
        }

        .fade-in-left.visible {
            transform: translateX(0);
        }

        .fade-in-right {
            transform: translateX(50px);
            transition: transform 1.2s ease-out, opacity 1.2s ease-out; /* Longer duration */
        }

        .fade-in-right.visible {
            transform: translateX(0);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
