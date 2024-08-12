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
    <div
        style="background-color: rgba({{ $color4 }}, 1); min-height: 100vh; border-radius: 15px; margin: 20px; padding: 20px;">
        <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2"
            style="background-color: transparent;">
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">Welcome to Admin Dashboard</h1>
            <p class="lead" style="color: rgba({{ $color3 }}, 1);">Hello, <span class="font-weight-bold"
                    style="color: rgba({{ $color2 }}, 1);">user123</span>!</p>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <!-- Card 1: Workshop -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100"
                            style="background-color: rgba({{ $color6 }}, 1);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin-workshop') }}" class="text-decoration-none"
                                        style="color: rgba({{ $color4 }}, 1);">
                                        Workshop
                                    </a>
                                </h5>
                                <p class="card-text" style="color: rgba({{ $color3 }}, 1);">Manage and review all
                                    workshop-related content.</p>
                                <a href="{{ url('/admin-workshop') }}" class="btn btn-primary"
                                    style="background-color: rgba({{ $color4 }}, 1); border-color: rgba({{ $color4 }}, 1);">Go
                                    to Workshop</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Project -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100"
                            style="background-color: rgba({{ $color6 }}, 1);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin-project') }}" class="text-decoration-none"
                                        style="color: rgba({{ $color4 }}, 1);">
                                        Project
                                    </a>
                                </h5>
                                <p class="card-text" style="color: rgba({{ $color3 }}, 1);">View and manage all
                                    project submissions and statuses.</p>
                                <a href="{{ url('/admin-project') }}" class="btn btn-primary"
                                    style="background-color: rgba({{ $color4 }}, 1); border-color: rgba({{ $color4 }}, 1);">Go
                                    to Project</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: User -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100"
                            style="background-color: rgba({{ $color6 }}, 1);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin-user') }}" class="text-decoration-none"
                                        style="color: rgba({{ $color4 }}, 1);">
                                        User
                                    </a>
                                </h5>
                                <p class="card-text" style="color: rgba({{ $color3 }}, 1);">Manage user profiles and
                                    permissions.</p>
                                <a href="{{ url('/admin-user') }}" class="btn btn-primary"
                                    style="background-color: rgba({{ $color4 }}, 1); border-color: rgba({{ $color4 }}, 1);">Go
                                    to User Management</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Review -->
                    <div class="col-12 col-md-6 col-lg-6 mb-4">
                        <div class="card border-light shadow-sm h-100"
                            style="background-color: rgba({{ $color6 }}, 1);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/admin-review') }}" class="text-decoration-none"
                                        style="color: rgba({{ $color4 }}, 1);">
                                        Review
                                    </a>
                                </h5>
                                <p class="card-text" style="color: rgba({{ $color3 }}, 1);">Moderate and respond to
                                    user reviews and feedback.</p>
                                <a href="{{ url('/admin-review') }}" class="btn btn-primary"
                                    style="background-color: rgba({{ $color4 }}, 1); border-color: rgba({{ $color4 }}, 1);">Go
                                    to Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
