<div class="header @@classList">
    <!-- navbar -->
    <nav class="navbar-classic navbar navbar-expand-lg">
        <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <input type="search" class="form-control" placeholder="Search" />
            </form>
        </div>
        <!--Navbar nav -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
            <li class="dropdown stopevent">
                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted"
                    href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
                    <div>
                        <div class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
                            <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                            <a href="#" class="text-muted">
                                <span>
                                    <i class="me-1 icon-xxs" data-feather="settings"></i>
                                </span>
                            </a>
                        </div>
                        <!-- List group -->
                        <ul class="list-group list-group-flush notification-list-scroll">
                            <!-- List group item -->
                            
                        </ul>
                        <div class="border-top px-3 py-2 text-center">
                            <a href="#" class="text-inherit fw-semi-bold">
                                View all Notifications
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            
            <!-- Filtration Icon -->
            <li class="ms-2">
                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#">
                    <i class="icon-xs" data-feather="filter"></i>
                </a>
            </li>

            <!-- List -->
            <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="{{ Avatar::create(Auth::user()->email)->toBase64() }}"
                            class="rounded-circle" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <div class="px-4 pb-0 pt-2">
                        <div class="lh-1 ">
                            <h5 class="mb-1">{{ explode('@', Auth::user()->email)[0] }} </h5>
                            <a href="#" class="text-inherit fs-6">Role:{{ ucfirst(Auth::user()->role) }}</a>
                        </div>
                        <div class="dropdown-divider mt-3 mb-2"></div>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="activity"></i>Activity Log
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>Account Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>

                </div>
            </li>
        </ul>
    </nav>
</div>
