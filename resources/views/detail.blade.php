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
    <section class="py-4 py-md-5 py-lg-5 mt-5 mt-md-5 mt-lg-5"
        style="background-color: rgb({{ $color1 }}); font-family: Inria Sans, sans-serif;">
        <div class="container">
            <div class="row g-4 align-items-center">
                <h2 class="text-start mb-4 fw-bold text-dark">Detail Workshop</h2>
                <div class="col-12 col-md-4 col-lg-5">
                    <div class="card border-0 shadow-sm rounded-3" style="background-color: rgb({{ $color5 }});">
                        <img src="{{ asset('storage/' . $workshop->image) }}" class=" card img-fluid rounded"
                            alt="{{ $workshop->name }}" style="object-fit: cover; width: 100%; height: 300px;">
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7">
                    <h2>{{ $workshop->name }}</h2>
                    <h5 class="mt-3 mt-md-4 mt-lg-4"><i class="fas fa-map-marker-alt"></i> {{ $workshop->location }}</h5>
                    <p class="mt-3 mt-md-4 mt-lg-4">{{ $workshop->description }}</p>
                    {{-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill"
                        style="background-color: rgb({{ $color4 }}); border: none;">See More</a> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Workshops Section -->
    <section class="py-2 py-md-3 py-lg-4" style="font-family: Inria Sans, sans-serif;">
        <div class="container">
            <h3 class="text-center mb-5 fw-bold text-dark">More Portfolio</h3>
            <div class="row g-4">
                @foreach ($workshop->portfolios as $portfolio)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="hover-card">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-fluid rounded"
                                alt="Portfolio Image" style="object-fit: cover; width: 100%; height: 200px;">
                            {{-- <div class="card-body">
                                <p>Portfolio Image {{ $portfolio->id }}</p>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

<!-- Optional Styles -->
<style>
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 8px;
        overflow: hidden;
    }

    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .img-fluid {
        object-fit: cover;
    }

    /* Responsive Adjustments */
    @media (min-width: 768px) {
        .img-fluid {
            height: 350px;
            /* Adjust height for larger screens */
        }
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.01);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }
</style>
