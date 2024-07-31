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
    $colo11 = '163, 54, 54'; // #a33636
    $color12 = '75, 12, 12'; // #4b0c0c
    $color13 = '255, 184, 0'; // #ffb800

    // Command to use rgb color
    // style="color: rgb({{ $color0 }});"
    // style="background-color: rgb({{ $color1 }});"
    // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));"

@endphp
@section('title', 'Home')

@section('content')
    <!-- Inline CSS -->
    <style>
        .banner {
            background-color: rgb({{ $color13 }});
            height: 800px;
            position: relative;
            overflow: hidden;
        }

        .banner h1 {
            font-size: 2.5rem;
        }

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

        .wave {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 150px;
            overflow: hidden;
        }

        .wave path {
            animation: wave-animation 10s infinite linear;
        }

        @keyframes wave-animation {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .about-us img {
            max-width: 100%;
            height: auto;
        }

        .our-services .img-fluid {
            max-height: 150px;
        }

        .our-services .col-md-2 span {
            display: block;
            margin-top: 10px;
        }

        .our-advantages p,
        .location-map iframe,
        .faq-section .accordion-item {
            margin-bottom: 20px;
        }

        .faq-section .accordion-item button {
            border: none;
            border-bottom: 1px solid #ddd;
        }

        .image-frame {
            border: 2px solid #;
            padding: 40px;
            border-radius: 10px;
            background-color: rgb({{ $color2 }});
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        .btn-learn-more {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #e94b3c;
            /* You can change the color to match your theme */
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .image-frame {
            border: 2px solid #;
            padding: 30px;
            border-radius: 10px;
            background-color: rgb({{ $color2 }});
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Added shadow for a more attractive look */
            display: inline-block;
        }

        .image-frame img {
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Added shadow to the image */
        }

        /* Fixed menu bar */
        .fixed-menu {
            position: fixed;
            left: 20px;
            /* Add margin from the left */
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1000;
            background-color: rgba({{ $color6 }}, 0.6);
            /* Slightly transparent background */
            padding: 10px;
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            /* Optional shadow for better visibility */
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
    </style>

    <!-- Fixed Menu Bar -->
    <div class="fixed-menu">
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
    <section class="banner d-flex align-items-center">
        <div class="wave">
            <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 190" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(251, 211, 164, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 242, 215, 1)" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L21.8,12.7C43.6,25,87,51,131,63.3C174.5,76,218,76,262,85.5C305.5,95,349,114,393,107.7C436.4,101,480,70,524,57C567.3,44,611,51,655,53.8C698.2,57,742,57,785,47.5C829.1,38,873,19,916,38C960,57,1004,114,1047,114C1090.9,114,1135,57,1178,47.5C1221.8,38,1265,76,1309,91.8C1352.7,108,1396,101,1440,82.3C1483.6,63,1527,32,1571,22.2C1614.5,13,1658,25,1702,25.3C1745.5,25,1789,13,1833,34.8C1876.4,57,1920,114,1964,139.3C2007.3,165,2051,158,2095,145.7C2138.2,133,2182,114,2225,114C2269.1,114,2313,133,2356,123.5C2400,114,2444,76,2487,76C2530.9,76,2575,114,2618,129.8C2661.8,146,2705,139,2749,136.2C2792.7,133,2836,133,2880,139.3C2923.6,146,2967,158,3011,152C3054.5,146,3098,120,3120,107.7L3141.8,95L3141.8,190L3120,190C3098.2,190,3055,190,3011,190C2967.3,190,2924,190,2880,190C2836.4,190,2793,190,2749,190C2705.5,190,2662,190,2618,190C2574.5,190,2531,190,2487,190C2443.6,190,2400,190,2356,190C2312.7,190,2269,190,2225,190C2181.8,190,2138,190,2095,190C2050.9,190,2007,190,1964,190C1920,190,1876,190,1833,190C1789.1,190,1745,190,1702,190C1658.2,190,1615,190,1571,190C1527.3,190,1484,190,1440,190C1396.4,190,1353,190,1309,190C1265.5,190,1222,190,1178,190C1134.5,190,1091,190,1047,190C1003.6,190,960,190,916,190C872.7,190,829,190,785,190C741.8,190,698,190,655,190C610.9,190,567,190,524,190C480,190,436,190,393,190C349.1,190,305,190,262,190C218.2,190,175,190,131,190C87.3,190,44,190,22,190L0,190Z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <p class="fs-3">Lima Dua Jaya Advertising</p>
                    <p class="fs-1 fw-bold">Kami Membuat <span id="changingText"></span></p>
                    <p class="fs-4 fst-italic fw-lighter">Supplier, Distributor, Advertising</p>
                    <button class="btn-learn-more"
                        onclick="document.getElementById('aboutUsSection').scrollIntoView({ behavior: 'smooth' });">Pelajari
                        Lebih Lanjut</button>
                </div>
                <div class="col text-center">
                    <div class="image-frame">
                        <img src="{{ asset('images/logo-square.png') }}" alt="Logo" class="img-fluid"
                            style="max-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="aboutUsSection" class="about-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/LOGO.png') }}" alt="About Us" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>About </h2>
                    <p>We are a company dedicated to providing the best service. Our team is experienced and highly skilled.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section id="ourServicesSection" class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="d-flex row justify-content-center mt-5 text-center">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-md-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        <span class="mb-4">service {{ $i + 1 }}</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Live 360 View -->
    <section id="ourLiveProduct" class="our-advantages py-5">
        <div class="container">
            <h2 class="text-center">Our Product</h2>
            <p class="text-center">Wcontoh produk jadi</p>
        </div>
    </section>

    <!-- Our Advantages -->
    <section id="ourAdvantagesSection" class="our-advantages py-5">
        <div class="container">
            <h2 class="text-center">Our Advantages</h2>
            <p class="text-center">We provide unparalleled service and benefits that set us apart from the competition.</p>
        </div>
    </section>

    <!-- Location Map -->
    <section id="locationMapSection" class="location-map py-5">
        <div class="container">
            <h2 class="text-center">Our Location</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe src="https://maps.google.com/maps?q=surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                        height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqSection" class="faq-section py-5">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                @foreach (['One', 'Two', 'Three', 'Four', 'Five'] as $item)
                    <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                        <h2 class="accordion-header" id="heading{{ $item }}">
                            <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $item }}"
                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $item }}">
                                Where are you located?
                            </button>
                        </h2>
                        <div id="collapse{{ $item }}"
                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                            aria-labelledby="heading{{ $item }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We are located in Surabaya, Indonesia.
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section id="ourClientsSection" class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Clients</h2>
            <div class="d-flex row justify-content-center mt-5 text-center">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-md-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        <span class="mb-4">client {{ $i + 1 }}</span>
                    </div>
                @endfor
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
    </script>

@endsection
