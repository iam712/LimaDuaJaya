@extends('layouts.app')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('title', 'Project')

@section('content')
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 200px;
            /* Anda bisa sesuaikan tinggi sesuai keinginan */
            width: 100%;
            object-fit: cover;
            /* Memastikan gambar selalu memenuhi area */
            aspect-ratio: 1 / 1;
            /* Menjaga rasio 1:1 */
        }

        .parallax {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .fade-section {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .fade-section.visible {
            opacity: 1;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.fade-section');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

    <!-- Project Lima Dua Jaya Surabaya -->
    <section class="py-3 py-md-4 py-lg-5 mt-3 mt-md-3 mt-lg-5 parallax"
        style="background-image: url('{{ asset('images/banner/aboutusbg1.png') }}'); background-size: cover; font-family: 'LibreBaskerville', serif;">
        <h1 class="text-center mt-5 mt-md-3 mt-lg-3 fw-bold fade-section">Our Latest Projects</h1>
        <div class="container fade-section">
            @if ($projects->isEmpty())
                <h5 class="text-lg text-center text-dark p-5">No projects available at the moment</h5>
            @else
                @foreach ($projects as $project)
                    <h3 class="text-start mt-2 mt-md-3 mt-lg-3">{{ $project->name }}</h3>
                    <div>
                        <div class="row gy-3 py-3 py-md-4 py-lg-4 mt-3 mt-md-3 mt-lg-2">
                            @foreach ($project->portfolioProjects as $portfolio)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card w-auto h-auto"
                                        style="background-color: rgb({{ $color1 }}); box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                                        <img src="{{ asset('storage/' . $portfolio->image) }}"
                                            class="card-img-top img-fluid" alt="{{ $project->name }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
