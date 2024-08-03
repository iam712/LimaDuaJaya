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
@section('title', 'Home')

@section('content')
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        /* Banner Styles */
        .banner {
            background-color: rgb({{ $color13 }});
            height: 800px;
            position: relative;
            overflow: hidden;
        }

        .banner h1 {
            font-size: 2.5rem;
        }

        /* Changing Text Animation */
        #changingText {
            display: inline-block;
            border-right: 2px solid;
            animation: blink-caret 1s step-end infinite;
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: black;
            }
        }

        /* About Us Section */
        .about-us {
            position: relative;
            overflow: hidden;
            padding: 50px 0;
        }

        .about-us img {
            max-width: 100%;
            height: auto;
        }

        /* Blob Container */
        .blob-container {
            position: absolute;
            width: 150vw;
            height: 150vh;
            top: -25vh;
            left: -25vw;
            z-index: -1;
            pointer-events: none;
        }

        svg {
            width: 100%;
            height: 100%;
        }

        path {
            transition: fill 0.3s ease;
        }

        path:hover {
            fill: #FF8E53;
        }

        /* Our Services Section */
        .our-services .img-fluid {
            max-height: 150px;
        }

        .our-services .col-md-2 span {
            display: block;
            margin-top: 10px;
        }

        /* Our Advantages Section */
        .our-advantages p,
        .location-map iframe,
        .faq-section .accordion-item {
            margin-bottom: 20px;
        }

        /* FAQ Section */
        .faq-section .accordion-item button {
            border: none;
            border-bottom: 1px solid #ddd;
        }

        /* Learn More Button */
        .btn-learn-more {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: rgb({{ $color12 }});
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        /* Fixed Menu */
        .fixed-menu {
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1000;
            background-color: rgba({{ $color14 }}, 0.6);
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .fixed-menu button {
            background: none;
            border: none;
            margin: 5px 0;
            cursor: pointer;
        }

        .fixed-menu img {
            max-width: 40px;
            transition: transform 0.3s;
        }

        .fixed-menu img:hover {
            transform: scale(1.2);
        }

        /* Fade-in Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Service Description */
        .service-description {
            font-size: 0.75rem;
            font-weight: 300;
        }

        /* Card Styles */
        .card.custom-card {
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 15px;
            background-color: rgb({{ $color16 }});
            height: 300px;
            overflow: hidden;
        }

        .card.custom-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card.custom-card.expanded {
            height: auto;
        }

        .card.custom-card .card-body {
            margin: 15px;
        }

        .card.custom-card .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            margin: 15px;
            max-width: 100%;
            max-height: 80px;
        }

        .card-description {
            max-height: 120px;
            overflow: hidden;
            text-overflow: ellipsis;
            transition: max-height 0.3s ease;
        }

        .card.custom-card.expanded .card-description {
            max-height: none;
        }

        .read-more-btn {
            margin-top: 10px;
        }

        /* Responsive Columns */
        .col-md-4 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        @media (max-width: 1200px) {
            .col-md-4 {
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }
        }

        @media (max-width: 768px) {
            .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .btn-learn-more {
                padding: 8px 16px;
            }

            .service-description {
                font-size: 0.60rem;
            }
        }

        @media (max-width: 576px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .boxblob {
                height: 300px;
                /* Adjust height as needed */
                width: 300px;
                /* Adjust width as needed */
                background-size: 50%, cover;
                /* Adjust background size as needed */
            }
        }

        /* Blob Box */
        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .boxblob {
            background-image: url('{{ asset('images/logo-square.png') }}'), radial-gradient(#ffc737, #ffefb4);
            background-size: 70%, cover;
            background-position: center center, center center;
            background-repeat: no-repeat, no-repeat;
            height: 500px;
            width: 500px;
            box-shadow: 0 20px 5px 5px rgba(0, 0, 0, 0.2);
            animation: animate 5s ease-in-out infinite;
            transition: all 1s ease-in-out;
        }

        @keyframes animate {
            0% {
                border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
            }

            50% {
                border-radius: 30% 60% 70% 40%/50% 60% 30% 60%;
            }

            100% {
                border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
            }
        }
    </style>


    <!-- Fixed Menu Bar -->
    <div class="fixed-menu" id="sideMenu">
        <button onclick="document.getElementById('aboutUsSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/aboutus.png') }}" alt="About Us">
        </button>
        <button onclick="document.getElementById('ourServicesSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/service.png') }}" alt="Our Services">
        </button>
        <button onclick="document.getElementById('ourLiveProduct').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/product.png') }}" alt="Our Product">
        </button>
        <button onclick="document.getElementById('ourAdvantagesSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/advantage.png') }}" alt="Our Advantages">
        </button>
        <button onclick="document.getElementById('locationMapSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/location.png') }}" alt="Location Map">
        </button>
        <button onclick="document.getElementById('faqSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/faq.png') }}" alt="FAQ">
        </button>
        <button onclick="document.getElementById('ourClientsSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/client.png') }}" alt="Our Clients">
        </button>
    </div>

    <!-- Banner -->
    <section id="bannerSection" class="banner d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center d-md-none">
                    <div class="wrapper">
                        <div class="boxblob"></div>
                    </div>
                </div>
                <div class="col-md-6 py-5 text-center text-md-start">
                    <p class="fs-3" style="font-family: 'LibreBaskerville', serif; color: black;">
                        Lima Dua Jaya Advertising
                    </p>
                    <p class="fs-1 fw-bold"
                        style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: black;">
                        Kami Membuat
                        <span id="changingText"></span>
                    </p>
                    <p class="fs-4 fst-italic fw-lighter"
                        style="font-family: 'LibreBaskerville', serif; font-style: italic; color: black;">
                        Supplier, Distributor, Advertising
                    </p>
                    <button class="btn-learn-more"
                        onclick="document.getElementById('aboutUsSection').scrollIntoView({ behavior: 'smooth' });"
                        style="font-family: 'LibreBaskerville', serif;">Pelajari Lebih Lanjut</button>
                </div>
                <div class="col-md-6 text-center d-none d-md-block">
                    <div class="wrapper">
                        <div class="boxblob"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="aboutUsSection" class="about-us py-4 py-sm-4 mt-3 mt-sm-3 fade-in position-relative">
        <div class="blob-container">
            <svg id="blob" viewBox="-30 -10 100 100" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FF6B6B">
                    <animate attributeName="d" dur="30s" repeatCount="indefinite"
                        values="
                    M32.6,-30.2C41.3,-21.6,46.5,-10.8,45.5,-0.2C44.4,10.3,37.1,20.5,28.5,26.5C19.9,32.5,9.9,34.3,1.8,31.8C-6.2,29.3,-12.5,22.5,-17.3,15.9C-22.2,9.3,-25.6,2.8,-28.1,-5.8C-30.6,-14.5,-32.1,-24.9,-26.8,-33.3C-21.6,-41.8,-10.8,-48.3,0.3,-48.6C11.4,-48.9,22.7,-42.8,32.6,-30.2Z;
                    M31.3,-34.9C41.5,-25.6,48.4,-12.8,46.7,-1.7C45,9.4,34.6,18.8,24.4,26.7C14.1,34.5,4,40.8,-8.8,44.3C-21.5,47.7,-37.1,48.3,-42.7,39.6C-48.3,30.8,-43.8,12.9,-37.3,1.4C-30.8,-10,-22.2,-15.2,-15.9,-23.9C-9.7,-32.7,-4.8,-45.1,3.8,-49.8C12.5,-54.5,25.1,-51.3,31.3,-34.9Z;
                    M23.9,-24.6C32.3,-16.8,38.8,-8.4,39.2,0.2C39.6,8.8,34,17.5,26.7,23.8C19.5,30,10.8,33.7,1.3,32.5C-8.1,31.4,-16.2,25.5,-23.4,18.9C-30.6,12.3,-36.9,5.2,-37.7,-3.3C-38.4,-11.8,-33.6,-21.6,-26.3,-29.7C-19,-37.8,-9.5,-44.2,0.6,-44.9C10.8,-45.6,21.6,-40.5,23.9,-24.6Z;
                    M32.6,-30.2C41.3,-21.6,46.5,-10.8,45.5,-0.2C44.4,10.3,37.1,20.5,28.5,26.5C19.9,32.5,9.9,34.3,1.8,31.8C-6.2,29.3,-12.5,22.5,-17.3,15.9C-22.2,9.3,-25.6,2.8,-28.1,-5.8C-30.6,-14.5,-32.1,-24.9,-26.8,-33.3C-21.6,-41.8,-10.8,-48.3,0.3,-48.6C11.4,-48.9,22.7,-42.8,32.6,-30.2Z" />
                </path>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 mt-1 mt-sm-1 d-flex align-items-md-center">
                    <img src="{{ asset('images/LOGO.png') }}" alt="About Us" class="img-fluid">
                </div>
                <div class="col-sm-5 mt-1 mt-sm-1">
                    <h2 style="font-family: 'LibreBaskerville', serif; font-weight: bold;">About Us</h2>
                    <p style="font-family: 'LibreBaskerville', serif;">
                        PT Lima Dua Jaya berdiri di Madiun pada bulan Oktober tahun 2021 dan bergerak dalam bidang
                        advertising, dimulai dari vending machine dan proyek branding seperti car branding, media promosi
                        melalui vending machine, billboard/ baliho, produksi gondola, booth, papan nama toko, brand
                        activation,
                        dan lain lain. Pada tahun 2023 kami melakukan ekspansi dengan mendirikan kantor pusat di Surabaya
                        dan
                        pada tahun 2024 mendirikan kantor cabang di semarang
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section id="ourServicesSection" class="our-services mt-3 mt-sm-3"
        style="background: linear-gradient(to bottom, rgb({{ $color13 }}), rgb({{ $color14 }}));">
        <div class="container">
            <h2 class="text-center mb-3 mb-sm-3 py-3" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">Our
                Services</h2>
            <div class="row justify-content-center text-center mt-2">
                <!-- Service Cards -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="NEON BOX">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">NEON
                                BOX</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Neonbox kreatif kami menawarkan pencahayaan neon yang menarik untuk
                                memaksimalkan visibilitas dan daya tarik merek Anda di malam hari...
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="BRANDING RAK">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                BRANDING RAK</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Kami menciptakan branding rak yang menonjol untuk menarik perhatian pelanggan
                                dan
                                meningkatkan penjualan produk Anda. Dengan kombinasi desain yang menawan dan
                                material
                                berkualitas tinggi, kami memastikan setiap rak toko menjadi elemen strategis
                                dalam mencapai
                                tujuan branding Anda.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="ROLL UP BANNER">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">ROLL
                                UP BANNER</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Rollup banner kami menawarkan solusi promosi yang efektif dan mudah dipindahkan
                                untuk acara,
                                promosi produk, atau branding perusahaan Anda. Dibuat dengan teknologi cetak
                                terkini dan
                                bahan yang tahan lama, banner ini memberikan kepraktisan dan daya tarik visual
                                yang kuat di
                                setiap kesempatan.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Fourth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="LETTER SIGN">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                LETTER SIGN</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Letter sign kami memberikan identitas visual yang kuat dan menarik untuk
                                bangunan Anda,
                                memperkuat kesan profesional dan keberlanjutan merek Anda. Dengan pilihan
                                material dan
                                desain yang beragam, kami menyesuaikan setiap letter sign untuk mencerminkan
                                nilai-nilai
                                unik perusahaan Anda secara konsisten.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Fifth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="SPANDUK">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                SPANDUK</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Spanduk kami dirancang dengan detail yang presisi untuk memastikan pesan promosi
                                Anda jelas
                                terlihat dan menarik bagi audiens di luar ruangan. Dengan pilihan ukuran,
                                finishing, dan
                                kemampuan tahan cuaca, spanduk ini menjadi investasi berharga dalam meningkatkan
                                pengaruh
                                pemasaran Anda di berbagai lokasi strategis.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }});">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Sixth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="SHOP SIGN">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">SHOP
                                SIGN</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Shop sign kami menciptakan kesan pertama yang berkesan dan memudahkan pelanggan
                                menemukan
                                toko Anda di tengah keramaian. Didesain untuk meningkatkan citra toko Anda,
                                papan nama ini
                                memadukan estetika yang menarik dengan daya tahan yang dapat diandalkan dalam
                                berbagai
                                kondisi lingkungan.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Seventh Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="BILLBOARD">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                BILLBOARD</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Billboard kami menawarkan ruang iklan yang besar dan strategis untuk mencapai
                                audiens luas
                                dengan pesan yang kuat dan menarik. Dengan teknologi cetak terkini dan material
                                berkualitas
                                tinggi, kami memastikan setiap iklan billboard memberikan dampak maksimal bagi
                                keberhasilan
                                kampanye pemasaran Anda.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Eighth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="CAR BRANDING">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">CAR
                                BRANDING</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Car branding kami memberikan promosi bergerak yang efektif, menjadikan kendaraan
                                Anda
                                sebagai papan iklan bergerak untuk meningkatkan kesadaran merek di mana pun
                                pergi. Dengan
                                desain yang menarik dan aplikasi yang presisi, kami mengubah setiap kendaraan
                                menjadi alat
                                pemasaran yang kuat dan berkelanjutan.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Ninth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo"
                            alt="CHILLER BRANDING">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                CHILLER BRANDING</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Chiller branding kami menawarkan solusi kreatif untuk mempromosikan produk Anda
                                dengan
                                menambahkan branding pada lemari pendingin, menarik perhatian pelanggan di toko
                                atau
                                supermarket. Dengan desain yang estetis dan pilihan material yang tahan lama,
                                chiller
                                branding kami memberikan nilai tambah bagi promosi produk Anda.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Tenth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo"
                            alt="PAPAN NAMA TOKO">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                                PAPAN NAMA TOKO</h5>
                            <p class="card-text card-description"
                                style="font-family: 'LibreBaskerville', serif; font-style: italic;">
                                Papan nama toko kami memberikan penandaan yang jelas dan profesional untuk
                                membantu
                                pelanggan menemukan dan mengenali toko Anda dengan mudah. Dengan pilihan desain
                                yang
                                fleksibel dan kemampuan untuk disesuaikan dengan identitas merek Anda, papan
                                nama ini
                                menjadi elemen penting dalam membangun citra toko yang kuat dan dikenang.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color12 }})">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Live 360 View -->
    <section id="ourLiveProduct" class="our-advantages py-4 py-sm-4">
        <div class="container">
            <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">Our
                Product</h2>
            <p class="text-center">contoh produk jadi</p>
        </div>
    </section>

    <!-- Our Advantages -->
    <section id="ourAdvantagesSection" class="our-advantages py-4 py-sm-4"
        style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));">
        <div class="container">
            <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">Our
                Advantages</h2>
            <p class="text-center">We provide unparalleled service and benefits that set us apart from the
                competition.</p>
        </div>
    </section>

    <!-- Location Map -->
    <section id="locationMapSection" class="location-map py-4 py-sm-4">
        <div class="container">
            <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">Our
                Location</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe src="https://maps.google.com/maps?q=surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqSection" class="faq-section py-4 py-sm-4"
        style="background: linear-gradient(to bottom, rgb({{ $color14 }}), rgb({{ $color15 }}));">
        <div class="container">
            <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                Frequently Asked
                Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                            style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                            Bagaimana Anda bisa mewujudkan proyek kami dengan
                            anggaran minimum?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body" style="font-family: 'LibreBaskerville', serif; font-style: italic">
                            Kami memastikan bahwa kami memahami kebutuhan Anda sejak awal dan berapa anggaran
                            maksimum Anda
                            untuk menyelesaikan proyek. Kami menghitung semua faktor dan mengurangi biaya untuk
                            mencapai
                            efisiensi kerja yang memungkinkan kami merealisasikan proyek Anda. Kami juga telah
                            mengurangi
                            waktu yang biasanya diperlukan untuk mendiskusikan suatu proyek.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                            style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                            Proyek seperti apa yang dapat Anda berikan kepada kami?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body" style="font-family: 'LibreBaskerville', serif; font-style: italic">
                            Kami adalah spesialis di luar rumah dengan pengalaman lebih dari 20 tahun . Kami
                            dapat
                            memberikan semua yang Anda butuhkan dalam proyek di luar rumah . Silakan periksa
                            halaman
                            "Layanan" di profil perusahaan kami untuk mempelajari lebih lanjut tentang jenis
                            layanan yang
                            kami sediakan .
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                            style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                            Bagaimana jika anggaran kita tidak sesuai dengan proyek kita?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body" style="font-family: 'LibreBaskerville', serif; font-style: italic">
                            Kami yakin Anda profesional dalam merencanakan proyek dan menghitung anggaran Anda .
                            Jika
                            anggaran Anda tidak sesuai dengan proyek Anda, kami tidak akan mengecewakan Anda .
                            Konsultan
                            kami akan mencoba yang terbaik untuk memberi saran kepada Anda alternatif yang
                            tersedia yang
                            mungkin sesuai dengan anggaran Anda . Jadi, jangan khawatir anggaran Anda akan
                            menghentikan
                            proyek Anda untuk direalisasikan . Ada layanan lain yang mungkin sesuai dengan
                            anggaran Anda .
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                            style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                            Apakah Anda memiliki kebijakan privasi untuk menjaga kerahasiaan
                            proyek kami?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body" style="font-family: 'LibreBaskerville', serif; font-style: italic">
                            Kami sangat menyadari kerahasiaan data mitra kami . Oleh karena itu, Anda dapat
                            meminta
                            perjanjian larangan pengungkapan rahasi dari kami untuk ditandatangani terlebih
                            dahulu sebelum
                            kami melanjutkan pembicaraan mendalam tentang proyek Anda . Kami menghargai privasi
                            dan
                            kerahasiaan .
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                            style="font-family: 'LibreBaskerville', serif; font-weight: bold;">
                            Mengapa kita perlu menggunakan layanan khusus ini?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body" style="font-family: 'LibreBaskerville', serif; font-style: italic">
                            Anda akan mempercepat waktu untuk memutuskan apakah proyek Anda dapat dilakukan atau
                            tidak . Di
                            sisi lain, Anda dapat menghemat biaya karena cepat . Tidak ada kebingungan dan tidak
                            ada
                            keraguan untuk memulai proyek Anda dalam anggaran terbatas . Anda akan memulai
                            proyek terlebih
                            dahulu sementara pesaing Anda masih berusaha mencari tahu proyek terbaik untuk
                            dilakukan dengan
                            kebingungan dan keraguan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Clients -->
    <section id="ourClientsSection" class="our-services py-4 py-sm-4">
        <div class="container">
            <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">Our
                Clients</h2>
            <div class="row justify-content-center mt-5 text-center">
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 1</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 2</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 3</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 4</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 5</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 6</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 7</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 8</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 9</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 10</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 11</span>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                    <span class="mb-4" style="font-family: 'LibreBaskerville', serif;">Client 12</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Inline JavaScript -->
    <script>
        const texts = ["Neon Box", "Branding Rak", "Roll Up Banner", "Letter Sign", "Spanduk", "Shop Sign", "Bill Board",
            "Car Branding", "Chiller Branding", "Papan Nama Toko"
        ];
        let index = 0;
        let charIndex = 0;
        let currentText = "";
        let isDeleting = false;

        function typeText() {
            const changingTextElement = document.getElementById("changingText");
            const fullText = texts[index];

            if (!isDeleting) {
                currentText = fullText.substring(0, charIndex++);
                changingTextElement.textContent = currentText;

                if (charIndex > fullText.length) {
                    setTimeout(() => {
                        isDeleting = true;
                        typeText();
                    }, 2000); // Wait 2 seconds before deleting
                } else {
                    setTimeout(typeText, 130); // Speed of typing
                }
            } else {
                currentText = fullText.substring(0, charIndex--);
                changingTextElement.textContent = currentText;

                if (charIndex < 0) {
                    isDeleting = false;
                    index = (index + 1) % texts.length;
                    setTimeout(typeText, 700); // Wait 0.7 seconds before typing next text
                } else {
                    setTimeout(typeText, 100); // Speed of deleting
                }
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(typeText, 1000); // Initial delay before typing starts
        });

        // Show or hide side menu based on scroll position
        document.addEventListener('scroll', function() {
            const sideMenu = document.getElementById('sideMenu');
            const bannerSection = document.getElementById('bannerSection');
            const bannerHeight = bannerSection.clientHeight;
            const scrollPosition = window.scrollY || document.documentElement.scrollTop;

            if (scrollPosition > bannerHeight) {
                sideMenu.style.display = 'flex';
            } else {
                sideMenu.style.display = 'none';
            }
        });

        // Intersection Observer for About Us section fade-in effect
        document.addEventListener('DOMContentLoaded', function() {
            const aboutUsSection = document.getElementById('aboutUsSection');
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            observer.observe(aboutUsSection);
        });

        const blob = document.querySelector('#blob path');

        blob.addEventListener('mouseover', () => {
            blob.style.animationDuration = '5s'; // Speed up the animation
        });

        blob.addEventListener('mouseout', () => {
            blob.style.animationDuration = '10s'; // Reset to original speed
        });


        document.addEventListener("DOMContentLoaded", function() {
            const readMoreButtons = document.querySelectorAll('.read-more-btn');

            readMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.custom-card');
                    card.classList.toggle('expanded');
                    if (card.classList.contains('expanded')) {
                        this.textContent = 'Read Less';
                    } else {
                        this.textContent = 'Read More';
                    }
                });
            });
        });
    </script>

@endsection
