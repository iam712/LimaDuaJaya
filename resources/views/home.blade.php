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
    $color8 = '255, 255, 255'; // #hitam
    $color9 = '0, 0, 0'; // #putih

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
            background-color: rgb({{ $color1 }});
            height: 800px;
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
            padding: 10px;
            border-radius: 10px;
            background-color: rgb({{ $color2 }});
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

    </style>

    <!-- Banner -->
    <section class="banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <p class="fs-4">Lima Dua Jaya Advertising</p>
                    <p class="fs-2 fw-bold">Kami Membuat <span id="changingText"></span></p>
                    <p class="fs-5 fst-italic fw-lighter">Supplier, Distributor, Advertising</p>
                </div>
                <div class="col  text-center">
                    <div class="image-frame">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid"
                            style="max-height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Us -->
    <section class="about-us py-5">
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
    <section class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="d-flex row justify-content-center mt-5 text-center">
                @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        <span>service {{ $i + 1 }}</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Our Advantages -->
    <section class="our-advantages py-5">
        <div class="container">
            <h2 class="text-center">Our Advantages</h2>
            <p class="text-center">We provide unparalleled service and benefits that set us apart from the competition.</p>
        </div>
    </section>

    <!-- Location Map -->
    <section class="location-map py-5">
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
    <section class="faq-section py-5">
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
    <section class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Clients</h2>
            <div class="d-flex row justify-content-center mt-5 text-center">
                @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        <span>client {{ $i + 1 }}</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Inline JavaScript -->
    <script>
        const texts = ["Neon Box", "Branding Rak", "Roll Up Banner", "Letter Sign", "Spanduk", "Shop Sign", "Bill Board", "Car Branding", "Chiller Branding", "Papan Nama Toko"];
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
