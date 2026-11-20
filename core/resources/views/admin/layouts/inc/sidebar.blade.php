<aside class="app-menubar-tabs" id="appMenubar">
    <div class="app-navbar-brand">
        <a class="navbar-brand-logo py-2" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/logo.png') }}" class="app-logo" alt="Mahobiya Films" onerror="this.src='{{ asset('admin-theme/assets/images/logo.svg') }}'">
        </a>
    </div>

    <div class="app-navbar-tabs" data-simplebar>
        <ul class="nav" id="appMenubarTabs">
            <!-- Dashboard Tab Icon -->
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                <a class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" data-bs-toggle="tab" href="#dashboardTab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="#fff" stroke-width="2" />
                        <path d="M12 15V18" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>

            <!-- Components Tab Icon (Tables & Forms requested by user) -->
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="UI Components">
                <a class="menu-link {{ request()->is('admin/components*') ? 'active' : '' }}" data-bs-toggle="tab" href="#componentsTab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="1.5" stroke="#fff" stroke-width="2" />
                        <rect x="14" y="3" width="7" height="7" rx="1.5" stroke="#fff" stroke-width="2" />
                        <rect x="14" y="14" width="7" height="7" rx="1.5" stroke="#fff" stroke-width="2" />
                        <rect x="3" y="14" width="7" height="7" rx="1.5" stroke="#fff" stroke-width="2" />
                    </svg>
                </a>
            </li>

            <!-- Website Content Tab Icon -->
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Film Production">
                <a class="menu-link" data-bs-toggle="tab" href="#filmProductionTab">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20V18H4V6Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4 10H20" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8 6V10" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        <path d="M16 6V10" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>

    <div class="app-tab-content">
        <div class="app-content-inner">
            <div class="tab-content">
                <!-- Dashboard Submenu -->
                <div class="tab-pane fade {{ request()->routeIs('admin.dashboard') || (!request()->is('admin/components*')) ? 'show active' : '' }}" id="dashboardTab">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">Admin Overview</li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                                    <i class="fi fi-rr-dashboard me-2"></i> Dashboard
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('home') }}" target="_blank">
                                    <i class="fi fi-rr-globe me-2"></i> View Live Site
                                </a>
                            </li>

                            <li class="menu-heading mt-3">Account & Security</li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('auth.passwordChange') ? 'active' : '' }}" href="{{ route('auth.passwordChange') }}">
                                    <i class="fi fi-rr-key me-2"></i> Change Password
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link text-danger" href="{{ route('auth.logout') }}">
                                    <i class="fi fi-rr-sign-out-alt me-2"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Components Submenu (The exact tables & forms requested!) -->
                <div class="tab-pane fade {{ request()->is('admin/components*') ? 'show active' : '' }}" id="componentsTab">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">UI Boilerplate Elements</li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.components.tables') ? 'active' : '' }}" href="{{ route('admin.components.tables') }}">
                                    <i class="fi fi-rr-table me-2"></i> DataTables & Tables
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.components.forms') ? 'active' : '' }}" href="{{ route('admin.components.forms') }}">
                                    <i class="fi fi-rr-form me-2"></i> Form Elements & Layouts
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link {{ request()->routeIs('admin.components.cards') ? 'active' : '' }}" href="{{ route('admin.components.cards') }}">
                                    <i class="fi fi-rr-box me-2"></i> Cards & Widgets
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Film Production Content Submenu -->
                <div class="tab-pane fade" id="filmProductionTab">
                    <nav class="app-navbar" data-simplebar>
                        <ul class="side-menubar">
                            <li class="menu-heading">Mahobiya Films CMS</li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('admin.components.tables') }}">
                                    <i class="fi fi-rr-film me-2"></i> Films & Projects
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('admin.components.tables') }}">
                                    <i class="fi fi-rr-users-alt me-2"></i> Cast & Crew / Team
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('admin.components.tables') }}">
                                    <i class="fi fi-rr-picture me-2"></i> Photo Gallery
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('admin.components.tables') }}">
                                    <i class="fi fi-rr-video-camera-alt me-2"></i> Trailers & Videos
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('admin.components.tables') }}">
                                    <i class="fi fi-rr-envelope me-2"></i> Contact Inquiries
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</aside>
