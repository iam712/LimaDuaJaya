@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; // #7d141d
    $color4 = '238, 63, 72'; // #EE3F48
    $color5 = '255, 222, 223'; // #ffdedf
    $color6 = '246, 232, 214'; // #F6E8D6
@endphp

@section('title', 'Review')

@section('content')

<!-- Banner -->
<section class="banner d-flex align-items-center"
    style="background-color: rgb({{ $color4 }}); height: 100vh; position: relative;">
    <div class="rounded rounded-3 flex-column d-flex justify-content-center align-items-center text-dark"
        style="background-color: rgb({{ $color3 }}); width: 50%; height: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; box-shadow: 0 0 10px;
        display: inline-block;">
        <h2 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: white;">Your review is important for us!
            </h2> <br>
        <p class="text-center" style="font-family: 'LibreBaskerville', serif; font-style: italic; color: white;">Standar
            yang diberikan oleh Lima Dua Jaya adalah yang Terbaik. Kami berfokus untuk
            memberikan pelayanan yang bisa dibanggakan.</p>
    </div>
</section>

<!-- Review Form -->
<section class="banner d-flex justify-content-center align-items-center py-5" style="background-color: rgb({{ $color6 }});">
    <div class="rounded rounded-3 p-4" style="background-color: rgb({{ $color5 }}); width: 60%; max-width: 600px; box-shadow: 0 0 10px rgb({{ $color2 }});">
        <h3 class="text-center" style="font-family: 'LibreBaskerville', serif; font-weight: bold; color: rgb({{ $color3 }});">Submit Your Review</h3>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="font-family: 'LibreBaskerville', serif; color: rgb({{ $color2 }});">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="font-family: 'LibreBaskerville', serif; color: rgb({{ $color2 }});">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label" style="font-family: 'LibreBaskerville', serif; color: rgb({{ $color2 }});">Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn text-light w-100" style="background-color: rgb({{ $color2 }}); font-family: 'LibreBaskerville', serif;">Submit Review</button>
        </form>
    </div>
</section>

@endsection
