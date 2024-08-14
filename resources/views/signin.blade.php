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
        /* General Styles */
        a {
            text-decoration: none;
        }

        .signin-page {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color4 }}));
            overflow: hidden;
        }

        /* Snowflake Styles */
        .snowflake {
            position: absolute;
            background: white;
            border-radius: 50%;
            top: -5vh;
        }

        .btn-primary {
            background-color: rgb({{ $color4 }});
            border: none;
        }

        @keyframes snowfall {
            0% {
                transform: translate3d(var(--left-ini), 0, 0);
            }

            100% {
                transform: translate3d(var(--left-end), 110vh, 0);
            }
        }

        /* Generated CSS for each snowflake */
        @for ($i = 0; $i < 50; $i++)
            .snowflake:nth-child({{ $i + 1 }}) {
                --size: {{ rand(1, 5) * 0.2 }}vw;
                --left-ini: {{ rand(-10, 10) }}vw;
                --left-end: {{ rand(-10, 10) }}vw;
                left: {{ rand(0, 100) }}vw;
                width: var(--size);
                height: var(--size);
                animation: snowfall {{ 5 + rand(1, 10) }}s linear infinite;
                animation-delay: -{{ rand(1, 10) }}s;
            }
        @endfor

        /* Optional: Adding blur effect to every 6th snowflake */
        @for ($i = 0; $i < 50; $i++)
            @if (($i + 1) % 6 == 0)
                .snowflake:nth-child({{ $i + 1 }}) {
                    filter: blur(1px);
                }
            @endif
        @endfor

        /* Cube Styles */
        .cube-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .cube {
            width: 150px;
            height: 150px;
            position: relative;
            transform-style: preserve-3d;
            animation: rotate 10s infinite linear;
        }

        .cube div {
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cube .front {
            transform: translateZ(75px);
        }

        .cube .back {
            transform: rotateY(180deg) translateZ(75px);
        }

        .cube .right {
            transform: rotateY(90deg) translateZ(75px);
        }

        .cube .left {
            transform: rotateY(-90deg) translateZ(75px);
        }

        .cube .top {
            transform: rotateX(90deg) translateZ(75px);
        }

        .cube .bottom {
            transform: rotateX(-90deg) translateZ(75px);
        }

        @keyframes rotate {
            from {
                transform: rotateY(0);
            }

            to {
                transform: rotateY(360deg);
            }
        }

        /* Background and Text Color Styles */
        .bg-custom {
            background-color: rgb({{ $color6 }});
            color: rgb({{ $color2 }});
        }

        .bg-custom .form-label,
        .bg-custom .input-group-text,
        .bg-custom h3,
        .bg-custom button {
            color: rgb({{ $color2 }});
        }

        @media (max-width: 768px) {
            .signin-page {
                height: auto;
                padding: 20px 0;
            }

            .cube-container {
                margin-top: 20px;
            }

            .cube {
                width: 100px;
                height: 100px;
            }

            .cube div {
                width: 100px;
                height: 100px;
            }

            h3 {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .signin-page {
                height: auto;
                padding: 10px 0;
            }

            .cube-container {
                margin-top: 15px;
            }

            .cube {
                width: 80px;
                height: 80px;
            }

            .cube div {
                width: 80px;
                height: 80px;
            }
        }
    </style>

    <section>
        <div class="signin-page">
            <!-- Snowflakes -->
            @for ($i = 0; $i < 50; $i++)
                <div class="snowflake"></div>
            @endfor

            <!-- Sign In Form Content -->
            <div class="container" style="font-family: 'LibreBaskerville', serif;">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="bg-custom shadow rounded-3 p-4 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <!-- Title Above Form and Cube -->
                                    <h3 class="text-center mb-4">Please Sign In</h3>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form">
                                        <form action="" method="" class="row g-3">
                                            <div class="col-12">
                                                <label for="email" class="form-label" style="font-family: 'LibreBaskerville', serif;">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                                    <input type="email" id="email" class="form-control"
                                                        placeholder="Enter Email">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                                                    <input type="password" id="password" class="form-control"
                                                        placeholder="Enter Password">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-danger w-100 mt-3">Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Rotating Cube -->
                                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center mt-4 mt-md-0">
                                    <div class="cube-container">
                                        <div class="cube">
                                            <div class="front">
                                                <img src="{{ asset('images/logo-square.png') }}" alt="Front Image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="back">
                                                <img src="{{ asset('images/logo-square.png') }}" alt="Back Image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="right">
                                                <img src="{{ asset('images/logo-square.png') }}" alt="Right Image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="left">
                                                <img src="{{ asset('images/logo-square.png') }}" alt="Left Image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="top">
                                                <img src="{{ asset('images/logo-square.png') }}" alt="Top Image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="bottom">
                                                <img src="{{ asset('images/logo-square.png') }}" alt="Bottom Image"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Rotating Cube -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
