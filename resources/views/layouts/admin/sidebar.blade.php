{{-- Color library --}}
@php

    $color1 = '255, 255, 255'; // #ffffff
    $color2 = '0, 0, 0'; // #000000
    $color3 = '125, 20, 19'; //#7d141d
    $color4 = '238, 63, 72'; //#EE3F48
    $color5 = '255, 222, 223'; //#ffdedf
    $color6 = '246, 232, 214'; //#F6E8D6

    // Command to use rgb color
    // style="color: rgb({{ $color0 }});"
    // style="background-color: rgb({{ $color1 }});"
    // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));"

@endphp

<div class="sidebar"
    style="position: fixed; top: 0; left: 0; height: 100%;
        width: 250px; /* Adjust width as needed */
        background-color: rgb({{ $color4 }});
        transition: background-color 0.3s ease, background 0.3s ease;
        overflow-y: auto;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        padding: 1rem; "
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
