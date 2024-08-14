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


{{-- style="font-family: 'LibreBaskerville', serif; font-weight: bold;"
style="font-family: 'LibreBaskerville', serif;"
style="font-family: 'LibreBaskerville', serif; font-style: italic;" --}}



@section('content')
    <!-- Banner -->
    <section class="banner d-flex align-items-center"
        style="background-image: url('{{ asset('images/banner/imagebg1.jpeg') }}'); background-size: cover; background-position: center; height: 100vh; position: relative;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: rgba({{ $color4 }}, 0.8); width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; box-shadow: 0 0 10px; display: inline-block;">
            <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: white;">PT. Lima
                Dua Jaya</h2>
            <br>
            <p class="text-center" style="font-family: 'LibreBaskerville', serif; font-style: italic; color: white;">Standar
                yang diberikan oleh Lima Dua Jaya adalah yang Terbaik. Kami berfokus untuk memberikan pelayanan yang bisa
                dibanggakan.</p>
            <a href="#aboutUsSection" class="btn text-light"
                style="background-color: rgb({{ $color2 }}); width: auto; font-family: 'LibreBaskerville', serif;">Read
                more</a>
        </div>
    </section>

    <div class="d-flex justify-content-center my-4">
        <div style="width: 70%; height: 1px; background-color: rgb({{ $color3 }});"></div>
    </div>

    <!-- About Us -->
    <section id="aboutUsSection" class="py-5 py-sm-5 fade-section"
        style="background: url('{{ asset('images/banner/aboutusbg1.png') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-dark" style="font-family: 'LibreBaskerville', serif; font-style: italic;">Our
                            Story</span>
                        <h2 class="display-5 fw-bold"
                            style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: black;">About Us</h2>
                        <p class="lead" style="font-family: 'LibreBaskerville', serif; color: black;">PT LIMA DUA JAYA
                            sudah berdiri sejak bulan oktober tahun 2021 yang bergerak dalam
                            bidang Advertising. Dimulai dari vending machine dan projek branding seperti car branding, media
                            promosi melalui vending machine, billboard/baliho, produksi gondola, booth, papan nama toko,
                            brand activation, dan lain-lain.</p>
                        <p class="lead mb-0" style="font-family: 'LibreBaskerville', serif; color: black;">PT LIMA DUA JAYA
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


    <div style="background: linear-gradient(to bottom, rgb({{ $color4 }}), rgb({{ $color3 }}));">
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
                            <span class="text-dark"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic">Visi</span>
                            <h2 class="display-5 fw-bold" style="font-family: 'LibreBaskerville', serif; color: white;">
                                Visi
                            </h2>
                            <p class="" style="font-family: 'LibreBaskerville', serif; color: white;">Menjadi mitra
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
                            <span class="text-dark"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic">Misi</span>
                            <h2 class="display-5 fw-bold" style="font-family: 'LibreBaskerville', serif; color: white;">
                                Misi
                            </h2>
                            <p class="" style="font-family: 'LibreBaskerville', serif; color: white;"><span>1.
                                </span>Memberikan Pelayanan Cepat dan Bertanggung Jawab.</p>
                            <p class="" style="font-family: 'LibreBaskerville', serif; color: white;"><span>2.
                                </span>Menjunjung Tinggi Integeritas Pekerjaan.</p>
                            <p class="" style="font-family: 'LibreBaskerville', serif; color: white;"><span>3.
                                </span>Berinovasi untuk Memenuhi Kebutuhan Klien.</p>
                            <p class="" style="font-family: 'LibreBaskerville', serif; color: white;"><span>3.
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

    <!-- Review Section -->
    <!-- Review Section -->
    <section class="py-4 mb-2"
        style="background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color1 }}));">
        <div class="container">
            <h1 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: black;">Apa
                kata mereka?</h1>
        </div>
        <div class="container d-flex justify-content-center mt-5">
            <div class="review-wrapper d-flex align-items-center overflow-hidden">
                <div class="review-content d-flex">
                    <!-- Review Cards -->
                    @foreach ($reviews as $review)
                        <div class="card mx-2"
                            style="width: 18rem; flex-shrink: 0; background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color6 }}));">
                            <div class="card-body" style="overflow: hidden;">
                                <p class="card-text text-dark"
                                    style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                    {{ $review->comment }}
                                </p>
                                <p class="card-text mb-2 text-dark"
                                    style="font-family: 'LibreBaskerville', serif; font-style: italic">{{ $review->name }}
                                    |
                                    <span>{{ $review->email }}</span>
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
