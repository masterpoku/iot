<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title }} | IOT UYP</title>

    <meta name="description" content="" />

    @yield('top')

    <!-- Summernote -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('template/templateAdmin') }}/assets/img/sa.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/air-datepicker/dist/css/datepicker.css">

    <!-- Helpers -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('template/templateAdmin') }}/assets/js/config.js"></script>


</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <!-- <img src="{{ asset('template/templateAdmin') }}/assets/img/sa.png" width="50" alt="IOT UYP"> -->
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: capitalize">Manage Iot Uyp</span> </a>

                    <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages</span>
                    </li>
                    <li class="menu-item {{ request()->is('users*') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="manage">Kelola User</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('monitoring*') ? 'active' : '' }}">
                        <a href="{{ route('monitoring.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map"></i>
                            <div data-i18n="Monitoring">Monitoring</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('control*') ? 'active' : '' }}">
                        <a href="{{ route('control.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-slider"></i>
                            <div data-i18n="print">Control</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('device*') ? 'active' : '' }}">
                        <a href="{{ route('device.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-devices"></i>
                            <div data-i18n="Device">Device</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('print*') ? 'active' : '' }}">
                        <a href="{{ route('print.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-printer"></i>
                            <div data-i18n="print">Cetak data</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('role*') ? 'active' : '' }}">
                        <a href="{{ route('role.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-plus"></i>
                            <div data-i18n="print">Role</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('permission*') ? 'active' : '' }}">
                        <a href="" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-lock"></i>
                            <div data-i18n="print">Permission</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->

                        <!-- /Search -->
                        <marquee behavior="scroll" direction="left" scrollamount="3" scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()">
                            Hubungi kami untuk jasa layanan IOT. <a href="https://wa.me/6281554850403" target="_blank">Klik disini</a> untuk menghubungi
                            kami.
                        </marquee>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            {{-- <li class="nav-item navbar-dropdown dropdown-user dropdown">
                         
                           
                    </li> --}}
                        </ul>

                        <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('dashboard')
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-xxl">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with by
                                <a href="#" target="_blank" class="footer-link fw-bolder">CloudSide
                                    Official</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('template/templateAdmin') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('template/templateAdmin') }}/assets/js/dashboards-analytics.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/js/ui-toasts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Datepicker --}}
    {{-- <script src="{{ asset('air-datepicker') }}/datepicker.js"></script>
    <script src="/air-datepicker/air-datepicker.js"></script> --}}
    <script src="{{ asset('template/templateAdmin') }}/air-datepicker\dist\js\datepicker.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/air-datepicker\dist\js\i18n\datepicker.id.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/js/search.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 170,
                minHeight: null,
                maxHeight: null,
                focus: true,
            });
        });
    </script>
    @yield('footer')
</body>


</html>