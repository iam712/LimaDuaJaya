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
    <div class="py-3 py-md-4 py-lg-5 mt-5 mt-md-3 mt-lg-5">
        <div class="container">
            <form method="GET" action="{{ route('track') }}">
                <div class="input-group mb-3">
                    <input type="text" name="unique_id" class="form-control" placeholder="Enter Unique ID"
                        value="{{ request('unique_id') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>

            @if ($project)
                <h3 class="mt-2 mt-md-4 mt-lg-5">{{ $project->name }}</h3>

                <div class="row">
                    @foreach ($currproject_portfolios as $portfolio)
                        <div class="col-md-4 mb-4">
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
        </div>
    </div>
@endsection
