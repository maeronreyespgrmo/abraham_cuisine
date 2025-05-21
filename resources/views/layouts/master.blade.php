<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>{{ config('app.name') }} - @yield('page_name')</title>
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Font -->
	{{-- <link rel="stylesheet" href="/fonts/nunito.css"> --}}
    {{-- <link rel="icon" href="/images/favicon.png" type="image/x-icon"> --}}
    <link rel="icon" href="/img/favicon.png">
  	<!-- Theme style -->
	<link href="/vendor/gull/dist-assets/css/themes/lite-tailwind.css" rel="stylesheet" />
    <link href="/vendor/gull/dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/vendor/gull/dist-assets/css/plugins/datatables.min.css" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">

        <div class="main-header">
            @include('layouts.header')
        </div>

        <div class="side-content-wrap">
            @include('layouts.sidebar')
        </div>

        <div class="main-content-wrap sidenav-open d-flex flex-column">
            
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>@yield('page_title')</h1>
                    <ul>
                        @include('layouts.crumb')
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                @yield('content')
            </div>

            <!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
            	@include('layouts.footer')
            </div>
            <!-- footer end -->
        </div>
    </div>

    @include('layouts.search')

    <!-- Library JS -->
    <script src="/vendor/gull/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/scripts/script.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/plugins/datatables.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/scripts/datatables.script.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/scripts/customizer.script.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/plugins/ladda.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/scripts/ladda.script.min.js"></script>
    <script src="/vendor/gull/dist-assets/js/plugins/echarts.min.js"></script>
    <!-- Page Script -->
    @yield('page_script')

    


</body>
</html>
