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

@section('title', 'User-Admin')

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
            background-color: rgba({{ $color6 }}, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            color: rgba({{ $color3 }}, 1);
        }

        th {
            background-color: rgba({{ $color7 }}, 1);
        }

        td {
            background-color: rgba({{ $color5 }}, 0.5);
        }

        .btn-warning {
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
        }
    </style>

    <div class="animated-bg">
        <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2">
            <h1 class="display-4" style="color: rgba({{ $color5 }}, 1);">Welcome to Admin User</h1>
            <p class="lead" style="color: rgba({{ $color3 }}, 1);">Hello, <span class="font-weight-bold"
                    style="color: rgba({{ $color2 }}, 1);">user123</span>!</p>
        </section>

        <section>
            <div class="container table-responsive py-5">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">is Admin?</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>123@gmail.com</td>
                            <td>halo123</td>
                            <td>Yes</td>
                            <td>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal">Edit</button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">Delete</button>
                            </td>
                        </tr>
                        <!-- Repeat for other rows -->
                    </tbody>
                </table>

                <div class="text-end mt-3">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add New User</button>
                </div>
            </div>
        </section>
    </div>

    <!-- Add New User Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="userEmail">
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="userPassword">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="isAdmin">
                            <label class="form-check-label" for="isAdmin">Is Admin?</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save User</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editUserEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editUserEmail" value="123@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="editUserPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="editUserPassword" value="halo123">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="editIsAdmin" checked>
                            <label class="form-check-label" for="editIsAdmin">Is Admin?</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete User</button>
                </div>
            </div>
        </div>
    </div>
@endsection
