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
            background-image: url('{{ asset('images/banner/backgroundbanner1.png') }}');
            background-size: cover;
            background-position: center;
            height: 800px;
            position: relative;
            overflow: hidden;
            transition: background-position 0.2s ease-out;
        }

        .banner h1 {
            font-size: 2.5rem;
        }

        /* Mouse Move Effect on Banner */
        document.addEventListener('mousemove', (e)=> {
                const banner=document.querySelector('.banner');
                const moveX=(e.pageX - window.innerWidth / 2) * 0.05;
                const moveY=(e.pageY - window.innerHeight / 2) * 0.05;

                banner.style.backgroundPosition=`$ {
                    50 + moveX
                }

                % $ {
                    50 + moveY
                }

                %`;
            });

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
            fill: ;
        }

        /* Scroll Reveal Animation */
        @keyframes scrollReveal {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Our Services Section */
        .our-services .img-fluid {
            max-height: 60px;
            /* Keep the max height */
            width: auto;
            /* Adjust width to maintain aspect ratio */
            object-fit: contain;
            /* Ensure image fits within the set height without distortion */
            display: block;
            /* Remove any extra space below the image */
            margin: 0 auto;
            /* Center the image horizontally */
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

        /* Pin Drop Animation */
        @keyframes pinDrop {
            0% {
                transform: translateY(-100px) scale(0.5);
                opacity: 0;
            }

            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        /* Zoom In/Out Animation */
        #locationMap:hover {
            transform: scale(1.1);
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
            background-color: rgb({{ $color2 }});
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
            background-color: rgba({{ $color6 }}, 0.6);
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
            background: linear-gradient(135deg, rgb({{ $color1 }}), rgb({{ $color1 }}));
            height: 300px;
            overflow: hidden;
        }

        .card.custom-card:hover {
            transform: scale(1.01) rotate(1deg);
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

            .fixed-menu {
                top: auto;
                /* Remove top positioning */
                bottom: 0;
                /* Position at the bottom */
                left: 0;
                width: 100%;
                /* Full width on mobile */
                height: auto;
                /* Adjust height to fit content */
                flex-direction: row;
                /* Align items horizontally */
                justify-content: space-around;
                /* Space out buttons evenly */
                padding: 10px 0;
                /* Padding to ensure some space around buttons */
            }

            .fixed-menu button {
                padding: 0;
                /* Remove padding around buttons on mobile */
            }

            .fixed-menu img {
                width: 24px;
                /* Smaller icon size for mobile */
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
            background-image: url('{{ asset('images/logo-square.png') }}'), radial-gradient(#f4efea, #ffdedf);
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

        /* Popup container styles */
        .client-logo {
            position: relative;
        }

        .logo-container {
            position: relative;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .logo-container:hover {
            transform: scale(1.3);
            /* Slight zoom effect on hover */
        }

        .popup {
            position: absolute;
            bottom: 100%;
            /* Position above the logo */
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.75);
            color: #fff;
            padding: 8px;
            border-radius: 4px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            font-family: 'LibreBaskerville', serif;
        }

        /* 360 Project */
        .scroll-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        .scroll-bottom-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .scroll-image-container {
            max-width: 100%;
            max-height: 100%;
        }

        .scroll-image-container img {
            width: 100%;
        }

        .scroll-lock {
            overflow: hidden;
            height: 100vh;
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

        body {
            margin: auto;
            font-family: Arial, sans-serif;
            background: linear-gradient(315deg,
                    rgb({{ $color3 }}) 3%,
                    rgb({{ $color4 }}) 34%,
                    rgb({{ $color6 }}) 54%,
                    rgb({{ $color4 }}) 68%,
                    rgb({{ $color3 }}) 100%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }


        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        .wavey {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wavey 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .wavey:nth-of-type(2) {
            bottom: -1.25em;
            animation: wavey 18s linear reverse infinite;
            opacity: 0.8;
        }

        .wavey:nth-of-type(3) {
            bottom: -2.5em;
            animation: wavey 20s -1s reverse infinite;
            opacity: 0.9;
        }

        @keyframes wavey {
            2% {
                transform: translateX(1);
            }

            25% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(1);
            }
        }

        .banner {
            position: relative;
            overflow: hidden;
            height: 800px;
            background: none;
            /* Remove background image */
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
        <button onclick="document.getElementById('ourAdvantagesSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/advantage.png') }}" alt="Our Advantages">
        </button>
        <button onclick="document.getElementById('ourLiveProduct').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/product.png') }}" alt="Our Product">
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
    <section id="bannerSection" class="banner d-flex align-items-center" style="font-family: Inria Sans, sans-serif;">
        <div class="container-fluid position-relative p-0">
            <div class="wavey"></div>
            <div class="wavey"></div>
            <div class="wavey"></div>

            <!-- Content of Banner -->
            <div class="container fade-section position-relative">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center d-md-none">
                        <div class="wrapper">
                            <div class="boxblob"></div>
                        </div>
                    </div>
                    <div class="col-md-6 py-5 text-center text-md-start">
                        <p class="fs-3 text-dark">
                            Lima Dua Jaya Advertising
                        </p>
                        <p class="fs-1 fw-bold text-dark">
                            Kami Membuat
                            <span id="changingText"></span>
                        </p>
                        <p class="fs-4 fst-italic fw-lighter">
                            Supplier, Distributor, Advertising
                        </p>
                        <button class="btn-learn-more"
                            onclick="document.getElementById('aboutUsSection').scrollIntoView({ behavior: 'smooth' });">Pelajari
                            Lebih Lanjut</button>
                    </div>
                    <div class="col-md-6 text-center d-none d-md-block">
                        <div class="wrapper">
                            <div class="boxblob"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- About Us -->
    <section id="aboutUsSection"
        class="about-us py-4 py-sm-4 mt-3 mt-sm-3 fade-in position-relative d-flex align-items-center justify-content-center"
        style="background-color: rgb({{ $color5 }}); min-height: 400px; font-family: Inria Sans, sans-serif;">
        <div class="blob-container">
            <svg id="blob" viewBox="-25 -10 90 80" xmlns="http://www.w3.org/2000/svg">
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
                    <h2 class="fw-bold">About Us</h2>
                    <p>
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
    <section id="ourServicesSection" class="our-services parallax"
        style="
        background-image: url('{{ asset('images/banner/backgroundbanner6.png') }}');
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
        <div class="container">
            <h2 class="text-center mb-3 mb-sm-3 py-3 fade-section fw-bold text-light">
                Our Services
            </h2>
            <div class="row d-flex justify-content-center text-center mt-2 fade-section">
                <!-- Service Cards -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="NEON BOX"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                NEON BOX
                            </h5>
                            <p class="card-text card-description fst-italic">
                                Neonbox kreatif kami menawarkan pencahayaan neon yang menarik untuk memaksimalkan
                                visibilitas dan daya tarik merek Anda di malam hari...
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="BRANDING RAK"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                BRANDING RAK
                            </h5>
                            <p class="card-text card-description fst-italic">
                                Kami menciptakan branding rak yang menonjol untuk menarik perhatian pelanggan dan
                                meningkatkan penjualan produk Anda. Dengan kombinasi desain yang menawan dan material
                                berkualitas tinggi, kami memastikan setiap rak toko menjadi elemen strategis dalam mencapai
                                tujuan branding Anda.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="ROLL UP BANNER"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">ROLL
                                UP BANNER</h5>
                            <p class="card-text card-description fst-italic">
                                Rollup banner kami menawarkan solusi promosi yang efektif dan mudah dipindahkan
                                untuk acara, promosi produk, atau branding perusahaan Anda. Dibuat dengan teknologi cetak
                                terkini dan bahan yang tahan lama, banner ini memberikan kepraktisan dan daya tarik visual
                                yang kuat di setiap kesempatan.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fourth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="LETTER SIGN"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                LETTER SIGN
                            </h5>
                            <p class="card-text card-description fst-italic">
                                Letter sign kami memberikan identitas visual yang kuat dan menarik untuk bangunan Anda,
                                memperkuat kesan profesional dan keberlanjutan merek Anda. Dengan pilihan material dan
                                desain yang beragam, kami menyesuaikan setiap letter sign untuk mencerminkan nilai-nilai
                                unik perusahaan Anda secara konsisten.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fifth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="SPANDUK"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                SPANDUK
                            </h5>
                            <p class="card-text card-description fst-italic">
                                Spanduk kami dirancang dengan detail yang presisi untuk memastikan pesan promosi Anda jelas
                                terlihat dan menarik bagi audiens di luar ruangan. Dengan pilihan ukuran, finishing, dan
                                kemampuan tahan cuaca, spanduk ini menjadi investasi berharga dalam meningkatkan
                                pengaruh pemasaran Anda di berbagai lokasi strategis.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sixth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/shopsign/shopsign1.jpeg') }}" class="card-img-top custom-logo" alt="SHOP SIGN"
                            style="object-fit: contain; width: 100%; height: fit-content; max-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">SHOP
                                SIGN</h5>
                            <p class="card-text card-description fst-italic">
                                Shop sign kami menciptakan kesan pertama yang berkesan dan memudahkan pelanggan menemukan
                                toko Anda di tengah keramaian. Didesain untuk meningkatkan citra toko Anda, papan nama ini
                                memadukan estetika yang menarik dengan daya tahan yang dapat diandalkan dalam berbagai
                                kondisi lingkungan.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Seventh Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="BILLBOARD"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                BILLBOARD
                            </h5>
                            <p class="card-text card-description fst-italic">
                                Billboard kami menawarkan ruang iklan yang besar dan strategis untuk mencapai audiens luas
                                dengan pesan yang kuat dan menarik. Dengan teknologi cetak terkini dan material berkualitas
                                tinggi, kami memastikan setiap iklan billboard memberikan dampak maksimal bagi keberhasilan
                                kampanye pemasaran Anda.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Eighth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/carbranding/carbranding1.jpeg') }}" class="card-img-top custom-logo" alt="CAR BRANDING"
                            style="object-fit: contain; width: 100%; height: fit-content; max-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAR
                                BRANDING</h5>
                            <p class="card-text card-description fst-italic">
                                Car branding kami memberikan promosi bergerak yang efektif, menjadikan kendaraan Anda
                                sebagai papan iklan bergerak untuk meningkatkan kesadaran merek di mana pun pergi. Dengan
                                desain yang menarik dan aplikasi yang presisi, kami mengubah setiap kendaraan menjadi alat
                                pemasaran yang kuat dan berkelanjutan.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Ninth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo"
                            alt="CHILLER BRANDING" style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                CHILLER BRANDING</h5>
                            <p class="card-text card-description fst-italic">
                                Chiller branding kami menawarkan solusi kreatif untuk mempromosikan produk Anda dengan
                                menambahkan branding pada lemari pendingin, menarik perhatian pelanggan di toko atau
                                supermarket. Dengan desain yang estetis dan pilihan material yang tahan lama, chiller
                                branding kami memberikan nilai tambah bagi promosi produk Anda.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tenth Card -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card custom-card h-100">
                        <img src="{{ asset('images/logo.png') }}" class="card-img-top custom-logo" alt="PAPAN NAMA TOKO"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                PAPAN NAMA TOKO
                            </h5>
                            <p class="card-text card-description fst-italic">
                                Papan nama toko kami memberikan penandaan yang jelas dan profesional untuk membantu
                                pelanggan menemukan dan mengenali toko Anda dengan mudah. Dengan pilihan desain yang
                                fleksibel dan kemampuan untuk disesuaikan dengan identitas merek Anda, papan nama ini
                                menjadi elemen penting dalam membangun citra toko yang kuat dan dikenang.
                            </p>
                            <button class="btn read-more-btn text-light"
                                style="background-color: rgb({{ $color2 }})">Read More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- Horizontal Line -->
        <hr style="border: 2px solid #ffdedf; margin: 35px 0; fade-section">
        <br>

        {{-- Our Advantages --}}
        <div class="container fade-section" id="ourAdvantagesSection" style="font-family: Inria Sans, sans-serif;">
            <h2 class="text-center fade-section text-light fw-bold">Our
                Advantages</h2>
            <div class="row mt-4 d-flex justify-content-center fade-section">
                <div class="col-6 col-md-4 col-lg-3 text-center">
                    <div class="advantage-box">
                        <img src="{{ asset('images/LOGO.png') }}" alt="Tailored Solution" class="img-fluid mb-3">
                        <h4 class="text-light">1</h4>
                        <h5 class="fw-bold text-light">Tailored
                            Solution</h5>
                        <p class="text-light">At our company, we
                            understand that one size does not fit all. Our tailored
                            solutions ensure that every aspect of our service is customized to meet your unique business
                            needs and goals.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center">
                    <div class="advantage-box">
                        <img src="{{ asset('images/LOGO.png') }}" alt="Creative Excellence" class="img-fluid mb-3">
                        <h4 class="text-light">2</h4>
                        <h5 class="fw-bold text-light">Creative
                            Excellence</h5>
                        <p class="text-light">Creativity is at the heart
                            of everything we do. Our team of talented
                            professionals brings fresh ideas and innovative approaches to every project, ensuring that your
                            brand stands out in a crowded market.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center">
                    <div class="advantage-box">
                        <img src="{{ asset('images/LOGO.png') }}" alt="Strategic Partnerships" class="img-fluid mb-3">
                        <h4 style="font-family: 'LibreBaskerville', serif; color: white;">3</h4>
                        <h5 style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: white;">Strategic
                            Partnerships</h5>
                        <p class="text-light" style="font-family: 'LibreBaskerville', serif;">We don't just see ourselves
                            as service providers; we're strategic partners
                            invested in your success. Together, we collaborate closely to devise strategies and implement
                            solutions tailored to your enduring objectives.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center mt-4">
                    <div class="advantage-box">
                        <img src="{{ asset('images/LOGO.png') }}" alt="Innovative Solutions" class="img-fluid mb-3">
                        <h4 class="text-light">4</h4>
                        <h5 class="fw-bold text-light">Innovative
                            Solutions</h5>
                        <p class="text-light">We pride ourselves on
                            offering innovative solutions that push the boundaries
                            of
                            what is possible, ensuring that your business stays ahead of the curve.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center mt-4">
                    <div class="advantage-box">
                        <img src="{{ asset('images/LOGO.png') }}" alt="Expert Team" class="img-fluid mb-3">
                        <h4 class="text-light">5</h4>
                        <h5 class="fw-bold text-light">Expert Team
                        </h5>
                        <p class="text-light">Our team consists of
                            industry experts with extensive experience and
                            knowledge,
                            ready to provide you with the highest level of service and support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 360 Project -->
    {{-- <section id="project360Section" class="scroll-container">
        <div class="scroll-bottom-section">
            <div class="scroll-image-container">
                <img id="image360" src="{{ asset('images/360project/project1.jpg') }}" alt="360 Image"
                    class="img-fluid" />
            </div>
        </div>
    </section> --}}

    <!-- Location Map -->
    <section id="locationMapSection" class="location-map py-4 py-md-4 py-lg-4 parallax"
        style="
        background-image: url('{{ asset('images/banner/backgroundbanner6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
        overflow: hidden;
        padding-top: 20px;
        padding-bottom: 20px;
">
        <div class="container fade-section">
            <h2 class="text-center" style="font-family: Inria Sans, sans-serif; font-weight: bold">Our
                Location</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe id="locationMap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.9045290247577!2d112.67742386941619!3d-7.328366686111562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd3243363f3b%3A0x4affd245467bd83b!2sKarya%20Satria%20Surabaya!5e0!3m2!1sid!2sid!4v1723000605673!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0; transition: transform 0.3s ease;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqSection" class="faq-section py-4 py-md-4 py-lg-4"
        style="background: linear-gradient(to bottom, rgb({{ $color4 }}), rgb({{ $color3 }})); font-family: Inria Sans, sans-serif;">
        <div class="container">
            <h2 class="text-center fw-bold text-light">
                Frequently Asked
                Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana Anda bisa mewujudkan proyek kami dengan
                            anggaran minimum?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body fst-italic">
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
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Proyek seperti apa yang dapat Anda berikan kepada kami?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body fst-italic">
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
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bagaimana jika anggaran kita tidak sesuai dengan proyek kita?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body fst-italic">
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
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apakah Anda memiliki kebijakan privasi untuk menjaga kerahasiaan
                            proyek kami?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body fst-italic">
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
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Mengapa kita perlu menggunakan layanan khusus ini?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body fst-italic">
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
    <section id="ourClientsSection" class="our-services py-4 py-sm-4"
        style="background-color: rgb({{ $color1 }}); font-family: Inria Sans, sans-serif;">
        <div class="container">
            <h2 class="text-center fw-bold">Our
                Clients</h2>
            <div class="row justify-content-center mt-5 text-center">
                @foreach (['blastoz', 'formula', 'fruittea', 'fruzz', 'imperialcreme', 'inlite', 'macito', 'orios', 'prima', 'tebs', 'Sosro', 'stee', 'tango', 'raywhite'] as $client)
                    <div class="col-6 col-md-2 mb-4 client-logo">
                        <div class="logo-container">
                            <img src="{{ asset('images/clients/' . $client . '.png') }}" alt="Logo"
                                class="img-fluid">
                            <div class="popup">

                            </div>
                        </div>
                    </div>
                @endforeach
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



        // 360 Project Scroll Control
        document.addEventListener('DOMContentLoaded', function() {
            const project360Section = document.getElementById('project360Section');
            const imageElement = document.getElementById("image360");
            const images = [
                "{{ asset('images/360project/project1.jpg') }}",
                "{{ asset('images/360project/project2.jpg') }}",
                "{{ asset('images/360project/project3.jpg') }}",
                "{{ asset('images/360project/project4.jpg') }}",
                "{{ asset('images/360project/project5.jpg') }}",
                "{{ asset('images/360project/project6.jpg') }}",
                "{{ asset('images/360project/project7.jpg') }}",
                "{{ asset('images/360project/project8.jpg') }}",
                "{{ asset('images/360project/project9.jpg') }}",
                "{{ asset('images/360project/project10.jpg') }}",
                "{{ asset('images/360project/project11.jpg') }}",
                "{{ asset('images/360project/project12.jpg') }}",
                "{{ asset('images/360project/project13.jpg') }}",
                "{{ asset('images/360project/project14.jpg') }}",
                "{{ asset('images/360project/project15.jpg') }}",
                "{{ asset('images/360project/project16.jpg') }}",
                "{{ asset('images/360project/project17.jpg') }}",
                "{{ asset('images/360project/project18.jpg') }}",
                "{{ asset('images/360project/project19.jpg') }}",
                "{{ asset('images/360project/project20.jpg') }}",
                "{{ asset('images/360project/project21.jpg') }}",
                "{{ asset('images/360project/project22.jpg') }}",
                "{{ asset('images/360project/project23.jpg') }}",
                "{{ asset('images/360project/project24.jpg') }}",
                "{{ asset('images/360project/project25.jpg') }}",
                "{{ asset('images/360project/project26.jpg') }}",
                "{{ asset('images/360project/project27.jpg') }}",
                "{{ asset('images/360project/project28.jpg') }}",
                "{{ asset('images/360project/project29.jpg') }}",
                "{{ asset('images/360project/project30.jpg') }}"
            ];

            const totalImages = images.length;
            let currentImageIndex = 0;
            let isLockedIn360 = false;

            // Helper function to update the image source
            const updateImage = () => {
                if (currentImageIndex < 0) currentImageIndex = 0;
                if (currentImageIndex >= totalImages) currentImageIndex = totalImages - 1;
                imageElement.src = images[currentImageIndex];
            };

            // Function to lock the scroll
            const lockScroll = () => {
                document.body.style.overflow = 'hidden';
                isLockedIn360 = true;
            };

            // Function to unlock the scroll
            const unlockScroll = () => {
                document.body.style.overflow = '';
                isLockedIn360 = false;
            };

            // Function to handle scrolling inside the 360 section
            const onScroll = (event) => {
                const deltaY = event.deltaY || event.detail || event.wheelDelta;
                if (deltaY > 0 && currentImageIndex < totalImages - 1) {
                    currentImageIndex++;
                } else if (deltaY < 0 && currentImageIndex > 0) {
                    currentImageIndex--;
                }
                updateImage();

                // Unlock scroll when the last or first image is reached
                if (currentImageIndex === totalImages - 1 || currentImageIndex === 0) {
                    unlockScroll();
                } else {
                    lockScroll();
                }
            };

            // Add event listeners for scrolling on the 360 project section
            project360Section.addEventListener('wheel', onScroll);
            project360Section.addEventListener('touchstart', (e) => {
                const startY = e.touches[0].clientY;
                project360Section.addEventListener('touchmove', (e) => {
                    const endY = e.touches[0].clientY;
                    const deltaY = startY - endY;
                    onScroll({
                        deltaY
                    });
                }, {
                    once: true
                });
            });

            // Use IntersectionObserver to detect when user is entering or leaving the 360 section
            const observerOptions = {
                root: null,
                threshold: 0.9 // Trigger when at least 50% of the section is visible
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // When the 360 section is in view, lock the scroll
                        lockScroll();
                    } else if (!entry.isIntersecting && isLockedIn360) {
                        // When the 360 section is out of view, unlock the scroll
                        unlockScroll();
                    }
                });
            }, observerOptions);

            observer.observe(project360Section);
        });

        // Scroll Reveal
        const revealElements = document.querySelectorAll('.scroll-reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        revealElements.forEach(el => revealObserver.observe(el));

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
