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
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="/">{{ __('messages.navhome') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('workshops') ? 'active' : '' }}" href="/workshops">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}"
                        href="/projects">{{ __('messages.navproject') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}"
                        href="/aboutus">{{ __('messages.navaboutus') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('signin') ? 'active' : '' }}"
                        href="/signin">{{ __('messages.navsignin') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <!-- Current language will be shown as the active flag -->
                        {{ app()->getLocale() == 'en' ? '🇺🇸 EN' : '🇮🇩 ID' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- Emoji for US flag 🇺🇸 and Indonesian flag 🇮🇩 -->
                        <li>
                            <a class="dropdown-item" href="{{ url('lang/en') }}">
                                🇺🇸 EN
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('lang/id') }}">
                                🇮🇩 ID
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = 'rgba({{ $color1 }}, 0.6)';
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

    .nav-link,
    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 5px;
    }


    .nav-link:hover {
        color: rgba(255, 255, 255, 0.9);
        transform: scale(1.05);
    }

    .nav-link.active {
        font-weight: bold;
    }

    a {
        text-decoration: none;
        position: relative;
        color: rgb({{ $color2 }});
    }

    a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        width: 100%;
        height: 2px;
        background-color: rgb({{ $color1 }});
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    a:hover::after {
        transform: scaleX(1);
    }
</style>
