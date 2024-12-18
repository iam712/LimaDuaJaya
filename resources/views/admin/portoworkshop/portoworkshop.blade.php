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

@section('title', 'Portofolio Workshop-Admin')

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
    </style>

    <div class="animated-bg">
        <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2">
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">{{ __('messages.adminworkshopportfoliowelcome') }}</h1>
            <p class="lead" style="color: rgba({{ $color2 }}, 1);">{{ $greeting }}, <span class=""
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>
        @if ($portfolios->isEmpty())
            <h5 class="text-lg text-center text-dark p-5">{{ __('messages.adminworkshopportfolioerrempty') }}</h5>
        @else
            <section>
                <div class="container table-responsive py-5">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">{{ __('messages.adminworkshopportfoliocolimage') }}</th>
                                <th scope="col">{{ __('messages.adminworkshopportfoliocolworkshopid') }}</th>
                                <th scope="col">{{ __('messages.adminworkshopportfoliocolworkshopname') }}</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $portfolio)
                                <tr>
                                    <td>{{ ($portfolios->currentPage() - 1) * $portfolios->perPage() + $loop->iteration }}
                                    </td>
                                    <td><img src="{{ asset('storage/' . $portfolio->image) }}" alt="Image"
                                            style="width: 100px; object-fit: cover; aspect-ratio: 1 / 1;"
                                            onclick="showImageModal('{{ asset('storage/' . $portfolio->image) }}')">
                                    </td>
                                    <td>{{ $portfolio->id_workshop }}</td>
                                    <td>{{ $portfolio->workshop->name }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $portfolio->id }}">
                                            Edit
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $portfolio->id }}">{{ __('messages.adminworkshopportfoliodelbtn') }}</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
        <div class="text-end mt-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">{{ __('messages.adminworkshopportfolioaddbtn') }}</button>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $portfolios->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <!-- Image View Modal -->
    <div class="modal fade" id="imageViewModal" tabindex="-1" aria-labelledby="imageViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageViewModalLabel">{{ __('messages.adminworkshopportfolioimagemodaltitle') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Portfolio Workshop Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Portofolio Workshop Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">{{ __('messages.adminworkshopportfolioaddmodaltitle') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="portofolioWorkshopImage" class="form-label">{{ __('messages.adminworkshopportfolioaddmodalimage') }}</label>
                            <input type="file" class="form-control" id="portofolioWorkshopImage" name="image"
                                accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="workshopName" class="form-label">{{ __('messages.adminworkshopportfolioaddmodalworkshopname') }}</label>
                            <select class="form-control" id="workshopName" name="id_workshop" required>
                                <option value="" disabled selected>Select a workshop</option>
                                @foreach ($workshops as $workshop)
                                    <option value="{{ $workshop->id }}">{{ $workshop->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminworkshopaddmodalclosebtn') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('messages.adminworkshopportfolioaddmodalsavebtn') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($portfolios as $portfolio)
        <!-- Edit Portofolio Workshop Modal -->
        <div class="modal fade" id="editModal{{ $portfolio->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $portfolio->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $portfolio->id }}">{{ __('messages.adminworkshopportfolioeditmodaltitle') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="editPortofolioWorkshopImage{{ $portfolio->id }}"
                                    class="form-label">{{ __('messages.adminworkshopportfolioeditmodalimage') }}</label>
                                <input type="file" class="form-control"
                                    id="editPortofolioWorkshopImage{{ $portfolio->id }}" name="image" accept="image/*"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="editWorkshopName{{ $portfolio->id }}" class="form-label">{{ __('messages.adminworkshopportfolioeditmodalworkshopname') }}</label>
                                <select class="form-control" id="editWorkshopName{{ $portfolio->id }}"
                                    name="id_workshop" required>
                                    <option value="" disabled selected>Select a workshop</option>
                                    @foreach ($workshops as $workshop)
                                        <option value="{{ $workshop->id }}"
                                            {{ $portfolio->id_workshop == $workshop->id ? 'selected' : '' }}>
                                            {{ $workshop->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminworkshopportfolioeditmodalclosebtn') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('messages.adminworkshopportfolioeditmodalsavebtn') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Portofolio Workshop Modal -->
        <div class="modal fade" id="deleteModal{{ $portfolio->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel{{ $portfolio->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $portfolio->id }}">{{ __('messages.adminworkshopportfoliodelmodaltitle') }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           {{ __('messages.adminworkshopportfoliodelmodalconfirm') }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminworkshopportfoliodelmodalcancelbtn') }}</button>
                            <button type="submit" class="btn btn-danger">{{ __('messages.adminworkshopportfoliodelmodaldelbtn') }}</button>
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
