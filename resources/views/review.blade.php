@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; // #7d141d
    $color4 = '238, 63, 72'; // #EE3F48
    $color5 = '255, 222, 223'; // #ffdedf
    $color6 = '246, 232, 214'; // #F6E8D6
    $color7 = '240, 104, 111'; //#F0686F
@endphp

@section('title', 'Review')

@section('content')

    <style>
        .animated-bg {
            background: linear-gradient(120deg, rgba({{ $color3 }}, 1), rgba({{ $color7 }}, 1), rgba({{ $color3 }}, 1));
            background-size: 300% 300%;
            animation: bgAnimation 10s ease infinite;
            border-radius: 15px;
            padding: 20px;
            margin: 20px;
            min-height: 100vh;
        }

        @keyframes bgAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        button {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease, color 0.3s ease;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            background-color: rgb({{ $color4 }});
            color: rgb({{ $color1 }});
        }
    </style>



    <!-- Banner -->
    <section class="banner d-flex align-items-center"
        style="background-color: rgb({{ $color4 }}); height: 100vh; position: relative; font-family: Inria Sans, sans-serif;">
        <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
            style="background-color: rgb({{ $color3 }}); width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; box-shadow: 0 0 10px;
        display: inline-block;">
            <h2 class="text-center text-light fw-bold">Your
                review is important for us!
            </h2> <br>
            <p class="text-center text-light fst-italic">Standar
                yang diberikan oleh Lima Dua Jaya adalah yang Terbaik. Kami berfokus untuk
                memberikan pelayanan yang bisa dibanggakan.</p>
        </div>
    </section>

    <!-- Review Form -->
    <section class="banner d-flex justify-content-center align-items-center animated-bg">
        <div class="rounded rounded-3 p-4"
            style="background-color: rgb({{ $color1 }}); width: 60%; max-width: 600px; box-shadow: 0 0 10px rgb({{ $color2 }}); font-family: Inria Sans, sans-serif;">
            <h3 class="text-center text-dark fw-bold">Submit
                Your Review</h3>
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-dark">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label text-dark">Comments</label>
                    <textarea class="form-control" id="comments" name="comments" rows="2" maxlength="100" required></textarea>

                </div>
                <button type="submit" class="btn btn-dark text-light w-100">Submit
                    Review</button>
            </form>
        </div>
    </section>

@endsection

