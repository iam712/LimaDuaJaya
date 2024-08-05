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

@section('title', 'Workshop')

@section('content')
    <!-- Workshop Lima Dua -->
    <section class="py-3 py-md-4 py-lg-5 mt-3 mt-md-3 mt-lg-5">
        <div class="container">
            <h3 class="text-start mt-5 mt-md-3 mt-lg-3">Workshop Lima Dua Jaya</h3>
            <div class="row py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 4) as $index)
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100" style="background-color: rgb({{ $color1 }});">
                            <img src="your-image-path-{{ $index }}.jpg" class="card-img-top"
                                alt="Image {{ $index }}">
                            <div class="card-body">
                                <h5 class="card-title">Card title {{ $index }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <h3 class="text-start mt-5 mt-md-3 mt-lg-3">Workshop Partnership</h3>
            <div class="row py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                @foreach (range(1, 8) as $index)
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="card h-100" style="background-color: rgb({{ $color1 }});">
                            <img src="your-image-path-{{ $index }}.jpg" class="card-img-top"
                                alt="Image {{ $index }}">
                            <div class="card-body">
                                <h5 class="card-title">Card title {{ $index }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
