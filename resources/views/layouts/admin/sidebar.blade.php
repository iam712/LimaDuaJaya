<div class="sidebar"
    style="position: fixed; top: 0; left: 0; height: 100%; width: 250px; background-color: rgb({{ $color3 }}); font-family: 'LibreBaskerville', serif; transition: transform 0.3s ease, background-color 0.3s ease, background 0.3s ease; overflow-y: auto; z-index: 1000; display: flex; flex-direction: column; justify-content: space-between; padding: 1rem;"
    id="sidebar">
    <div class="sidebar-content" style="flex: 1;">
        <ul class="sidebar-nav" style="list-style: none; padding: 0;">
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="/admin">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('admin-workshop') ? 'active' : '' }}" href="/admin-workshop">
                    <i class="fas fa-cogs"></i> Manage Workshop
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->routeIs('projects.index') ? 'active' : '' }}" href="{{ route('projects.index') }}">
                    <i class="fas fa-project-diagram"></i> Manage Project
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <!-- Correctly linked Manage User -->
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
                <a class="nav-link {{ request()->routeIs('portfolio_projects.index') ? 'active' : '' }}" href="{{ route('portfolio_projects.index') }}">
                    <i class="fas fa-star"></i> Manage Project Portfolio
                </a>
            </li>
            <li class="nav-item mb-2 mb-md-2 mb-lg-2">
                <a class="nav-link {{ request()->is('admin-portoworkshop') ? 'active' : '' }}"
                    href="/admin-portoworkshop">
                    <i class="fas fa-star"></i> Manage Workshop Portfolio
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
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-brand position-absolute bottom-0 start-0 p-3">
        <a href="/admin">
            <img src="{{ asset('images/LOGO.png') }}" alt="Logo" class="w-100 mw-100">
        </a>
    </div>
</div>

<!-- toggle for responsive sidebar -->
<button id="sidebarToggle"
    style="position: fixed; top: 10px; left: 10px; z-index: 1100; background-color: rgba({{ $color4 }}, 1); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
</button>


<style>
    .nav-link {
        color: rgb({{ $color6 }});
        text-decoration: none;
        display: block;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-link:hover {
        color: rgb({{ $color6 }});
        transform: scale(1.05);
    }

    .nav-link.active {
        font-weight: bold;
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
