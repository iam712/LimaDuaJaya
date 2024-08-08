@extends('layouts.app')

@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('title', 'Sign In')

@section('content')

    <style>
        a {
            text-decoration: none;
        }

        .signin-page {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color4 }}));
        }

        .btn-primary {
            background-color: rgb({{ $color4 }});
            border: none;
        }
    </style>

    <section>
        <div class="signin-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <h3 class="mb-4 text-light mt-5">Sign In Now</h3>
                        <div class="bg-white shadow rounded-3 p-4 p-md-5">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4 mb-md-0">
                                    <div class="form-left">
                                        <form action="" class="row g-3">
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                                    <input type="email" id="email" class="form-control" placeholder="Enter Email">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                                                    <input type="password" id="password" class="form-control" placeholder="Enter Password">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-danger  w-100 mt-3">Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center text-center">
                                    <img src="{{ asset('images/logo-square.png') }}" alt="Logo" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
