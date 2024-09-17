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
@endphp

@section('title', 'Portfolio Project-Admin')

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
            background-color: rgba({{ $color6 }}, 1);
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
            color: rgba({{ $color5 }}, 1);
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        }

        /* Text and button styling for hover state */
        .card:hover .card-title a,
        .card:hover .card-text {
            color: rgba({{ $color5 }}, 1);
        }

        .card:hover .btn-primary {
            background-color: rgba({{ $color5 }}, 1);
            border-color: rgba({{ $color5 }}, 1);
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

        .table-responsive {
            background-color: rgba({{ $color1 }}, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* .btn-warning {
                                background-color: rgba({{ $color4 }}, 1);
                                color: rgba({{ $color1 }}, 1);
                            }

                            .btn-danger {
                                background-color: rgba({{ $color3 }}, 1);
                                color: rgba({{ $color1 }}, 1);
                            }

                            .btn-success {
                                background-color: rgba({{ $color7 }}, 1);
                                color: rgba({{ $color1 }}, 1);
                            } */
    </style>

    <div class="animated-bg">
        <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2">
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">Welcome to Admin Portfolio Project</h1>
            <p class="lead" style="color: rgba({{ $color3 }}, 1);">Hello, <span class=""
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>
        @if ($portfolioProjects->isEmpty())
            <h5 class="text-lg text-center text-dark p-5">No portfolio projects available at the moment</h5>
        @else
            <section>
                <div class="container table-responsive py-5">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Project Id</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolioProjects as $portfolioProject)
                                <tr>
                                    <td>{{ ($portfolioProjects->currentPage() - 1) * $portfolioProjects->perPage() + $loop->iteration }}
                                    </td>
                                    <td><img src="{{ asset('storage/' . $portfolioProject->image) }}" alt="Portfolio Image"
                                            style="width: 100px; object-fit: cover; aspect-ratio: 1 / 1;"></td>
                                    <td>{{ $portfolioProject->project_id }}</td>
                                    <td>{{ $portfolioProject->projectLimaduajayaSurabaya->name }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $portfolioProject->id }}">Edit</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $portfolioProject->id }}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
        <div class="text-end mt-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add New Portfolio
                Project</button>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $portfolioProjects->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <!-- Add New Portfolio Project Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('portfolio_projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF token for form security -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Portfolio Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="portfolioProjectImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="portfolioProjectImage" name="image"
                                accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="projectName" class="form-label">Project Name</label>
                            <select class="form-control" id="projectName" name="project_id" required>
                                <option value="" disabled selected>Select a project</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Portfolio Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($portfolioProjects as $portfolioProject)
        <!-- Edit Portfolio Project Modal -->
        <div class="modal fade" id="editModal{{ $portfolioProject->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $portfolioProject->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('portfolio_projects.update', $portfolioProject->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $portfolioProject->id }}">Edit Portfolio Project
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="editPortfolioProjectImage{{ $portfolioProject->id }}"
                                    class="form-label">Image</label>
                                <input type="file" class="form-control"
                                    id="editPortfolioProjectImage{{ $portfolioProject->id }}" name="image"
                                    accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="editProjectName{{ $portfolioProject->id }}" class="form-label">Project
                                    Name</label>
                                <select class="form-control" id="editProjectName{{ $portfolioProject->id }}"
                                    name="project_id" required>
                                    <option value="" disabled selected>Select a project</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}"
                                            {{ $portfolioProject->project_id == $project->id ? 'selected' : '' }}>
                                            {{ $project->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Portfolio Project Modal -->
        <div class="modal fade" id="deleteModal{{ $portfolioProject->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel{{ $portfolioProject->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('portfolio_projects.destroy', $portfolioProject->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $portfolioProject->id }}">Delete Portfolio
                                Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this portfolio project?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete Portfolio Project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
