@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Banner -->
    <section class="banner d-flex align-items-center" style="background-color: #f8f9fa; height: 500px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4">Welcome to Our Website</h1>
                    <p class="lead">Your success is our mission</p>
                </div>
                <div class="col text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
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
                    <h2>About Us</h2>
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
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5 text-center">
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
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
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border: none; border-bottom: 1px solid #ddd;">
                            What is your main service?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our main service is providing excellent customer support and IT solutions to help your business succeed.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border: none; border-bottom: 1px solid #ddd;">
                            How can I contact you?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contact us through our contact form on the website or by calling our support number.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border: none; border-bottom: 1px solid #ddd;">
                            Where are you located?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We are located in Surabaya, Indonesia.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border: none; border-bottom: 1px solid #ddd;">
                            Where are you located?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We are located in Surabaya, Indonesia.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border: none; border-bottom: 1px solid #ddd;">
                            Where are you located?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We are located in Surabaya, Indonesia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Clients</h2>
            <div class="d-flex row justify-content-center mt-5 text-center">
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5 text-center">
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
                    <span>service 1</span>
                </div>
            </div>
        </div>
    </section>

@endsection
