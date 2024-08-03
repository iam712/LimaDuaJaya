<div class="container-fluid p-0 d-flex h-100">
    <div id="bdSidebar"
        class="d-flex flex-column
                flex-shrink-0
                p-3 bg-success
                text-white offcanvas-md offcanvas-start">
        <a href="#" class="navbar-brand">
        </a>
        <hr>
        <ul class="mynav nav nav-pills flex-column mb-auto">
            <li class="nav-item mb-1">
                <a href="#">
                    <i class="fa-regular fa-user"></i>
                    Profile
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="#">
                    <i class="fa-regular fa-bookmark"></i>
                    Saved Articles
                    <span class="notification-badge">5</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#">
                    <i class="fa-regular fa-newspaper"></i>
                    Articles
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#">
                    <i class="fa-solid fa-archway"></i>
                    Institutions
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Organizations
                </a>
            </li>

            <li class="sidebar-item  nav-item mb-1">
                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#settings"
                    aria-expanded="false" aria-controls="settings">
                    <i class="fas fa-cog pe-2"></i>
                    <span class="topic">Settings </span>
                </a>
                <ul id="settings" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-sign-in-alt pe-2"></i>
                            <span class="topic"> Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-user-plus pe-2"></i>
                            <span class="topic">Register</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-sign-out-alt pe-2"></i>
                            <span class="topic">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
        <div class="d-flex">

            <i class="fa-solid fa-book  me-2"></i>
            <span>
                <h6 class="mt-1 mb-0">
                    Geeks for Geeks Learning Portal
                </h6>
            </span>
        </div>
    </div>

    <div class="bg-light flex-fill">
        <div class="p-2 d-md-none d-flex text-white bg-success">
            <a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
                <i class="fa-solid fa-bars"></i>
            </a>
            <span class="ms-3">GFG Portal</span>
        </div>
        <div class="p-4">
            <nav style="--bs-breadcrumb-divider:'>';font-size:14px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa-solid fa-house"></i>
                    </li>
                    <li class="breadcrumb-item">Learning Content</li>
                    <li class="breadcrumb-item">Next Page</li>
                </ol>
            </nav>

            <hr>
            <div class="row">
                <div class="col">
                    <p>Page content goes here</p>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .gfg {
        height: 50px;
        width: 50px;

    }

    .mynav {
        color: #fff;
    }

    .mynav li a {
        color: #fff;
        text-decoration: none;
        width: 100%;
        display: block;
        border-radius: 5px;
        padding: 8px 5px;
    }

    .mynav li a.active {
        background: rgba(255, 255, 255, 0.2);
    }

    .mynav li a:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .mynav li a i {
        width: 25px;
        text-align: center;
    }

    .notification-badge {
        background-color: rgba(255, 255, 255, 0.7);
        float: right;
        color: #222;
        font-size: 14px;
        padding: 0px 8px;
        border-radius: 2px;
    }
</style>
