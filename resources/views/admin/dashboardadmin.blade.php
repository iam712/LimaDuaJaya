@extends('layouts.admin.appadmin')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
    $color7 = '240, 104, 111'; //#F0686F

    use Carbon\Carbon;

    // Set the timezone to Jakarta (Indonesia)
    $currentTime = Carbon::now('Asia/Jakarta');
    $greeting = '';

    // Define morning and evening times
    if ($currentTime->hour < 12) {
        $greeting = 'Good Morning';
    } elseif ($currentTime->hour < 18) {
        $greeting = 'Good Afternoon';
    } else {
        $greeting = 'Good Evening';
    }

    // Get the user's name
    $userName = Auth::user()->name;

@endphp

@section('title', 'Dashboard-Admin')

@section('content')

    <style>
        /* Animation for the card hover effect */
        .card:hover {
            transform: scale(1.05) rotateX(10deg) rotateY(10deg);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out;
            background-color: rgba({{ $color3 }}, 0.9);
        }

        .card {
            transform: scale(1) rotateX(0) rotateY(0);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out;
            background-color: rgba({{ $color1 }}, 1);
        }

        /* Text and button styling for default state */
        .card .card-title a,
        .card .card-text {
            color: rgba({{ $color3 }}, 1);
            transition: color 0.3s ease-in-out;
        }

        .card .btn-primary {
            background-color: rgba({{ $color4 }}, 1);
            border-color: rgba({{ $color4 }}, 1);
            color: rgba({{ $color1 }}, 1);
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        }

        /* Text and button styling for hover state */
        .card:hover .card-title a,
        .card:hover .card-text {
            color: rgba({{ $color1 }}, 1);
        }

        .card:hover .btn-primary {
            background-color: rgba({{ $color1 }}, 1);
            border-color: rgba({{ $color1 }}, 1);
            color: rgba({{ $color3 }}, 1);
        }

        /* Background animation */
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

        /* Hide the sidebar toggle button on medium and larger screens */
        /*  */
    </style>


    <div class="animated-bg">
        <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2"
            style="background-color: transparent;">
            <h1 class="display-4" style="color: rgba({{ $color1 }}, 1);">Welcome to Admin Dashboard</h1>
            <p class="lead" style="color: rgba({{ $color3 }}, 1);">{{ $greeting }}, <span class=""
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <!-- Card 1: Workshop -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin/workshops') }}" class="text-decoration-none">
                                        Workshop
                                    </a>
                                </h5>
                                <p class="card-text">Manage and review all workshop-related content.</p>
                                <p class="card-text">Total Workshop : <span class="text-dark">{{ $workshopCount }}</span>
                                </p>
                                <a href="{{ url('/admin/workshops') }}" class="btn btn-primary">Go to Workshop</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Project -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('projects.index') }}" class="text-decoration-none">
                                        Project
                                    </a>
                                </h5>
                                <p class="card-text">View and manage all project submissions and statuses.</p>
                                <p class="card-text">Total Workshop : <span class="text-dark">{{ $projectCount }}</span>
                                </p>
                                <a href="{{ route('projects.index') }}" class="btn btn-primary">Go to Project</a>
                            </div>
                        </div>
                    </div>


                    <!-- Card 3: User -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin-user') }}" class="text-decoration-none">
                                        User
                                    </a>
                                </h5>
                                <p class="card-text">Manage user profiles and permissions.</p>
                                <p class="card-text">Total Workshop : <span class="text-dark">{{ $userCount }}</span>
                                </p>
                                <a href="{{ url('/admin/users') }}" class="btn btn-primary">Go to User Management</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Review -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin/reviews') }}" class="text-decoration-none">
                                        Review
                                    </a>
                                </h5>
                                <p class="card-text">Moderate and respond to user reviews and feedback.</p>
                                <p class="card-text">Total Workshop : <span class="text-dark">{{ $reviewCount }}</span>
                                </p>
                                <a href="{{ url('/admin/reviews') }}" class="btn btn-primary">Go to Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const body = document.body;

            sidebarToggle.addEventListener('click', function() {
                body.classList.toggle('sidebar-closed');
            });
        });
    </script>

@endsection
