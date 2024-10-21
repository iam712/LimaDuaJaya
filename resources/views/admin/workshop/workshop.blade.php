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

@section('title', 'Workshop-Admin')

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
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">{{ __('messages.adminworkshopwelcome') }}
            </h1>
            <p class="lead" style="color: rgba({{ $color2 }}, 1);">{{ $greeting }}, <span class=""
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>

        <!-- Filter Form -->
        <form action="{{ route('workshops.index') }}" method="GET" class="mb-2 mb-md-3 mb-lg-4">
            <div class="form-group">
                <label for="type" class="text-light">{{ __('messages.adminworkshopfilterlabel') }}</label>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="type" id="type" class="form-control mt-2 mt-md-2 mt-lg-2"
                        onchange="this.form.submit()">
                        <option value="all" {{ $type === 'all' ? 'selected' : '' }}>
                            {{ __('messages.adminworkshopalloption') }}</option>
                        <option value="limaduajaya" {{ $type === 'limaduajaya' ? 'selected' : '' }}>{{ __('messages.adminworkshoplimaduaoption') }}
                        </option>
                        <option value="other" {{ $type === 'other' ? 'selected' : '' }}>{{ __('messages.adminworkshopotheroption') }}</option>
                    </select>
                </div>
            </div>
        </form>

        @if ($workshops->isEmpty())
            <h5 class="text-lg text-center text-dark p-5">{{ __('messages.adminworkshoperrempty') }}</h5>
        @else
            <section>
                <div class="container table-responsive py-5">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">{{ __('messages.adminworkshopcolphoto') }}</th>
                                <th scope="col">{{ __('messages.adminworkshopcolname') }}</th>
                                <th scope="col">{{ __('messages.adminworkshopcollocation') }}</th>
                                <th scope="col">{{ __('messages.adminworkshopcoldescription') }}</th>
                                <th scope="col">{{ __('messages.adminworkshopboollimadua') }}</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workshops as $workshop)
                                <tr>
                                    <td>{{ ($workshops->currentPage() - 1) * $workshops->perPage() + $loop->iteration }}
                                    </td>
                                    <td><img src="{{ asset('storage/' . $workshop->image) }}" alt="Image"
                                            style="width: 100px; object-fit: cover; aspect-ratio: 1 / 1;"
                                            onclick="showImageModal('{{ asset('storage/' . $workshop->image) }}')">
                                    </td>
                                    <td>{{ $workshop->name }}</td>
                                    <td>{{ $workshop->location }}</td>
                                    <td>
                                        @if (strlen($workshop->description) > 40)
                                            {{ substr($workshop->description, 0, 40) }}...
                                            <a href="#" class="read-more-link text-dark" data-bs-toggle="modal"
                                                data-bs-target="#descriptionModal{{ $workshop->id }}"><br> Read More</a>
                                        @else
                                            {{ $workshop->description }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($workshop->isLimaduajaya)
                                            <i class="fas fa-check text-success"></i>
                                        @else
                                            <i class="fas fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Edit button -->
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editWorkshopModal-{{ $workshop->id }}">
                                            Edit
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $workshop->id }}">{{ __('messages.adminworkshopdelbtn') }}</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
        <div class="text-end mt-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addWorkshopModal">{{ __('messages.adminworkshopaddbtn') }}</button>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $workshops->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>


    <!-- Image View Modal -->
    <div class="modal fade" id="imageViewModal" tabindex="-1" aria-labelledby="imageViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageViewModalLabel">{{ __('messages.adminworkshopimgmodal') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Workshop Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @foreach ($workshops as $workshop)
        <div class="modal fade" id="descriptionModal{{ $workshop->id }}" tabindex="-1"
            aria-labelledby="descriptionModalLabel{{ $workshop->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel{{ $workshop->id }}">{{ $workshop->name }} - Full
                            Description</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $workshop->description }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <!-- Add Workshop Modal -->
    <div class="modal fade" id="addWorkshopModal" tabindex="-1" aria-labelledby="addWorkshopModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addWorkshopModalLabel">{{ __('messages.adminworkshopaddmodaltitle') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('workshops.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="workshopPhoto" class="form-label">{{ __('messages.adminworkshopaddmodalphoto') }}</label>
                            <input type="file" name="image" class="form-control" id="workshopPhoto" required>
                        </div>
                        <div class="mb-3">
                            <label for="workshopName" class="form-label">{{ __('messages.adminworkshopaddmodalname') }}</label>
                            <input type="text" name="name" class="form-control" id="workshopName" required>
                        </div>
                        <div class="mb-3">
                            <label for="workshopLocation" class="form-label">{{ __('messages.adminworkshopaddmodallocation') }}</label>
                            <input type="text" name="location" class="form-control" id="workshopLocation" required>
                        </div>
                        <div class="mb-3">
                            <label for="workshopDescription" class="form-label">{{ __('messages.adminworkshopaddmodaldescription') }}</label>
                            <textarea name="description" class="form-control" id="workshopDescription" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <!-- Hidden input to ensure 'false' is sent when the checkbox is not checked -->
                            <input type="hidden" name="isLimaduajaya" value="0">

                            <input type="checkbox" name="isLimaduajaya" class="form-check-input" id="isLimaDua"
                                value="1">
                            <label class="form-check-label" for="isLimaDua">{{ __('messages.adminworkshopaddmodalcheckbox') }}</label>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminworkshopaddmodalclosebtn') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('messages.adminworkshopaddmodalsavebtn') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($workshops as $workshop)
        <!-- Edit Workshop Modal -->
        <div class="modal fade" id="editWorkshopModal-{{ $workshop->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $workshop->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editWorkshopModalLabel">Edit Workshop</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('workshops.update', $workshop->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="editWorkshopPhoto" class="form-label">{{ __('messages.adminworkshopeditmodalphoto') }}</label>
                                <input type="file" name="image" class="form-control" id="editWorkshopPhoto">
                            </div>
                            <div class="mb-3">
                                <label for="editWorkshopName" class="form-label">{{ __('messages.adminworkshopeditmodalname') }}</label>
                                <input type="text" name="name" class="form-control" id="editWorkshopName"
                                    value="{{ $workshop->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="editWorkshopLocation" class="form-label">{{ __('messages.adminworkshopeditmodallocation') }}</label>
                                <input type="text" name="location" class="form-control" id="editWorkshopLocation"
                                    value="{{ $workshop->location }}">
                            </div>
                            <div class="mb-3">
                                <label for="editWorkshopDescription" class="form-label">{{ __('messages.adminworkshopeditmodaldescription') }}</label>
                                <textarea name="description" class="form-control" id="editWorkshopDescription">{{ $workshop->description }}</textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <!-- Hidden input to ensure 'false' is sent when the checkbox is not checked -->
                                <input type="hidden" name="isLimaduajaya" value="0">

                                <input type="checkbox" name="isLimaduajaya" class="form-check-input" id="editIsLimaDua"
                                    value="1" {{ $workshop->isLimaduajaya ? 'checked' : '' }}>
                                <label class="form-check-label" for="editIsLimaDua">{{ __('messages.adminworkshopeditmodalcheckbox') }}</label>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminworkshopeditmodalclosebtn') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('messages.adminworkshopeditmodalsavebtn') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Workshop Modal -->
        <div class="modal fade" id="deleteModal{{ $workshop->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel{{ $workshop->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('workshops.destroy', $workshop->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $workshop->id }}">{{ __('messages.adminworkshopdelmodaltitle') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ __('messages.adminworkshopdelmodalconfirm') }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.adminworkshopdelmodalcancelbtn') }}</button>
                            <button type="submit" class="btn btn-danger">{{ __('messages.adminworkshopdelmodaldelbtn') }}</button>
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
