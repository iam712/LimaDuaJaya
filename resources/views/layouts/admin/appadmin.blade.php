<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lima Dua Jaya - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <style>
        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px; /* Adjust width as needed */
            background-color: rgb({{ $color4 }});
            transition: background-color 0.3s ease, background 0.3s ease;
            overflow-y: auto;
            z-index: 1000;
            padding: 1rem;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
        }

        .nav-item {
            margin-bottom: 1rem;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link:hover {
            color: rgba(255, 255, 255, 0.9); /* Lighten color on hover */
            transform: scale(1.05); /* Slightly scale up the link */
        }

        .nav-link.active {
            font-weight: bold;
        }

        .content {
            margin-left: 250px; /* Same as sidebar width */
            padding: 1rem;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    @include('layouts.admin.sidebar')

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Include Particle.js library -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
