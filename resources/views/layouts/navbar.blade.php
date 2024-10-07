<!-- resources/views/navbar.blade.php -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar"
    style="background-color: rgb({{ $color4 }}); font-family: Inria Sans, sans-serif;">
    <div class="container-fluid">
        <a href="/">
            <img src="{{ asset('images/LOGO.png') }}" alt="Logo" class="w-auto" style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('workshops') ? 'active' : '' }}" href="/workshops">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="/projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}" href="/aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('signin') ? 'active' : '' }}" href="/signin">Get Started</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = 'rgb({{ $color1 }}, 0.6)';
        } else {
            navbar.style.backgroundColor = 'rgb({{ $color4 }})';
        }
    });

    document.addEventListener('mousemove', function(e) {
        const navbar = document.getElementById('navbar');
        const x = e.clientX;
        const y = e.clientY;
        if (window.scrollY > 50) {
            navbar.style.background =
                `radial-gradient(circle at ${x}px ${y}px, rgba(237, 50, 55, 0.8) 10px, rgba(238, 63, 72, 0.8) 20px, rgba({{ $color1 }}, 0.8) 40px)`;
        } else {
            navbar.style.background = 'rgb({{ $color4 }})';
        }
    });
</script>

<style>
    .navbar {
        transition: background-color 0.3s ease, background 0.3s ease;
    }

    .nav-link {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-link:hover {
        color: rgba(255, 255, 255, 0.9);
        /* Lighten color on hover */
        transform: scale(1.05);
        /* Slightly scale up the link */
    }

    .nav-link.active {
        font-weight: bold;
        /* Remove border styling if preferred */
    }

    a {
        text-decoration: none;
        /* Remove default underline */
        position: relative;
        /* Position for the pseudo-element */
        color: rgb({{ $color2 }});
        /* Ensure link color matches your theme */
    }

    a::after {
        content: '';
        /* Create an empty pseudo-element */
        position: absolute;
        left: 0;
        bottom: -2px;
        /* Adjust to position the underline */
        width: 100%;
        height: 2px;
        /* Thickness of the underline */
        background-color: rgb({{ $color1 }});
        /* Color of the underline */
        transform: scaleX(0);
        /* Start with no scale (invisible) */
        transition: transform 0.3s ease;
        /* Animation effect */
    }

    a:hover::after {
        transform: scaleX(1);
        /* Scale to full width on hover */
    }
</style>
