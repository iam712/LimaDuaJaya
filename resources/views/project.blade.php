@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6

    // Command to use rgb color
    // style="color: rgb({{ $color0 }});"
    // style="background-color: rgb({{ $color1 }});"
    // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));"
@endphp

@section('title', 'Project')

@section('content')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }
</style>

    <!-- Project Lima Dua Jaya Surabaya -->
    <section class="py-3 py-md-4 py-lg-5 mt-3 mt-md-3 mt-lg-5">
        <h1 class="text-center mt-5 mt-md-3 mt-lg-3" style="font-family: 'LibreBaskerville', serif; font-weight: bold;">Our Latest Projects</h1>
        <div class="container">
            <h3 class="text-start mt-2 mt-md-3 mt-lg-3" style="font-family: 'LibreBaskerville', serif;">1</h3>
            <div class="row gy-3 py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 4) as $index)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100" style="background-color: rgb({{ $color1 }}); box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="card-img-top" alt="Image {{ $index }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <h3 class="text-start mt-4 mt-md-5 mt-lg-5" style="font-family: 'LibreBaskerville', serif;">2</h3>
            <div class="row gy-3 py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 4) as $index)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100" style="background-color: rgb({{ $color1 }}); box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="card-img-top" alt="Image {{ $index }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <h3 class="text-start mt-4 mt-md-5 mt-lg-5" style="font-family: 'LibreBaskerville', serif;">3</h3>
            <div class="row gy-3 py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 4) as $index)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100" style="background-color: rgb({{ $color1 }}); box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="card-img-top" alt="Image {{ $index }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <h3 class="text-start mt-4 mt-md-5 mt-lg-5" style="font-family: 'LibreBaskerville', serif;">4</h3>
            <div class="row gy-3 py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 4) as $index)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100" style="background-color: rgb({{ $color1 }}); box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                            <img src="{{ asset('images/clients/blastoz.png') }}" class="card-img-top" alt="Image {{ $index }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
