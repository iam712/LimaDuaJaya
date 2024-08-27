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
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">Welcome to Admin Workshop</h1>
            <p class="lead" style="color: rgba({{ $color3 }}, 1);">Hello, <span class=""
                    style="color: rgba({{ $color2 }}, 1);">{{ Auth::user()->email }}</span>!</p>
        </section>

        <section>
            <div class="container table-responsive py-5">
                <table class="table table-hover table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Description</th>
                            <th scope="col">is Lima Dua Jaya?</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>image</td>
                            <td>Workshop 1</td>
                            <td>Surabaya</td>
                            <td>halo</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editWorkshopModal">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteWorkshopModal">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>image</td>
                            <td>Workshop 2</td>
                            <td>Surabaya</td>
                            <td>halo</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editWorkshopModal">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteWorkshopModal">Delete</button>
                            </td>
                        </tr>
                        <!-- Repeat for other rows -->
                    </tbody>
                </table>
            </div>
        </section>
        <div class="text-end mt-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addWorkshopModal">Add New
                Workshop</button>
        </div>
    </div>

    <!-- Add Workshop Modal -->
    <div class="modal fade" id="addWorkshopModal" tabindex="-1" aria-labelledby="addWorkshopModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addWorkshopModalLabel">Add New Workshop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="workshopPhoto" class="form-label">Workshop Photo</label>
                            <input type="file" class="form-control" id="workshopPhoto">
                        </div>
                        <div class="mb-3">
                            <label for="workshopName" class="form-label">Workshop Name</label>
                            <input type="text" class="form-control" id="workshopName">
                        </div>
                        <div class="mb-3">
                            <label for="workshopLocation" class="form-label">Workshop Location</label>
                            <input type="text" class="form-control" id="workshopLocation">
                        </div>
                        <div class="mb-3">
                            <label for="workshopDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="workshopDescription"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="isLimaDua">
                            <label class="form-check-label" for="isLimaDua">Is the workshop from LimaDua?</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Workshop Modal -->
    <div class="modal fade" id="editWorkshopModal" tabindex="-1" aria-labelledby="editWorkshopModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editWorkshopModalLabel">Edit Workshop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editWorkshopPhoto" class="form-label">Workshop Photo</label>
                            <input type="file" class="form-control" id="editWorkshopPhoto">
                        </div>
                        <div class="mb-3">
                            <label for="editWorkshopName" class="form-label">Workshop Name</label>
                            <input type="text" class="form-control" id="editWorkshopName">
                        </div>
                        <div class="mb-3">
                            <label for="editWorkshopLocation" class="form-label">Workshop Location</label>
                            <input type="text" class="form-control" id="editWorkshopLocation">
                        </div>
                        <div class="mb-3">
                            <label for="editWorkshopDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editWorkshopDescription"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="editIsLimaDua">
                            <label class="form-check-label" for="editIsLimaDua">Is the workshop from LimaDua?</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Workshop Modal -->
    <div class="modal fade" id="deleteWorkshopModal" tabindex="-1" aria-labelledby="deleteWorkshopModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteWorkshopModalLabel">Delete Workshop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this workshop?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
