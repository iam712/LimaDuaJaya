<div class="sidebar"
    style="position: fixed; top: 0; left: 0; height: 100%; width: 250px; background-color: rgb({{ $color4 }}); transition: transform 0.3s ease, background-color 0.3s ease, background 0.3s ease; overflow-y: auto; z-index: 1000; display: flex; flex-direction: column; padding: 1rem;"
    id="sidebar">
    <div class="sidebar-content" style="flex: 1">
        <ul class="sidebar-nav" style="list-style: none; padding: 0;">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="/admin"
                    style="font-family: 'LibreBaskerville', serif;">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin-workshop') ? 'active' : '' }}" href="/admin-workshop"
                    style="font-family: 'LibreBaskerville', serif;">
                    <i class="fas fa-cogs"></i> Manage Workshop
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin-project') ? 'active' : '' }}" href="/admin-project"
                    style="font-family: 'LibreBaskerville', serif;">
                    <i class="fas fa-project-diagram"></i> Manage Project
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin-user') ? 'active' : '' }}" href="/admin-user"
                    style="font-family: 'LibreBaskerville', serif;">
                    <i class="fas fa-users"></i> Manage User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/reviews') ? 'active' : '' }}" href="/admin/reviews"
                    style="font-family: 'LibreBaskerville', serif;">
                    <i class="fas fa-star"></i> Manage Review
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/"
                    style="font-family: 'LibreBaskerville', serif;">
                    <i class="fas fa-home"></i> Main Website
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar-brand" style="margin-top: auto; display: flex; justify-content: center; padding: 1rem;">
        <a href="/admin">
            <img src="{{ asset('images/LOGO.png') }}" alt="Logo" style="max-width: 200px; width: auto;">
        </a>
    </div>
</div>

<!-- toggle for responsive sidebar -->
<button id="sidebarToggle"
    style="position: fixed; top: 10px; left: 10px; z-index: 1100; background-color: rgba({{ $color4 }}, 1); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
</button>


<style>
    .nav-item {
        margin-bottom: 1rem;
    }

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
            /* top: 50px;
            left: 50px;
            position: fixed;
            display: block; */
        }

        #sidebarToggle .navbar-toggler-icon {
            width: 24px;
            height: 24px;
            /* background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28155, 155, 155, 1%29' stroke-width='2' linecap='round' linejoin='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); */
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
                //toggleButton.innerText = 'Open Sidebar';
            } else {
                sidebar.style.transform = 'translateX(0px)';
                //toggleButton.innerText = 'Close Sidebar';
            }
        });
    });
</script>
