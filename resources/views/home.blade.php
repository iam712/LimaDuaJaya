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
    $color14 = '255, 214, 110'; // #FFD66E

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

        .banners {
            background-color: rgb({{ $color14 }});
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
            width: 200%;
            height: 150px;
            overflow: hidden;
        }

        .wave svg {
            width: 100%;
            height: 100%;
            animation: wave-animation 30s infinite linear;
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
            background-color: rgb({{ $color12 }});
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
            background-color: rgb({{ $color14 }});
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

        @media (max-width: 768px) {
            .banner {
                height: 600px;
            }
            .banner h1 {
                font-size: 2rem;
            }
            .btn-learn-more {
                padding: 8px 16px;
            }
            .fixed-menu {
                left: 10px;
                top: auto;
                bottom: 20px;
                transform: none;
                flex-direction: row;
                justify-content: center;
            }
            .fixed-menu button {
                margin: 0 5px;
            }
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
            <svg viewBox="0 0 1440 350" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(255, 184, 0, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 214, 110, 1)" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(255, 214, 110, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 184, 0, 1)" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                        d="M0,140L16,140C32,140,64,140,96,134.2C128,128,160,117,192,122.5C224,128,256,152,288,151.7C320,152,352,128,384,99.2C416,70,448,35,480,17.5C512,0,544,0,576,29.2C608,58,640,117,672,122.5C704,128,736,82,768,75.8C800,70,832,105,864,105C896,105,928,70,960,52.5C992,35,1024,35,1056,52.5C1088,70,1120,105,1152,116.7C1184,128,1216,117,1248,145.8C1280,175,1312,245,1344,227.5C1376,210,1408,105,1440,52.5C1472,0,1504,0,1536,11.7C1568,23,1600,47,1632,93.3C1664,140,1696,210,1728,198.3C1760,187,1792,93,1824,70C1856,47,1888,93,1920,99.2C1952,105,1984,70,2016,70C2048,70,2080,105,2112,122.5C2144,140,2176,140,2208,151.7C2240,163,2272,187,2288,198.3L2304,210L2304,350L2288,350C2272,350,2240,350,2208,350C2176,350,2144,350,2112,350C2080,350,2048,350,2016,350C1984,350,1952,350,1920,350C1888,350,1856,350,1824,350C1792,350,1760,350,1728,350C1696,350,1664,350,1632,350C1600,350,1568,350,1536,350C1504,350,1472,350,1440,350C1408,350,1376,350,1344,350C1312,350,1280,350,1248,350C1216,350,1184,350,1152,350C1120,350,1088,350,1056,350C1024,350,992,350,960,350C928,350,896,350,864,350C832,350,800,350,768,350C736,350,704,350,672,350C640,350,608,350,576,350C544,350,512,350,480,350C448,350,416,350,384,350C352,350,320,350,288,350C256,350,224,350,192,350C160,350,128,350,96,350C64,350,32,350,16,350L0,350Z"></path>
                    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
                        d="M0,210L16,198.3C32,187,64,163,96,151.7C128,140,160,140,192,151.7C224,163,256,187,288,175C320,163,352,117,384,122.5C416,128,448,187,480,204.2C512,222,544,198,576,163.3C608,128,640,82,672,58.3C704,35,736,35,768,58.3C800,82,832,128,864,134.2C896,140,928,105,960,116.7C992,128,1024,187,1056,221.7C1088,257,1120,268,1152,227.5C1184,187,1216,93,1248,87.5C1280,82,1312,163,1344,169.2C1376,175,1408,105,1440,116.7C1472,128,1504,222,1536,233.3C1568,245,1600,175,1632,169.2C1664,163,1696,222,1728,233.3C1760,245,1792,210,1824,204.2C1856,198,1888,222,1920,198.3C1952,175,1984,105,2016,75.8C2048,47,2080,58,2112,75.8C2144,93,2176,117,2208,110.8C2240,105,2272,70,2288,52.5L2304,35L2304,350L2288,350C2272,350,2240,350,2208,350C2176,350,2144,350,2112,350C2080,350,2048,350,2016,350C1984,350,1952,350,1920,350C1888,350,1856,350,1824,350C1792,350,1760,350,1728,350C1696,350,1664,350,1632,350C1600,350,1568,350,1536,350C1504,350,1472,350,1440,350C1408,350,1376,350,1344,350C1312,350,1280,350,1248,350C1216,350,1184,350,1152,350C1120,350,1088,350,1056,350C1024,350,992,350,960,350C928,350,896,350,864,350C832,350,800,350,768,350C736,350,704,350,672,350C640,350,608,350,576,350C544,350,512,350,480,350C448,350,416,350,384,350C352,350,320,350,288,350C256,350,224,350,192,350C160,350,128,350,96,350C64,350,32,350,16,350L0,350Z"></path>
                    <use href="#wave-path" x="1440"></use>
                </g>
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
