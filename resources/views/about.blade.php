@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6

    // Command to use rgb color
    // style="color: rgb({{ $color0 }});"
    // style="background-color: rgb({{ $color1 }});"
    // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));"

@endphp

@section('title', 'About Us')

@section('content')

    <!-- Banner -->
    <section class="banner d-flex align-items-center parallax"
        style="background-image: url('{{ asset('images/banner/imagebg1.jpeg') }}'); background-size: cover; background-position: center; background-attachment: fixed; height: 100vh; position: relative; font-family: Inria Sans, sans-serif;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: rgba({{ $color4 }}, 0.8); width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; box-shadow: 0 0 10px; display: inline-block;">
            <h2 class="text-center text-light fw-bold">PT. Lima Dua Jaya</h2>
            <br>
            <p class="text-center text-light fst-italic">{{ __('messages.aboutbanner') }}</p>
            <a href="#aboutUsSection" class="btn text-light w-auto" style="background-color: rgb({{ $color2 }});">{{ __('messages.aboutbtn') }}</a>
        </div>
    </section>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    <!-- About Us -->
    <section id="aboutUsSection" class="py-5 py-sm-5 fade-section parallax"
        style="background-image: url('{{ asset('images/banner/aboutusbg1.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; font-family: Inria Sans, sans-serif;">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-dark fst-italic">{{ __('messages.aboutspan') }}</span>
                        <h2 class="display-5 fw-bold text-dark">{{ __('messages.abouttitle') }}</h2>
                        <p class="">{{ __('messages.aboutdesc1') }}</p>
                        <p class="mb-0 text-dark">{{ __('messages.aboutdesc2') }}</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="{{ asset('images/logo-square.png') }}" alt="Company Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    <div class="parallax"
        style="background-image: url('{{ asset('images/banner/imagebg2.jpeg') }}'); background-attachment: fixed; background-size: cover; background-position: center; font-family: Inria Sans, sans-serif;">
        <!-- Visi dan Misi -->
        <section id="visiMisiSection" class="py-5 fade-section fade-in-left position-relative d-flex justify-content-center"
            style="overflow: hidden; background-color: rgba({{ $color1 }}, 0.9);">
            <div id="bg-wrap" class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
                <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                            <stop offset="45%" stop-color="rgba({{ $color4 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color3 }}, 0)"></stop>
                        </radialGradient>
                        <radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="23.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                            <stop offset="45%" stop-color="rgba({{ $color4 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color3 }}, 0)"></stop>
                        </radialGradient>
                        <radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="21.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                            <stop offset="45%" stop-color="rgba({{ $color4 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color3 }}, 0)"></stop>
                        </radialGradient>
                        <radialGradient id="Gradient4" cx="50%" cy="50%" fx="4.56417%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="23s" values="0%;5%;0%" repeatCount="indefinite"></animate>
                            <stop offset="45%" stop-color="rgba({{ $color4 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color3 }}, 0)"></stop>
                        </radialGradient>
                    </defs>
                    <rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)"
                        transform="rotate(334.41 50 50)">
                        <animate attributeName="x" dur="20s" values="25%;0%;25%" repeatCount="indefinite">
                        </animate>
                        <animate attributeName="y" dur="21s" values="0%;25%;0%" repeatCount="indefinite"></animate>
                        <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50"
                            dur="7s" repeatCount="indefinite"></animateTransform>
                    </rect>
                    <rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient2)"
                        transform="rotate(255.072 50 50)">
                        <animate attributeName="x" dur="23s" values="-25%;0%;-25%" repeatCount="indefinite">
                        </animate>
                        <animate attributeName="y" dur="24s" values="0%;50%;0%" repeatCount="indefinite"></animate>
                        <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50"
                            dur="12s" repeatCount="indefinite"></animateTransform>
                    </rect>
                    <rect x="9.00483%" y="14.5733%" width="100%" height="100%" fill="url(#Gradient3)"
                        transform="rotate(139.903 50 50)">
                        <animate attributeName="x" dur="25s" values="0%;25%;0%" repeatCount="indefinite"></animate>
                        <animate attributeName="y" dur="12s" values="0%;25%;0%" repeatCount="indefinite"></animate>
                        <animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50"
                            dur="9s" repeatCount="indefinite"></animateTransform>
                    </rect>
                    <rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient4)"
                        transform="rotate(255.072 50 50)">
                        <animate attributeName="x" dur="23s" values="-25%;0%;-25%" repeatCount="indefinite">
                        </animate>
                        <animate attributeName="y" dur="24s" values="0%;50%;0%" repeatCount="indefinite"></animate>
                        <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50"
                            dur="12s" repeatCount="indefinite"></animateTransform>
                    </rect>
                </svg>
            </div>
            <div class="container position-relative" style="z-index: 2;">
                <div class="row gx-4 mb-5">
                    <div class="col-12 col-md-5">
                        <div class="ms-1 ms-md-2 ms-lg-5">
                            <img class="img-fluid img-thumbnail rounded-3"
                                style="object-fit: cover; width: 100%; max-height: 400px;"
                                src="{{ asset('images/visi.png') }}" alt="Visi Image">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 offset-md-1">
                        <div class="ms-md-2 ms-lg-5">
                            <span class="text-dark fst-italic">{{ __('messages.visispan') }}</span>
                            <h2 class="display-5 fw-bold text-dark">{{ __('messages.visititle') }}</h2>
                            <p class="text-dark">
                                {{ __('messages.visidesc') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gx-4 align-items-center">
                    <div class="col-12 col-md-6 offset-md-1">
                        <div class="ms-md-2 ms-lg-5">
                            <span class="text-dark fst-italic">{{ __('messages.misispan') }}</span>
                            <h2 class="display-5 fw-bold text-dark">{{ __('messages.misititle') }}</h2>
                            <ul class="text-dark">
                                <li><span>1.</span> {{ __('messages.misi1') }}</li>
                                <li><span>2.</span> {{ __('messages.misi2') }}</li>
                                <li><span>3.</span> {{ __('messages.misi3') }}</li>
                                <li><span>4.</span> {{ __('messages.misi4') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="ms-1 ms-md-2 ms-lg-5">
                            <img class="img-fluid img-thumbnail rounded-3"
                                style="object-fit: cover; width: 100%; max-height: 400px;"
                                src="{{ asset('images/misi.png') }}" alt="Misi Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    <section id="reviewSection" class="py-5 py-sm-5 fade-section parallax"
        style="background-image: url('{{ asset('images/banner/backgroundbanner6.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; font-family: Inria Sans, sans-serif;">
        <div class="container">
            <h1 class="text-center" style="font-weight: bold; color: black;">{{ __('messages.aboutreviewtitle') }}</h1>
        </div>
        @if ($reviews->isEmpty())
            <h5 class="text-lg text-dark p-5 text-center">No review available at the moment</h5>
        @else
            <div class="container mt-5">
                <!-- Carousel for Reviews -->
                <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="review-carousel-inner">
                        @foreach ($reviews->chunk(3) as $key => $reviewChunk)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="row justify-content-center">
                                    @foreach ($reviewChunk as $review)
                                        <div class="col-12 col-md-4 col-lg-4 d-flex">
                                            <div class="card review-card mx-2"
                                                style="background-color: rgb({{ $color1 }});">
                                                <div class="card-body">
                                                    <p class="card-text text-dark">
                                                        {{ $review->comment }}
                                                    </p>
                                                </div>
                                                <div class="text-end">
                                                    <p class="fst-italic text-muted"> <small>
                                                        {{ $review->name }} | <span>{{ $review->email }}</span>
                                                    </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviewCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

        @endif
    </section>


@endsection

<style>
    /* Enhance the Review Section */

    .review-wrapper {
        position: relative;
        overflow: hidden;
        white-space: nowrap;
    }

    .review-content {
        display: inline-flex;
        padding: 20px 0;
        animation: marquee 15s linear infinite;
    }

    .card {
        margin: 20px;
        flex: 1 0 auto;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* transition: transform 0.3s ease, box-shadow 0.3s ease; */
        padding: 20px;
        max-width: 400px;
        width: 100%;
        height: auto;
        max-height: 280px;
        min-height: 280px;
    }

    .card-body {
        font-family: 'Inria Sans', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #333;
        padding-bottom: 10px;
        word-wrap: break-word;
        word-break: break-word;
        white-space: normal;
    }


    .card-footer {
        font-size: 0.875rem;
        font-weight: bold;
        text-align: right;
        border-top: none;
        background-color: #fff;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .card-footer span {
        color: #555;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-80%);
        }
    }

    /* Media queries for responsiveness */
    @media (max-width: 768px) {
        .review-content {
            animation-duration: 15s;
        }

        .card {
            width: 90%;
            max-width: none;
        }
    }

    @media (min-width: 768px) and (max-width: 1200px) {
        .review-content {
            animation-duration: 15s;
        }

        .card {
            width: 100%;
            max-width: 25rem;
        }
    }

    /* Default - Desktop: Show 3 reviews */
    .carousel-item .col-md-4 {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }

    /* Tablet: Show 3 reviews */
    @media (min-width: 768px) and (max-width: 1199.98px) {
        .carousel-item .col-md-4 {
            flex: 0 0 33.333%;
            ;
            max-width: 33.333%;
        }
    }

    /* Mobile: Handled by JavaScript */
    @media (max-width: 767.98px) {
        .carousel-item .col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /* Customize Previous and Next Buttons to Black */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000000;
        /* Set to black */
        border-radius: 70%;
        /* Optional: Make the icon background circular */
        width: 20px;
        height: 20px;
    }

    /* Optional: Change the icon itself (arrows) to white or another color */
    .carousel-control-prev-icon::before,
    .carousel-control-next-icon::before {
        color: white;
        /* Keep the arrow icon white */
    }

    /* Add hover effect for the controls */
    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #333333;
        /* Darker black (optional) for hover effect */
        transition: background-color 0.3s ease;
    }

    /* Add hover effect for the arrows */
    .carousel-control-prev-icon::before:hover,
    .carousel-control-next-icon::before:hover {
        color: #fff;
        /* Keeps the arrow white on hover */
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
            threshold: 0.1
        });

        sections.forEach(section => {
            observer.observe(section);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const isMobile = window.innerWidth <= 767.98;

        if (isMobile) {
            const reviewCarouselInner = document.getElementById('review-carousel-inner');
            const carouselItems = reviewCarouselInner.getElementsByClassName('carousel-item');

            // For mobile, remove chunking and display each review separately
            Array.from(carouselItems).forEach((item) => {
                const reviews = item.querySelectorAll('.col-md-4, .col-sm-6, .col-12');
                if (reviews.length > 1) {
                    // For each review in the chunk, clone it into individual carousel items
                    reviews.forEach((review) => {
                        let newCarouselItem = document.createElement('div');
                        newCarouselItem.classList.add('carousel-item');
                        newCarouselItem.innerHTML =
                            `<div class="row justify-content-center">${review.outerHTML}</div>`;
                        reviewCarouselInner.appendChild(newCarouselItem);
                    });
                    // Remove the original chunked item
                    reviewCarouselInner.removeChild(item);
                }
            });

            // Make sure the first item is set to active
            const firstItem = reviewCarouselInner.querySelector('.carousel-item');
            if (firstItem) {
                firstItem.classList.add('active');
            }
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        function setMaxHeightForCards() {
            let maxHeight = 0;
            const allCards = document.querySelectorAll('.review-card');

            // Reset card heights to auto before calculating the max height
            allCards.forEach(card => {
                card.style.height = 'auto'; // Ensure height is flexible
            });

            // Find the max height of all cards
            allCards.forEach(card => {
                const cardHeight = card.offsetHeight;
                if (cardHeight > maxHeight) {
                    maxHeight = cardHeight;
                }
            });

            // Set all cards to the max height
            allCards.forEach(card => {
                card.style.height = maxHeight + 'px'; // Apply the calculated max height
            });
        }

        // Apply on page load
        setMaxHeightForAllCards();

        // Reapply on window resize
        window.addEventListener('resize', setMaxHeightForAllCards);
    });
</script>
