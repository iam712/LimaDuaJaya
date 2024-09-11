@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('title', 'Detail Workshop')

@section('content')

    <!-- Main Content Section -->
    <section class="py-5 mt-5" style="background-color: rgb({{ $color1 }});">
        <div class="container">
            <div class="row g-4 align-items-center">
                <h2 class="text-start mb-4" style="color: rgb({{ $color2 }});">Detail Workshop</h2>
                <div class="col-12 col-md-4 col-lg-5">
                    <div class="card border-0 shadow-sm rounded-3" style="background-color: rgb({{ $color5 }});">
                        {{-- <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid card w-100 rounded-3"
                            alt="Workshop Image"> --}}
                        <img src="{{ asset('storage/' . $workshop->image) }}" alt="{{ $workshop->name }}">
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7">
                    {{-- <h2 class="h4" style="color: rgb({{ $color2 }});">Workshop Name</h2>
                    <p class="mb-2" style="color: rgb({{ $color2 }});"><i class="fas fa-map-marker-alt"></i>
                        Location</p>
                    <p class="mb-4" style="color: rgb({{ $color2 }});">This is a brief description of the workshop.
                        It includes details about the topic, location, and what participants can expect.</p> --}}
                    <h2>{{ $workshop->name }}</h2>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $workshop->location }}</p>
                    <p>{{ $workshop->description }}</p>
                    <img src="{{ asset('storage/' . $workshop->image) }}" alt="{{ $workshop->name }}">
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill"
                        style="background-color: rgb({{ $color4 }}); border: none;">See More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Workshops Section -->
    <section class="py-2 py-md-3 py-lg-4">
        <div class="container">
            <h3 class="text-center mb-5" style="color: rgb({{ $color2 }});">More Portfolio</h3>
            <div class="row g-4">
                <!-- Reusable Workshop Card -->
                {{-- @foreach ([1, 2, 3, 4] as $i)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow-sm rounded-3 hover-card"
                            style="background-color: rgb({{ $color1 }}); transition: transform 0.3s;">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid w-100 rounded-top"
                                alt="Workshop Image">
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color: rgb({{ $color2 }});">Workshop
                                    {{ $i }}</h5>
                                <p class="card-text" style="color: rgb({{ $color2 }});">Brief description of the
                                    workshop {{ $i }}.</p>
                                <a href="#" class="btn btn-outline-dark px-3 py-2 rounded-pill">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
                @foreach ($workshop->portfolios as $portfolio)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-fluid" alt="Portfolio Image">
                            <div class="card-body">
                                <p>Portfolio Image {{ $portfolio->id }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

<!-- Optional Styles -->
<style>
    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
</style>
