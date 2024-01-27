<div class="sidebar border-right bg-gradient-primary col-md-3 col-lg-2 p-0">
    <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="sidebarMenuLabel">e-Ticket Pangandaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link align-items-center gap-2 {{ Request::is('dashboard-user') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard-user">
                        <i class="bi bi-house"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link align-items-center gap-2 {{ Request::is('dashboard-user/data-order') ? 'active' : '' }}"
                        href="/dashboard-user/data-order">
                        <i class="bi bi-file-earmark"></i>
                        Data Order
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item"></li>
                <a class="nav-link align-items-center gap-2 {{ Request::is('dashboard-user/update-profile*') ? 'active' : '' }}"
                    href="/dashboard-user/update-profile">
                    <i class="bi bi-person-badge-fill"></i>
                    Update Profile
                </a>
                </li>

                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item nav-link gap-2"><i
                                class="bi bi-box-arrow-right"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</div>
