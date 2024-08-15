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
    <section class="banner d-flex align-items-center"
        style="background-image: url('{{ asset('images/banner/imagebg1.jpeg') }}'); background-size: cover; background-position: center; height: 100vh; position: relative; font-family: 'LibreBaskerville', serif;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: rgba({{ $color4 }}, 0.8); width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; box-shadow: 0 0 10px; display: inline-block;">
            <h2 class="text-center text-light fw-bold">PT. Lima
                Dua Jaya</h2>
            <br>
            <p class="text-center text-light fst-italic">Standar
                yang diberikan oleh Lima Dua Jaya adalah yang Terbaik. Kami berfokus untuk memberikan pelayanan yang bisa
                dibanggakan.</p>
            <a href="#aboutUsSection" class="btn text-light w-auto" style="background-color: rgb({{ $color2 }});">Read
                more</a>
        </div>
    </section>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    <!-- About Us -->
    <section id="aboutUsSection" class="py-5 py-sm-5 fade-section"
        style="background: url('{{ asset('images/banner/aboutusbg1.png') }}'); background-size: cover; background-position: center; font-family: 'LibreBaskerville', serif;">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-darkf fst-italic">Our
                            Story</span>
                        <h2 class="display-5 fw-bold text-dark">About Us</h2>
                        <p class="lead">PT LIMA DUA JAYA
                            sudah berdiri sejak bulan oktober tahun 2021 yang bergerak dalam
                            bidang Advertising. Dimulai dari vending machine dan projek branding seperti car branding, media
                            promosi melalui vending machine, billboard/baliho, produksi gondola, booth, papan nama toko,
                            brand activation, dan lain-lain.</p>
                        <p class="lead mb-0 text-dark">PT LIMA DUA JAYA
                            berdiri di tahun 2021 di Madiun dan pada tahun 2023 mendirikan
                            kantor pusat di Surabaya. Di Tahun 2024 mendirikan kantor cabang Semarang.</p>
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

    <div
        style="background: linear-gradient(to bottom, rgb({{ $color4 }}), rgb({{ $color3 }})); font-family: 'LibreBaskerville', serif;">
        <!-- Visi dan Misi -->
        <section id="visiMisiSection" class="py-5 fade-section fade-in-left position-relative"
            style="overflow: hidden; background-color: rgb({{ $color1 }});">
            <div id="bg-wrap" class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
                <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                            <stop offset="0%" stop-color="rgba({{ $color3 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color3 }}, 0)"></stop>
                        </radialGradient>
                        <radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="23.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                            <stop offset="0%" stop-color="rgba({{ $color4 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color4 }}, 0)"></stop>
                        </radialGradient>
                        <radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="21.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                            <stop offset="0%" stop-color="rgba({{ $color5 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color5 }}, 0)"></stop>
                        </radialGradient>
                        <radialGradient id="Gradient4" cx="50%" cy="50%" fx="4.56417%" fy="50%" r=".5">
                            <animate attributeName="fx" dur="23s" values="0%;5%;0%" repeatCount="indefinite"></animate>
                            <stop offset="0%" stop-color="rgba({{ $color6 }}, 1)"></stop>
                            <stop offset="100%" stop-color="rgba({{ $color6 }}, 0)"></stop>
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
                <div class="row align-items-center gx-4 mb-5">
                    <div class="col-md-5">
                        <div class="ms-md-2 ms-lg-5">
                            <img class="img-fluid rounded-3" src="{{ asset('images/logo.png') }}" alt="Company Logo">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="ms-md-2 ms-lg-5">
                            <span class="text-dark fst-italic">Visi</span>
                            <h2 class="display-5 fw-bold text-light">
                                Visi
                            </h2>
                            <p class="text-light">Menjadi mitra
                                periklanan terdepan di Indonesia yang dikenal karena keunggulan
                                dalam memberikan layanan yang cepat dan responsif, menjaga kepuasan klien sebagai prioritas
                                Utama dan Kami menjunjung tinggi nilai integritas dalam setiap aspek bisnis kami, menjamin
                                kepercayaan klien melalui prinsip-prinsip yang jelas dan konsisten serta terus berinovasi
                                untuk memenuhi dan melampaui harapan klien, menghadirkan solusi kreatif yang efektif dalam
                                setiap kampanye periklanan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center gx-4">
                    <div class="col-md-6 offset-md-1">
                        <div class="ms-md-2 ms-lg-5">
                            <span class="text-dark fst-italic">Misi</span>
                            <h2 class="display-5 fw-bold text-light">
                                Misi
                            </h2>
                            <p class="text-light"><span>1.
                                </span>Memberikan Pelayanan Cepat dan Bertanggung Jawab.</p>
                            <p class="text-light"><span>2.
                                </span>Menjunjung Tinggi Integeritas Pekerjaan.</p>
                            <p class="text-light"><span>3.
                                </span>Berinovasi untuk Memenuhi Kebutuhan Klien.</p>
                            <p class="text-light"><span>3.
                                </span>Mengutamakan Etos Kerja yang Menghargai Karyawan dan Klien.
                            </p>
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
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    {{-- Complex Background View --}}
    <div class="mainbackgroundview">
        <div class="d1"></div>
        <div class="d2"></div>
        <div class="d3"></div>
        <div class="d4"></div>
    </div>
    {{-- End of Complex Background View --}}

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    <!-- Review Section -->
    <section class="py-4 mb-2"
        style="background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color1 }}));">
        <div class="container">
            <h1 class="text-center" style="font-weight: bold; color: black;">Apa kata mereka?</h1>
        </div>
        <div class="container mt-5">
            <div class="review-wrapper">
                <div class="review-content">
                    <!-- Review Cards -->
                    @foreach ($reviews as $review)
                        <div class="card mx-2 d-flex justify-content-around"
                            style="flex-shrink: 0; background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color6 }})); display: flex; flex-direction: column; width: 100%; max-width: 30rem;">
                            <div class="card-body" style="overflow: hidden; flex-grow: 1;">
                                <p class="card-text text-dark fw-bold"
                                    style="white-space: normal; word-wrap: break-word;">
                                    {{ $review->comment }}
                                </p>
                            </div>
                            <div class="card-footer text-end" style="background: none; border-top: none;">
                                <p class="card-text mb-2 text-dark fst-italic text-muted">
                                    {{ $review->name }} | <span>{{ $review->email }}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
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
            display: inline-flex;
            animation: marquee 15s linear infinite;
        }

        .review-content {
            display: inline-flex;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .card {
            margin: 10px;
            flex: 1 0 auto;
        }

        @media (max-width: 768px) {
            .review-content {
                animation-duration: 20s;
            }

            .card {
                width: 90%;
                max-width: none;
            }
        }

        @media (min-width: 768px) and (max-width: 1200px) {
            .review-content {
                animation-duration: 25s;
            }

            .card {
                width: 100%;
                max-width: 25rem;
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

        .mainbackgroundview {
            height: 100vh;
            width: 100vw;
            position: relative;
        }

        .d1 {
            position: absolute;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;
            height: 30vh;
            width: 15vw;
            background-position: 0 50%;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.8);
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
            animation: dd1 10s infinite, dd12 10s infinite;
            animation-delay: 4s, 14s;
        }

        .d2 {
            position: absolute;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;
            height: 50vh;
            width: 25vw;
            background-position: -10vw 50%;
            left: 10vw;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            animation: dd2 10s 2;
            animation-delay: 4s;
        }

        .d3 {
            position: absolute;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;
            overflow: hidden;
            height: 100vh;
            width: 40vw;
            left: 25vw;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.8);
            background-position: -35vw 50%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 3;
            animation: dd3 10s 2;
            animation-delay: 4s;
        }

        .d4 {
            position: absolute;
            overflow: hidden;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;
            height: 80vh;
            width: 25vw;
            left: 60vw;
            background-position: -70vw 50%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            animation: dd4 10s 2;
            animation-delay: 4s;
        }

        @keyframes dd1 {

            0%,
            100% {
                width: 15vw;
            }

            50% {
                width: 95vw;
            }
        }

        @keyframes dd12 {

            0%,
            100% {
                background-position: 0 50%;
            }

            50% {
                background-position: Calc(0vw - 40px) 50%;
            }
        }

        @keyframes dd2 {
            0% {}

            50% {
                background-position: Calc(-10vw - 40px) 50%;
            }
        }

        @keyframes dd3 {
            0% {}

            50% {
                background-position: Calc(-35vw - 40px) 50%;
            }
        }

        @keyframes dd4 {
            0% {}

            50% {
                background-position: Calc(-70vw - 40px) 50%;
            }
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
