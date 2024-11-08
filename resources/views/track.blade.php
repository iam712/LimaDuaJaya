@extends('layouts.app')

@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('content')
    <section class="container py-5 py-md-5 py-lg-5 mt-5 mt-md-5 mt-lg-5">

        <h2 class="text-center mb-4 mb-md-5 mb-lg-5">Enter your Unique ID</h2>

        <form method="GET" action="{{ route('track') }}">
            <div class="input-group mt-4 mt-md-5 mt-lg-5">
                <input type="text" name="unique_id" class="form-control" placeholder="Enter Unique ID"
                       value="{{ request('unique_id') }}"
                       style="background-color: rgba({{ $color1 }}); border: 2px solid rgba({{ $color2 }}); color: rgba({{ $color2 }});">
                <button class="btn btn-primary" type="submit" style="background-color: rgba({{ $color4 }}); border-color: rgba({{ $color4 }}); color: rgba({{ $color1 }});">
                    Search
                </button>
            </div>
        </form>

        @if ($project)

            <h4 class="text-center mt-5 mt-md-5 mt-lg-5 mb-3 mb-md-3 mb-lg-3">Your Project Updates</h4>

            <h3 class="mt-4 mt-md-4 mt-lg-5 mb-3 mb-md-3 mb-lg-3">{{ $project->name }}</h3>

            <div class="row">
                @foreach ($currproject_portfolios as $portfolio)
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image"
                                class="card-img-top" style="object-fit: cover; aspect-ratio: 1 / 1;">
                            <div class="card-body">
                                <p>{{ $portfolio->status_detail }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            @if (request('unique_id'))
                <p class="text-danger">No project found with this Unique ID.</p>
            @endif
        @endif
    </section>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            min-height: 50vh;
        }
    </style>
@endsection
