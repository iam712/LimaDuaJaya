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

@section('title', 'Links')

@section('content')
    <section style="background-color: rgb({{ $color1 }});">
        <div class="container text-center">
            <div class="p-5 d-grid gap-3 col-lg-4 mx-auto">
                <!-- Logo Section -->
                <img src="{{ asset('images/logo-square.png') }}"
                    style="border-radius: 15px; background-color: rgb({{ $color1 }}); width: 200px; margin-top: 40px;"
                    class="img-fluid mx-auto d-block" alt="Limadua Jaya Logo">

                <!-- Buttons Section -->
                <a href="#" class="btn btn-light btn-lg text-dark btn-block mt-3 custom-button border border-3">
                    Link
                </a>
                <a href="#" class="btn btn-light btn-lg text-dark btn-block mt-3 custom-button border border-3">
                    Link
                </a>
                <a href="#" class="btn btn-light btn-lg text-dark btn-block mt-3 custom-button border border-3">
                    Link
                </a>
                <a href="#" class="btn btn-light btn-lg text-dark btn-block mt-3 custom-button border border-3">
                    Link
                </a>
                <a href="#" class="btn btn-light btn-lg text-dark btn-block mt-3 custom-button border border-3">
                    Link
                </a>
                <a href="#" class="btn btn-light text-dark btn-lg btn-block mt-3 custom-button border border-3">
                    Link
                </a>
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
    <style>
        .custom-button {
            border-radius: 20px;
            padding: 15px;
            font-size: 16px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .custom-button:hover {
            transform: scale(1.05); /* Slight scaling effect */
            background-color: rgb(238, 63, 72); /* Change to a different color on hover */
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2); /* Add more depth on hover */
        }
    </style>
@endsection
