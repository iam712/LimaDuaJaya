<!-- resources/views/admin/sidebar.blade.php -->
<div class="sidebar" id="sidebar">
    <a class="sidebar-brand" href="/admin">
        <img src="{{ asset('images/LOGO.png') }}" alt="Logo" style="max-width: 200px; width: auto;">
    </a>
    <ul class="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="/admin"
                style="font-family: 'LibreBaskerville', serif;">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin-workshop') ? 'active' : '' }}" href="/admin-workshop"
                style="font-family: 'LibreBaskerville', serif;">Manage Workshop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin-project') ? 'active' : '' }}" href="/admin-project"
                style="font-family: 'LibreBaskerville', serif;">Manage Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin-user') ? 'active' : '' }}" href="/admin-user"
                style="font-family: 'LibreBaskerville', serif;">Manage User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin-review') ? 'active' : '' }}" href="/admin-review"
                style="font-family: 'LibreBaskerville', serif;">Manage Review</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/"
                style="font-family: 'LibreBaskerville', serif;">Main Website</a>
        </li>
    </ul>
</div>
