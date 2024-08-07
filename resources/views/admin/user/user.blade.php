@extends('layouts.admin.appadmin')

{{-- Color library --}}
@php
    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6
@endphp

@section('title', 'User-Admin')

@section('content')
    <section class="py-3 py-md-3 py-lg-2 mt-2 mt-md-3 mt-lg-2 ms-2 ms-md-2 ms-lg-2">
        <h1>Welcome to Admin User</h1>
        <p>This is the main content area for the dashboard.</p>
    </section>
    <section>
        <div class="container table-responsive py-5">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">is Admin?</th>
                        <th scope="col">Actions</th> <!-- New column for actions -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>123@gmail.com</td>
                        <td>halo123</td>
                        <td>Yes</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>123@gmail.com</td>
                        <td>halo123</td>
                        <td>No</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- Repeat for other rows -->
                </tbody>
            </table>

            <!-- CRUD Button at the bottom right -->
            <div class="text-end mt-3">
                <a href="#" class="btn btn-primary">Add New User</a>
            </div>
        </div>
    </section>
@endsection
