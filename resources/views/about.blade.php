@extends('layouts.app')

@section('title', 'About Us')

@section('content')
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
@endsection
