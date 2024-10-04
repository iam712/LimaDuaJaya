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

@section('title', 'Links')

@section('content')
    <section style="background-color: rgb({{ $color4 }});">
        <div class="container">
            <div class="p-5 p-md-5 p-lg-5 d-grid gap-2 col-5 mx-auto">
                <img src="{{ asset('images/logo-square.png') }}"
                    style="border-radius: 15px; background-color: rgb({{ $color1 }}); width: 250px"
                    class="img-fluid mx-auto d-block mt-5 mt-md-4 mt-lg-5" alt="">
                <a href="" class="btn btn-dark mt-5 mt-md-4 mt-lg-5">tes12345</a>
                <a href="" class="btn btn-dark mt-3 mt-md-4 mt-lg-4">tes12345</a>
                <a href="" class="btn btn-dark mt-3 mt-md-4 mt-lg-4">tes12345</a>
                <a href="" class="btn btn-dark mt-3 mt-md-4 mt-lg-4">tes12345</a>
                <a href="" class="btn btn-dark mt-3 mt-md-4 mt-lg-4">tes12345</a>
                <a href="" class="btn btn-dark mt-3 mt-md-4 mt-lg-4">tes12345</a>
            </div>
        </div>
    </section>

@endsection
