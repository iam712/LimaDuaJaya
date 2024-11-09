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

@section('title', 'Current Project-Admin')

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

        .card:hover .card-title a,
        .card:hover .card-text {
            color: rgba({{ $color5 }}, 1);
        }

        .card:hover .btn-primary {
            background-color: rgba({{ $color5 }}, 1);
            border-color: rgba({{ $color5 }}, 1);
            color: rgba({{ $color3 }}, 1);
        }

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
    </style>

    <div class="animated-bg">
        <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2">
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">{{ __('messages.adminongoingprojectwelcome') }}</h1>
            <p class="lead" style="color: rgba({{ $color2 }}, 1);">{{ $greeting }}, <span
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>
        @if ($currprojects->isEmpty())
            <h5 class="text-lg text-center text-dark p-5">{{ __('messages.adminongoingprojecterrempty') }}</h5>
        @else
            <section>
                <div class="container-fluid table-responsive py-5">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">{{ __('messages.adminongoingprojectcolname') }}</th>
                                <th scope="col">Unique Id</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currprojects as $project)
                                <tr>
                                    <td>{{ ($currprojects->currentPage() - 1) * $currprojects->perPage() + $loop->iteration }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->unique_id }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $project->id }}">Edit</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $project->id }}">{{ __('messages.adminongoingprojectdelbtn') }}</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
        <div class="text-end mt-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">{{ __('messages.adminongoingprojectaddbtn') }}</button>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $currprojects->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <!-- Add New Project Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('currprojects.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">{{ __('messages.adminongoingprojectaddmodaltitle') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('messages.adminongoingprojectaddmodalname') }}</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="unique_id" class="form-label">Unique ID</label>
                            <input type="text" class="form-control" id="unique_id" name="unique_id" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminongoingprojectaddmodalclosebtn') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('messages.adminongoingprojectaddmodalsavebtn') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($currprojects as $project)
        <!-- Edit Project Modal -->
        <div class="modal fade" id="editModal{{ $project->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $project->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('currprojects.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $project->id }}">{{ __('messages.adminongoingprojecteditmodaltitle') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="editProjectName{{ $project->id }}" class="form-label">{{ __('messages.adminongoingprojecteditmodalname') }}</label>
                                <input type="text" class="form-control" id="editProjectName{{ $project->id }}"
                                    name="name" value="{{ $project->name }}" required>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="editProjectName{{ $project->id }}" class="form-label">Unique ID</label>
                                <input type="text" class="form-control" id="editProjectName{{ $project->id }}"
                                    name="unique_id" value="{{ $project->unique_id }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminongoingprojecteditmodalclosebtn') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('messages.adminongoingprojecteditmodalsavebtn') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Project Modal -->
        <div class="modal fade" id="deleteModal{{ $project->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel{{ $project->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('currprojects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $project->id }}">{{ __('messages.adminongoingprojectdelmodaltitle') }}</h5>
                        </div>
                        <div class="modal-body">
                            {{ __('messages.adminongoingprojectdelmodalconfirm') }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminongoingprojectdelmodalcancelbtn') }}</button>
                            <button type="submit" class="btn btn-danger">{{ __('messages.adminongoingprojectdelmodaldelbtn') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
