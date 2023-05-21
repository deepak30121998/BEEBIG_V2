<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Beebig Digital</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('admin/assets/images/favicon.ico')}}">

    {{-- Jquery --}}
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Layout config Js -->
    <script src="{{url('admin/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('admin/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

<link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />



</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('Admin.layouts.header')

        @include('Admin.layouts.sidebar');


        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        @yield('content')



    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    {{-- <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div> --}}

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{url('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{url('admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{url('admin/assets/js/plugins.js')}}"></script>





    <!-- apexcharts -->
    <script src="{{url('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- projects js -->
    <script src="{{url('admin/assets/js/pages/dashboard-projects.init.js')}}"></script>

    <!-- Chart JS -->
    <script src="assets/libs/chart.js/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ url('admin/assets/js/pages/sample-chart.js') }}"></script>



    <!-- chartjs init -->
    <script src="assets/js/pages/chartjs.init.js"></script>

    <!-- App js -->
    <script src="{{url('admin/assets/js/app.js')}}"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <script src="https://sarvanga.in/public/admin/bower_components/ckeditor/ckeditor.js"></script>

</body>

</html>
