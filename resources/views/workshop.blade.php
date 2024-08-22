@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; // #7d141d
    $color4 = '238, 63, 72'; // #EE3F48
    $color5 = '255, 222, 223'; // #ffdedf
    $color6 = '246, 232, 214'; // #F6E8D6
@endphp

@section('title', 'Workshop')

@section('content')

    <!-- Workshop Lima Dua Jaya -->
    <section class="py-3 py-md-4 py-lg-5 mt-3 mt-md-3 mt-lg-5 parallax"
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
            font-family: 'LibreBaskerville', serif;
        ">
        <div class="container fade-section">
            <h3 class="text-start mt-5 mt-md-3 mt-lg-3 text-light text text-lg">
                Workshop Lima Dua Jaya
            </h3>
            <div class="row py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 4) as $index)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100 p-3"
                            style="
                                background-color: rgb({{ $color6 }});
                                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                                border-radius: 8px;
                                overflow: hidden;
                            ">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="card-img-top"
                                alt="Image {{ $index }}"
                                style="
                                    max-height: 200px;
                                    object-fit: cover;
                                " />
                            <div class="card-body">
                                <h5 class="card-title"
                                    style="
                                        color: #333;
                                        font-size: 1.2rem;
                                        margin-top: 10px;
                                    ">
                                    Nama Workshop {{ $index }}
                                </h5>
                                <p class="card-text"
                                    style="
                                        color: #666;
                                        font-size: 1rem;
                                        margin-bottom: 15px;
                                    ">
                                    <i class="fas fa-location-dot location-icon" style="margin-right: 5px;"></i>
                                    Location
                                </p>
                                <a href="/detail" class="btn btn-dark w-100"
                                    style="
                                        background-color: #333;
                                        border: none;
                                        padding: 10px;
                                        border-radius: 5px;
                                    ">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Workshop Partnership -->
            <h3 class="text-start mt-5 mt-md-3 mt-lg-3 text-light"
                style="
                    color: white;
                    font-size: 2rem;
                ">
                Workshop Partnership
            </h3>
            <div class="row py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 8) as $index)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100 p-3"
                            style="
                                background-color: rgb({{ $color6 }});
                                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                                border-radius: 8px;
                                overflow: hidden;
                            ">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="card-img-top"
                                alt="Image {{ $index }}"
                                style="
                                    max-height: 200px;
                                    object-fit: cover;
                                " />
                            <div class="card-body">
                                <h5 class="card-title"
                                    style="
                                        color: #333;
                                        font-size: 1.2rem;
                                        margin-top: 10px;
                                    ">
                                    Nama Workshop {{ $index }}
                                </h5>
                                <p class="card-text"
                                    style="
                                        color: #666;
                                        font-size: 1rem;
                                        margin-bottom: 15px;
                                    ">
                                    <i class="fas fa-location-dot location-icon" style="margin-right: 5px;"></i>
                                    Location
                                </p>
                                <a href="/detail" class="btn btn-dark w-100"
                                    style="
                                        background-color: #333;
                                        border: none;
                                        padding: 10px;
                                        border-radius: 5px;
                                    ">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Review Form -->
    <section class="py-3 py-md-4 py-lg-5 mt-3 mt-md-3 mt-lg-1 parallax">
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <div class="container review-form-container">
            <div class="row" style="opacity: 1;">
                <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Workshop Partnership Program</h2>
                    <h5 class="fw-bold fs-3">Requirements :</h5>
                    <ul class="list-unstyled fs-4">
                        <li>1. Memiliki Workshop Lokal</li>
                        <li>2. Lampirkan KTP & NPWP (jika ada)</li>
                        <li>3. Bersedia menandatangani surat kerja sama</li>
                        <li>4. Melampirkan jumlah pekerja.</li>
                        <li>5. Lampirkan hasil contoh perngerjaan/ portofolio.</li>
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
                            {{-- <label for="resume" class="form-label">Attach your resume // portfolio here</label>
                            <input type="file" class="form-control" id="resume" name="resume"> --}}
                            <small class="form-text text-light">Remember to attach your resume.</small>
                        </div>
                        <button type="button" class="btn btn-dark w-100" onclick="sendEmail()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
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
            background-image: url('{{ asset('images/workshop/workshopbg2.png') }}');
            background-size: cover;
            background-position: center;
            opacity: 0.9;
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
                `mailto:williamwongge@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

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
