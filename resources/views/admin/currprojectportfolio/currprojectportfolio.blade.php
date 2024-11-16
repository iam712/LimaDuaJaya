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

@section('title', 'Current Portfolio Project-Admin')

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
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">
                {{ __('messages.adminongoingprojectportfoliowelcome') }}
            </h1>
            <p class="lead" style="color: rgba({{ $color2 }}, 1);">{{ $greeting }}, <span class=""
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>
        @if ($currproject_portfolios->isEmpty())
            <h5 class="text-lg text-center text-dark p-5">{{ __('messages.adminongoingprojectportfolioerrempty') }}</h5>
        @else
            <section>
                <div class="container table-responsive py-5">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">{{ __('messages.adminongoingprojectportfoliocolimage') }}</th>
                                <th scope="col">{{ __('messages.adminongoingprojectportfoliocolongoingprojectid') }}
                                </th>
                                <th scope="col">Unique ID</th>
                                <th scope="col">{{ __('messages.adminongoingprojectportfoliocolongoingprojectname') }}
                                </th>
                                <th scope="col">Status Detail</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currproject_portfolios as $currproject_portfolio)
                                <tr>
                                    <td>{{ ($currproject_portfolios->currentPage() - 1) * $currproject_portfolios->perPage() + $loop->iteration }}
                                    </td>
                                    <td><img src="{{ asset('storage/' . $currproject_portfolio->image) }}"
                                            alt="Portfolio Image"
                                            style="width: 100px; object-fit: cover; aspect-ratio: 1 / 1;"
                                            onclick="showImageModal('{{ asset('storage/' . $currproject_portfolio->image) }}')">
                                    </td>
                                    <td>{{ $currproject_portfolio->currproject_id }}</td>
                                    <td>{{ $currproject_portfolio->currproject->unique_id }}</td>
                                    <td>{{ $currproject_portfolio->currproject->name }}</td>
                                    <td>{{ $currproject_portfolio->status_detail }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $currproject_portfolio->id }}">Edit</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $currproject_portfolio->id }}">{{ __('messages.adminongoingprojectportfoliodelbtn') }}</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
        <div class="text-end mt-3">
            <button class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#addModal">{{ __('messages.adminongoingprojectportfolioaddbtn') }}</button>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $currproject_portfolios->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <!-- Image View Modal -->
    <div class="modal fade" id="imageViewModal" tabindex="-1" aria-labelledby="imageViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageViewModalLabel">
                        {{ __('messages.adminongoingprojectportfolioimagemodaltitle') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Portfolio Project Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Portfolio Project Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('currproject_portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF token for form security -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">
                            {{ __('messages.adminongoingprojectportfolioaddmodaltitle') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="portfolioProjectImage"
                                class="form-label">{{ __('messages.adminongoingprojectportfolioaddmodalimage') }}</label>
                            <input type="file" class="form-control" id="portfolioProjectImage" name="image"
                                accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="currproject_id"
                                class="form-label">{{ __('messages.adminongoingprojectportfolioaddmodalongoingprojectname') }}</label>
                            <select class="form-control" id="currproject_id" name="currproject_id" required>
                                <option value="" disabled selected>Select a project</option>
                                @foreach ($currprojects as $currproject)
                                    <option value="{{ $currproject->id }}">{{ $currproject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status_detail" class="form-label">Status Detail</label>
                            <input type="text" class="form-control" id="status_detail" name="status_detail" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('messages.adminongoingprojectportfolioaddmodalclosebtn') }}</button>
                        <button type="submit"
                            class="btn btn-primary">{{ __('messages.adminongoingprojectportfolioaddmodalsavebtn') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($currproject_portfolios as $currproject_portfolio)
        <!-- Edit Portfolio Project Modal -->
        <div class="modal fade" id="editModal{{ $currproject_portfolio->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $currproject_portfolio->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('currproject_portfolios.update', $currproject_portfolio->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $currproject_portfolio->id }}">
                                {{ __('messages.adminongoingprojectportfolioeditmodaltitle') }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="editPortfolioProjectImage{{ $currproject_portfolio->id }}"
                                    class="form-label">{{ __('messages.adminongoingprojectportfolioeditmodalimage') }}</label>
                                <input type="file" class="form-control"
                                    id="editPortfolioProjectImage{{ $currproject_portfolio->id }}" name="image"
                                    accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="editProjectName{{ $currproject_portfolio->id }}" class="form-label">{{ __('messages.adminongoingprojectportfoliocolongoingprojectname') }}</label>
                                <select class="form-control" id="editProjectName{{ $currproject_portfolio->id }}"
                                    name="currproject_id" required>
                                    <option value="" disabled selected>Select a project</option>
                                    @foreach ($currprojects as $currproject)
                                        <option value="{{ $currproject->id }}"
                                            {{ $currproject->currproject_id == $currproject->id ? 'selected' : '' }}>
                                            {{ $currproject->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status_detail" class="form-label">Status Detail</label>
                                <input type="text" class="form-control" id="status_detail" name="status_detail"
                                    value="{{ $currproject_portfolio->status_detail }}" required>
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
        <div class="modal fade" id="deleteModal{{ $currproject_portfolio->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel{{ $currproject_portfolio->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('currproject_portfolios.destroy', $currproject_portfolio->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $currproject_portfolio->id }}">{{ __('messages.adminongoingprojectportfoliodelmodaltitle') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ __('messages.adminongoingprojectportfoliodelmodalconfirm') }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminongoingprojectdelmodalcancelbtn') }}</button>
                            <button type="submit" class="btn btn-danger">{{ __('messages.adminongoingprojectportfoliodelmodaldelbtn') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function showImageModal(imageSrc) {
            // Get the modal image element
            var modalImage = document.getElementById('modalImage');
            // Set the source of the modal image to the clicked image
            modalImage.src = imageSrc;
            // Show the modal
            var imageViewModal = new bootstrap.Modal(document.getElementById('imageViewModal'));
            imageViewModal.show();
        }
    </script>
@endsection
