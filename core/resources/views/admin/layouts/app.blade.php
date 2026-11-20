<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <script>document.documentElement.setAttribute('data-bs-theme','light');</script>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- MOBILE RESPONSIVE ENGINE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400..700&display=swap" rel="stylesheet"> --}}

    <!-- ICONS -->
    <link rel="icon" href="{{ asset('admin-theme/assets/images/favicon.png') }}">

    <!-- BOOTSTRAP (REQUIRED FOR RESPONSIVENESS) -->
    {{-- <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/bootstrap/css/bootstrap.min.css') }}"> --}}

    <!-- THEME LIBRARIES -->
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/flaticon/css/all/all-single.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/datatables/datatables.min.css') }}">

    <!-- MAIN THEME STYLE -->
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/css/styles.css') }}">
    <style>
        .app-logo {
            height: 52px;
            /* perfect for navbar */
            width: auto;
            /* keep aspect ratio */
            max-width: 160px;
            /* prevents overflow */
            object-fit: contain;
            /* border-left: 2px solid #f1f2fc;
            padding-left: 8px; */
        }

        /* ===== Global Professional Breadcrumb Upgrade ===== */

        /* .app-page-head {
            background: #f1f4f8;
            border: 1px solid #dde3ec;
            padding: 10px 18px;
            border-radius: 10px;
            margin-bottom: 18px;
        } */

        /* .app-page-head .breadcrumb {
            background: transparent;
            padding: 0;
        } */

        /* .app-page-head .breadcrumb-item a {
            color: #475569 !important;
            font-weight: 600;
            text-decoration: none;
        } */

        /* .app-page-head .breadcrumb-item.active {
            color: #1e293b;
            font-weight: 700;
        } */

        /* arrow separator instead of / */
        .app-page-head .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #94a3b8;
            padding: 0 8px;
        }
    </style>
    @yield('styles')
</head>

<body class="app">

    <div id="app" class="page-layout">

        <!-- HEADER -->
        @include('admin.layouts.inc.header')

        <!-- SIDEBAR -->
        @include('admin.layouts.inc.sidebar')

    </div>
    <!-- PAGE CONTENT -->
    <main class="app-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>


    <!-- CORE JS -->
    <script src="{{ asset('admin-theme/assets/libs/jquery/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('admin-theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/libs/simplebar/simplebar.min.js') }}"></script> --}}

    <!-- THEME JS -->
    <script src="{{ asset('admin-theme/assets/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/libs/sortable/Sortable.min.js') }}"></script>
    {{-- <script src="{{ asset('admin-theme/assets/libs/chartjs/chart.js') }}"></script> --}}
    <script src="{{ asset('admin-theme/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    {{-- <script src="{{ asset('admin-theme/assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('admin-theme/assets/libs/datatables/datatables.min.js') }}"></script>

    <script src="{{ asset('admin-theme/assets/js/plugins/datatable.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/js/plugins/todolist.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/js/dashboard/dashboard.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/js/appSettings.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/js/main.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/js/sweetalert2.js') }}"></script>

    <!-- MOBILE SIDEBAR FIX -->
    <script>
        document.querySelector('.app-toggler')?.addEventListener('click', function() {
            document.body.classList.toggle('sidebar-open');
        });
    </script>

    <script>
        // Activate the correct sidebar tab based on current route
        document.addEventListener('DOMContentLoaded', function() {
            @php
                $isComponentRoute = request()->is('admin/components*');
            @endphp

            @if ($isComponentRoute)
                const compLink = document.querySelector('a[href="#componentsTab"]');
                const compPane = document.getElementById('componentsTab');
                if (compLink && compPane) {
                    document.querySelectorAll('#appMenubarTabs .menu-link').forEach(link => link.classList.remove('active'));
                    document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
                    compLink.classList.add('active');
                    compPane.classList.add('show', 'active');
                }
            @endif
        });
    </script>

    @yield('scripts')

</body>

</html>
