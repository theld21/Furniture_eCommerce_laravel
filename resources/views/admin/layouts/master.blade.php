
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title_page')</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/images/favicon.png")}}">
    <!-- Custom CSS -->
    <link href="{{asset("assets/libs/chartist/dist/chartist.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css")}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset("dist/css/style.min.css")}}" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="page-wrapper">

            <div class="container-fluid">
                @yield('master-content')
            </div>
            
        </div>

    </div>
    <script src="{{asset("assets/libs/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("dist/js/app-style-switcher.js")}}"></script>
    <!--Wave Effects -->
    <script src="{{asset("dist/js/waves.js")}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset("dist/js/sidebarmenu.js")}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset("dist/js/custom.js")}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset("assets/libs/chartist/dist/chartist.min.js")}}"></script>
    <script src="{{asset("assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js")}}"></script>
    <script src="{{asset("dist/js/pages/dashboards/dashboard1.js")}}"></script>
</body>

</html>