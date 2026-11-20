<header class="app-header">
    <div class="app-header-inner">
        <button class="app-toggler" type="button" aria-label="app toggler">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.66699 12.6668L3.66699 8.00016L7.66699 3.3335" stroke="#fff" stroke-width="1.75"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.5" d="M12.667 12.6668L8.66699 8.00016L12.667 3.3335" stroke="#fff"
                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <div class="logo mt-3 mx-4">
            <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" class="app-logo" alt="Mahobiya Films" onerror="this.style.display='none'">
                <span class="fw-bold text-white fs-6 d-none d-sm-inline">Mahobiya Films</span>
            </a>
        </div>

        <div class="app-header-start d-none d-md-flex">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-outline-light d-flex align-items-center gap-1 rounded-pill px-3">
                <i class="fi fi-rr-globe"></i> Visit Website
            </a>
        </div>

        <div class="app-header-end">
            <div class="dropdown text-end ms-sm-3 ms-2 ms-lg-4">
                <a href="#" class="d-flex align-items-center py-2" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="text-end me-2 d-none d-lg-inline-block">
                        <div class="fw-bold text-white">{{ session('user_full_name', 'Admin') }}</div>
                        <small class="text-white-50 d-block lh-sm">
                            <i class="fi fi-rr-angle-down text-3xs me-1"></i>
                            {{ session('user_role_name', 'Administrator') }}
                        </small>
                    </div>

                    <div class="avatar avatar-sm rounded-circle avatar-status-success">
                        <img src="{{ asset('admin-theme/assets/images/avatar/user.avif') }}" alt="User Avatar"
                            onerror="this.src='{{ asset('images/logo.png') }}'">
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end w-225px mt-1 shadow-sm border-0">
                    <li class="d-flex align-items-center p-2">
                        <div class="avatar avatar-sm rounded-circle avatar-status-success">
                            <img src="{{ asset('admin-theme/assets/images/avatar/user.avif') }}" alt="User Avatar"
                                onerror="this.src='{{ asset('images/logo.png') }}'">
                        </div>
                        <div class="ms-2" style="min-width: 0">
                            <div class="fw-bold text-dark">{{ session('user_full_name', 'Admin') }}</div>
                            <small class="text-body d-block lh-sm text-truncate">{{ session('user_email', 'admin@mahobiyafilms.com') }}</small>
                        </div>
                    </li>

                    <li><div class="dropdown-divider my-1"></div></li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('home') }}" target="_blank">
                            <i class="fi fi-rr-globe scale-1x"></i> Public Site
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('auth.passwordChange') }}">
                            <i class="fi fi-rr-settings scale-1x"></i> Change Password
                        </a>
                    </li>

                    <li><div class="dropdown-divider my-1"></div></li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 text-danger" href="{{ route('auth.logout') }}">
                            <i class="fi fi-sr-exit scale-1x"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
