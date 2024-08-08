@extends('layouts.admin.appadmin')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('title', 'Dashboard-Admin')

@section('content')
    <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2">
        <h1>Welcome to Admin Dashboard</h1>
        <p>Hello <span>user123</span>!</p>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-6 mb-4 h-100">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-6 mb-4 h-100">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Card title 2</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-6 mb-4 h-100">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Card title 3</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Card title 4</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
