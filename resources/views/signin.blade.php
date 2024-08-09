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

    </style>

    <section>
        <div class="signin-page">
            <!-- Snowflakes -->
            @for ($i = 0; $i < 50; $i++)
                <div class="snowflake"></div>
            @endfor

            <!-- Sign In Form Content -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <h3 class="mb-4 text-light mt-5">Sign In Now</h3>
                        <div class="bg-white shadow rounded-3 p-4 p-md-5">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4 mb-md-0">
                                    <div class="form">
                                        <form action="" method="" class="row g-3">
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
                                                <button type="submit" class="btn btn-danger w-100 mt-3">Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
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
