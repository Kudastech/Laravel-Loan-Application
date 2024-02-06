
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

    <link rel="icon" type="image/x-icon" href="dashboards/assets/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="dashboards/assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="dashboards/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dashboards/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dashboards/assets/css/demo.css" />

    <link rel="stylesheet" href="dashboards/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="dashboards/assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="dashboards/assets/vendor/js/helpers.js"></script>
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

<body class="">

<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="80000"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
        </div>
    </div>
</form>


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


