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
        <h1 class="display-4 text-primary">Welcome to Admin Dashboard</h1>
        <p class="lead">Hello, <span class="font-weight-bold text-secondary">user123</span>!</p>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <!-- Card 1: Workshop -->
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/admin-workshop') }}" class="text-decoration-none text-primary">Workshop</a></h5>
                            <p class="card-text">Manage and review all workshop-related content.</p>
                            <a href="{{ url('/admin-workshop') }}" class="btn btn-primary">Go to Workshop</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Project -->
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/admin-project') }}" class="text-decoration-none text-primary">Project</a></h5>
                            <p class="card-text">View and manage all project submissions and statuses.</p>
                            <a href="{{ url('/admin-project') }}" class="btn btn-primary">Go to Project</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: User -->
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/admin-user') }}" class="text-decoration-none text-primary">User</a></h5>
                            <p class="card-text">Manage user profiles and permissions.</p>
                            <a href="{{ url('/admin-user') }}" class="btn btn-primary">Go to User Management</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Review -->
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="card border-light shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/admin-review') }}" class="text-decoration-none text-primary">Review</a></h5>
                            <p class="card-text">Moderate and respond to user reviews and feedback.</p>
                            <a href="{{ url('/admin-review') }}" class="btn btn-primary">Go to Reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
