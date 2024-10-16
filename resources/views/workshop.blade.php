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

@section('title', 'Workshop')

@section('content')


    <!-- Filter Buttons -->
    <div class="container py-5 py-md-5 py-lg-5 mt-5 mt-md-5 mt-lg-5">
        <div class="row mt-2 mt-md-2 mt-lg-1 justify-content-center">
            <div class="btn-group btn-group-sm" role="group" aria-label="Filter Workshops">
                <a href="{{ route('workshop.index', ['type' => null]) }}"
                    class="btn btn-outline-dark fw-bold {{ $type === null ? 'active' : '' }}">
                    {{ __('messages.filterall') }}
                </a>
                <a href="{{ route('workshop.index', ['type' => 'limaduajaya']) }}"
                    class="btn btn-outline-dark fw-bold {{ $type === 'limaduajaya' ? 'active' : '' }}">
                    Lima Dua Jaya
                </a>
                <a href="{{ route('workshop.index', ['type' => 'partnership']) }}"
                    class="btn btn-outline-dark fw-bold {{ $type === 'partnership' ? 'active' : '' }}">
                    {{ __('messages.filterpartner') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Workshop Lima Dua Jaya -->
    <section class="py-3 py-md-4 py-lg-5 mt-2 mt-md-2 mt-lg-4"
        style="
       background-image: url('{{ asset('images/banner/aboutusbg2.png') }}');
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       min-height: 100vh;
       position: relative;
       overflow: hidden;
       padding-top: 20px;
       padding-bottom: 20px;
       font-family: Inria Sans, sans-serif;
   ">
        <div class="container fade-section">
            <h3 class="text-start mt-5 mt-md-3 mt-lg-3 text-light">
                Workshop Lima Dua Jaya
            </h3>
            <div class="row py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @if ($limaduajayaWorkshops->isEmpty())
                    <h5 class="text-lg text-center text-dark p-5">{{ __('messages.errlimaduajaya') }}</h5>
                @else
                    @foreach ($limaduajayaWorkshops as $workshop)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card h-100 p-3"
                                style="
                           background-color: rgb({{ $color1 }});
                           box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                           border-radius: 8px;
                           overflow: hidden;
                       ">
                                <img src="{{ asset('storage/' . $workshop->image) }}" class="card-img-top img-fluid"
                                    alt="{{ $workshop->name }}">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #333;">{{ $workshop->name }}</h5>
                                    <p class="card-text" style="color: #666;"><i class="fas fa-location-dot"></i>
                                        {{ $workshop->location }}</p>
                                    <a href="{{ route('workshop.detail', $workshop->id) }}"
                                        class="btn btn-dark w-100">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- Workshop Partnership/ Not Lima Dua Jaya -->
            <h3 class="text-start mt-5 mt-md-3 mt-lg-3 text-light">
                Workshop Partnership
            </h3>
            <div class="row py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @if ($otherWorkshops->isEmpty())
                    <h5 class="text-lg text-center text-dark p-5">{{ __('messages.errpartner') }}</h5>
                @else
                    @foreach ($otherWorkshops as $workshop)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card h-100 p-3" style="background-color: rgb({{ $color1 }});">
                                <img src="{{ asset('storage/' . $workshop->image) }}" class="card-img-top"
                                    alt="{{ $workshop->name }}">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #333;">{{ $workshop->name }}</h5>
                                    <p class="card-text" style="color: #666;"><i class="fas fa-location-dot"></i>
                                        {{ $workshop->location }}</p>
                                    <a href="{{ route('workshop.detail', $workshop->id) }}"
                                        class="btn btn-dark w-100">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Partnership Application Form -->
    <section id="workshopPartnershipProgram" class="py-3 py-md-4 py-lg-5 mt-3 mt-md-3 mt-lg-1 parallax"
        style="font-family: Inria Sans, sans-serif;">
        <div class="bg parallax"></div>
        <div class="bg bg2 parallax"></div>
        <div class="bg bg3 parallax"></div>
        <div class="container review-form-container fade-section">
            <div class="row" style="opacity: 2;">
                <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <h3 class="fw-bold mb-4">{{ __('messages.formtitle') }}</h2>
                    <h5 class="fw-bold fs-3">{{ __('messages.formrequirements') }}</h5>
                    <ul class="list-unstyled fs-4">
                        <li>1. <span>{{ __('messages.formr1') }}</span></li>
                        <li>2. Lampirkan KTP & NPWP (jika ada)</li>
                        <li>3. Bersedia menandatangani surat kerja sama</li>
                        <li>4. Melampirkan jumlah pekerja</li>
                        <li>5. Lampirkan hasil contoh perngerjaan/ portofolio</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-5">
                    <form id="emailForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="workshopName" class="form-label">Workshop Name</label>
                            <input type="text" class="form-control" id="workshopName" name="workshopName"
                                placeholder="Enter your workshop name" required>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location"
                                placeholder="Enter your workshop location" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Enter your contact number" required>
                        </div>
                        <div class="mb-3">
                            <small class="form-text text-dark">*Remember to attach your resume.</small>
                        </div>
                        <button type="button" class="btn btn-dark w-100" onclick="sendEmail()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Add this in your existing <style> block */

        /* Button hover animation */
        button,
        .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover,
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        /* Specific animation for 'Submit' button */
        button[type="submit"],
        .btn-dark {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        button[type="submit"]:hover,
        .btn-dark:hover {
            transform: scale(1.1);
            background-color: rgb({{ $color3 }});
            /* Changes background color on hover */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-img-top {
            object-fit: cover;
            /* Ensures the image covers the box without distortion */
            height: 200px;
            /* Set a max height for the images */
            width: 100%;
            /* Ensure the image takes the full width of the container */
            border-radius: 8px;
            aspect-ratio: 1 / 1;
            /* Menjaga rasio 1:1 */
        }

        .card-body {
            padding: 15px;
            text-align: center;
        }


        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        html {
            scroll-behavior: smooth;
        }

        .review-form-container {
            position: relative;
            border-radius: 10px;
            padding: 30px;
            overflow: hidden;
            z-index: 2;
        }

        .review-form-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb({{ $color5 }});
            background-size: cover;
            background-position: center;
            opacity: 0.8;
            z-index: 2;
        }

        .review-form-container .row {
            position: relative;
            z-index: 2;
            opacity: 1;
        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, rgb({{ $color3 }}) 50%, rgb({{ $color4 }}) 50%);
            /* background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%); */
            bottom: 0;
            left: -50%;
            opacity: .5;
            position: fixed;
            right: -50%;
            top: 0;
            z-index: -1;
        }

        .bg2 {
            animation-direction: alternate-reverse;
            animation-duration: 4s;
        }

        .bg3 {
            animation-duration: 5s;
        }

        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(25%);
            }
        }

        .parallax {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .fade-section {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .fade-section.visible {
            opacity: 1;
        }

        @media (min-width: 768px) {
            .card-img-top {
                height: 250px;
                /* Adjust height for larger screens */
            }
        }
    </style>

    <script>
        function sendEmail() {
            // get form values
            var subject = document.getElementById('subject').value;
            var workshopName = document.getElementById('workshopName').value;
            var location = document.getElementById('location').value;
            var phone = document.getElementById('phone').value;

            // construct email body
            var body = `Workshop Name: ${workshopName}%0ALocation: ${location}%0APhone: ${phone}`;

            // construct the mailto link
            var mailtoLink =
                `mailto:limaduaadvertising@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

            // open the email client
            window.location.href = mailtoLink;
        }
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
    </script>
@endsection
