<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard-CMS</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dashboards/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="dashboards/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="dashboards/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dashboards/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dashboards/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="dashboards/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="dashboards/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="dashboards/assets/vendor/js/helpers.js"></script>


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="dashboards/assets/js/config.js"></script>
    <style>
        #dashboard{
            text-align: center;
            margin-left: 30px;
            position: relative;
            top: 5px;
            font-weight: bolder;
        }
    </style>

    @yield('css')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">

                        <span class="app-brand-text demo menu-text fw-bolder ms-2">LoanApp</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="mb-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="" alt class=" h-auto rounded-circle" />
                    </div>
                    <div class="flex-grow-1 text-center mt-2">
                        <span class="fw-semibold d-block">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</span>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="menu-inner-shadow"></div>
                </div>
                <ul class="menu-inner py-1">
                                <!-- Dashboard -->


                    <li class="menu-item actve">
                        <a href="{{ route('userdashboard.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item actve">
                        <a href="{{ url('index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li> --}}

                    <li class="menu-item acive">
                        <a href="{{ route('userdashboard.newrequest') }}" class="menu-link">
                            <i class="bx bx-user me-2"></i>
                            <div data-i18n="Analytics">New Request</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('userdashboard.loanstatus') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Loan Status</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('userdashboard.repayment') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Repayment</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Transaction history</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Message</div>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <i class="bx bx-cog me-2"></i>
                            <div data-i18n="Analytics">Settings</div>
                        </a>
                    </li>


                    {{-- <li class="menu-item">
                        <a href="applicant-details.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Loan Application</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="applicant-details.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Loan Application</div>
                        </a>
                    </li> --}}
                </ul>

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Notification -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="bx bx-bell bx-sm"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- Replace with your notification items -->
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-notification me-2"></i>
                                            <span class="align-middle">CMS Blog</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-notification me-2"></i>
                                            <span class="align-middle">Notification 2</span>
                                        </a>
                                        <!-- Add more notifications here -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Search -->
                                    {{-- <h3 id="dashboard">Admin</h3> --}}
                            <ul class="navbar-nav flex-row align-items-center ms-auto">


                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="/admin">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                        <small class="text-muted">Loan Applicant</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            @auth

                                                <li><i class="fi-rs-user"></i>
                                                    <form method="POST" action="{{ route('logout') }}" >
                                                        @csrf
                                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="bx bx-power-off me-2"></i>
                                                            <span class="align-middle">Log Out</span></a>
                                                        {{-- <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="bx bx-power-off me-2"></i>
                                                            <span class="align-middle">Log Out</span></a> --}}
                                                    </form>
                                                </li>

                                              @else
                                            {{-- <ul>
                                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a>  / <a href="{{ route('register') }}">Sign Up</a></li>
                                            </ul> --}}
                                        @endif
                                        </li>
                                        {{-- <li>
                                            <a class="dropdown-item" href="login.html">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                </nav>

                <!-- / Navbar -->



                <!-- Content wrapper -->
                <div class="content-wrapper">



                    @if(session()->has('success'))

                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>

                    @endif
                    @if(session()->has('error'))

                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>

                    @endif
                    <!-- Content -->

                    @yield('content')
                </div>
                <!-- / Layout page -->




            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js dashboards/assets/vendor/js/core.js -->
        <script src="dashboards/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="dashboards/assets/vendor/libs/popper/popper.js"></script>
        <script src="dashboards/assets/vendor/js/bootstrap.js"></script>
        <script src="dashboards/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="dashboards/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="dashboards/assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="dashboards/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="dashboards/assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->


        <script src="{{ asset('vendor/smart-ads/js/smart-banner.min.js') }}"></script>

        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" ></script> --}}

        @yield('scripts')
</body>

</html>
