@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Banner -->
<section class="banner d-flex align-items-center" style="background-color: #f8f9fa; height: 300px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4">Welcome to Our Website</h1>
                <p class="lead">Your success is our mission</p>
            </div>
            <div class="col-md-6 text-center">
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
                <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>We are a company dedicated to providing the best service. Our team is experienced and highly skilled.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Services -->
<section class="our-services py-4">
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        <div class="row">
            <div class="col-md-2">Service 1</div>
            <div class="col-md-2">Service 2</div>
            <div class="col-md-2">Service 3</div>
            <div class="col-md-2">Service 4</div>
            <div class="col-md-2">Service 5</div>
            <div class="col-md-2">Service 6</div>
            <div class="col-md-2">Service 7</div>
            <div class="col-md-2">Service 8</div>
            <div class="col-md-2">Service 9</div>
            <div class="col-md-2">Service 10</div>
        </div>
    </div>
</section>

<!-- Image -->
<section class="single-image py-5">
    <div class="container">
        <img src="{{ asset('images/featured-image.jpg') }}" alt="Featured" class="img-fluid w-100">
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
                <iframe src="https://maps.google.com/maps?q=surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq py-5">
    <div class="container">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Question 1
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Answer to question 1.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Question 2
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Answer to question 2.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
