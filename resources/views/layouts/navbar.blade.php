<!-- resources/views/navbar.blade.php -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar"
    style="background-color: rgb({{ $color4 }});">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/LOGO.png') }}" alt="Logo" style="max-height: 50px; width: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/"
                        style="font-family: 'LibreBaskerville', serif;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('workshop') ? 'active' : '' }}" href="/workshop"
                        style="font-family: 'LibreBaskerville', serif; font-style: semi-bold;">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('project') ? 'active' : '' }}" href="/project"
                        style="font-family: 'LibreBaskerville', serif;">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}" href="/aboutus"
                        style="font-family: 'LibreBaskerville', serif;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="#"
                        style="font-family: 'LibreBaskerville', serif;">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"
                        style="font-family: 'LibreBaskerville', serif;">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = 'rgb({{ $color4 }}, 0.6)';
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
                `radial-gradient(circle at ${x}px ${y}px, rgba(237, 50, 55, 0.8) 10px, rgba(255, 222, 223, 0.8) 20px, rgba({{ $color4 }}, 0.8) 40px)`;
        } else {
            navbar.style.background = 'rgb({{ $color4 }})';
        }
    });
</script>

<style>
    .navbar {
        transition: background-color 0.3s ease, background 0.3s ease;
    }

    .nav-link.active {
        font-weight: bold;
        border: 3px;
        border-style: outset;
        border-radius: 10px;
    }
</style>
