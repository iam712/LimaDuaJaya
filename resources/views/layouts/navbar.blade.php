<!-- resources/views/navbar.blade.php -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar" style="background-color: rgb({{ $color0 }});">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
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
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutus">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = 'rgba({{ $color2 }}, 0.8)';
        } else {
            navbar.style.backgroundColor = 'rgb({{ $color0 }})';
        }
    });

    document.addEventListener('mousemove', function (e) {
        const navbar = document.getElementById('navbar');
        const x = e.clientX;
        const y = e.clientY;
        if (window.scrollY > 50) {
            navbar.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(255, 255, 255, 0.8) 10px, rgba(255, 242, 215, 0.8) 20px, rgba({{ $color2 }}, 0.8) 40px)`;
        } else {
            navbar.style.background = 'rgb({{ $color0 }})';
        }
    });
</script>

<style>
    .navbar {
        transition: background-color 0.3s ease, background 0.3s ease;
    }
</style>
