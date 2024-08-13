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
<section class="py-5 mt-5">
    <div class="container">
        <div class="row g-4">
            <h2>Detail Workshop</h2>
            <div class="col-12 col-md-5">
                <div class="card border-0 shadow-sm" style="background-color: rgb({{ $color5 }});">
                    <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid card w-100" alt="Workshop Image" style="">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <h2 style="color: rgb({{ $color2 }});">Name</h2>
                <p style="color: rgb({{ $color2 }});"><i class="fas fa-map-marker-alt"></i> Location</p>
                <p style="color: rgb({{ $color2 }});">Description</p>
            </div>
        </div>
    </div>
</section>

<!-- Additional Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm" style="background-color: rgb({{ $color5 }});">
                    <!-- Content for the card can go here -->
                    <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid card w-100" alt="Workshop Image" style="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm" style="background-color: rgb({{ $color5 }});">
                    <!-- Content for the card can go here -->
                    <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid card w-100" alt="Workshop Image" style="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm" style="background-color: rgb({{ $color5 }});">
                    <!-- Content for the card can go here -->
                    <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid card w-100" alt="Workshop Image" style="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm" style="background-color: rgb({{ $color5 }});">
                    <!-- Content for the card can go here -->
                    <img src="{{ asset('images/clients/blastoz.png') }}" class="img-fluid card w-100" alt="Workshop Image" style="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
