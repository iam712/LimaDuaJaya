<div class="sidebar"
    style="position: fixed; top: 0; left: 0; height: 100%; width: 250px; background-color: rgb({{ $color3 }}); font-family: Inria Sans, sans-serif; transition: transform 0.3s ease, background-color 0.3s ease, background 0.3s ease; overflow-y: auto; z-index: 1000; display: flex; flex-direction: column; justify-content: space-between; padding: 1rem;"
    id="sidebar">
    <div class="sidebar-content" style="flex: 1;">
        <ul class="sidebar-nav" style="list-style: none; padding: 0;">

            <!-- Language Switcher -->
            <li class="nav-item mb-2 mb-md-2 mb-lg-2 mt-5 mt-md-2 mt-lg-2">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ app()->getLocale() == 'en' ? '🇺🇸 EN' : '🇮🇩 ID' }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
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
                </div>
            </li>

            <!-- Navigation Links -->
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="/admin">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->routeIs('workshops.index') ? 'active' : '' }}"
                    href="{{ route('workshops.index') }}">
                    <i class="fas fa-cogs"></i> Manage Workshop
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->routeIs('projects.index') ? 'active' : '' }}"
                    href="{{ route('projects.index') }}">
                    <i class="fas fa-project-diagram"></i> Manage Project
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}"
                    href="{{ route('admin.users.index') }}">
                    <i class="fas fa-users"></i> Manage User
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('admin/reviews') ? 'active' : '' }}" href="/admin/reviews">
                    <i class="fas fa-star"></i> Manage Review
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->routeIs('portfolio_projects.index') ? 'active' : '' }}"
                    href="{{ route('portfolio_projects.index') }}">
                    <i class="fa-regular fa-folder-open"></i> Manage Project Portfolio
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('portfolios.index') ? 'active' : '' }}"
                    href="{{ route('portfolios.index') }}">
                    <i class="fa-solid fa-folder-open"></i> Manage Workshop Portfolio
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                    <i class="fas fa-home"></i> Main Website
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <div class=" bg-light sidebar-brand position-absolute bottom-0 start-0 p-3">

        <img src="{{ asset('images/LOGO.png') }}" alt="Logo" class="w-100 mw-100">

    </div>
</div>

<!-- toggle for responsive sidebar -->
<button id="sidebarToggle"
    style="position: fixed; top: 10px; left: 10px; z-index: 1100; background-color: rgba({{ $color4 }}, 1); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
</button>


<style>
    .nav-link {
        color: rgb({{ $color1 }});
        /* Text color */
        text-decoration: none;
        /* Remove default underline */
        display: block;
        /* Make link a block element */
        padding: 0.5rem 1rem;
        /* Add padding */
        border-radius: 0.25rem;
        /* Rounded corners */
        position: relative;
        /* Position for the pseudo-element */
        overflow: hidden;
        /* Prevent overflow */
    }

    .nav-link::after {
        content: '';
        /* Create an empty pseudo-element */
        position: absolute;
        /* Position it absolutely */
        left: 0;
        /* Align to the left */
        top: 0;
        /* Align to the top */
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        background-color: rgba({{ $color4 }}, 0.3);
        /* Background color with transparency */
        transform: scale(0);
        /* Start with no scale (invisible) */
        transition: transform 0.3s ease;
        /* Animation effect */
        z-index: -1;
        /* Place behind the text */
        border-radius: 0.75rem;
        /* Match border-radius */
    }

    .nav-link:hover {
        color: rgb({{ $color1 }});
        /* Change text color on hover */
    }

    .nav-link:hover::after {
        transform: scale(1);
        /* Scale to full size on hover */
    }

    .nav-link.active {
        font-weight: bold;
        /* Highlight active link */
    }


    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-250px);
        }

        .content {
            margin-left: 0;
            padding: 1rem;
        }

        #sidebarToggle {
            background-color: transparent;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        #sidebarToggle .navbar-toggler-icon {
            width: 24px;
            height: 24px;
        }
    }

    @media (min-width: 769px) {
        .sidebar {
            transform: translateX(0);
        }

        .content {
            margin-left: 250px;
        }

        #sidebarToggle {
            display: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('sidebarToggle');

        toggleButton.addEventListener('click', function() {
            if (sidebar.style.transform === 'translateX(0px)') {
                sidebar.style.transform = 'translateX(-250px)';
            } else {
                sidebar.style.transform = 'translateX(0px)';
            }
        });
    });
</script>
