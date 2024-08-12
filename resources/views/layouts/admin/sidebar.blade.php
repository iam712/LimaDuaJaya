<div class="sidebar"
    style="position: fixed; top: 0; left: -250px; height: 100%;
        width: 250px; /* Adjust width as needed */
        background-color: rgb({{ $color4 }});
        transition: left 0.3s ease, background-color 0.3s ease, background 0.3s ease;
        overflow-y: auto;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        padding: 1rem;"
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
                <a class="nav-link {{ request()->is('admin-review') ? 'active' : '' }}" href="/admin-review"
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

<!-- Button to toggle sidebar -->
<button id="sidebarToggle"
    style="position: fixed; top: 10px; left: 10px; z-index: 1100; background-color: rgba({{ $color4 }}, 1); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    Open
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
        /* Lighten color on hover */
        transform: scale(1.05);
        /* Slightly scale up the link */
    }

    .nav-link.active {
        font-weight: bold;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('sidebarToggle');

        toggleButton.addEventListener('click', function() {
            if (sidebar.style.left === '0px') {
                sidebar.style.left = '-250px';
                toggleButton.innerText = 'Open';
            } else {
                sidebar.style.left = '0px';
                toggleButton.innerText = 'Close';
            }
        });
    });
</script>
