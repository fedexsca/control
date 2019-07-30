<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/fonts/circular-std/style.css')}}" >
  <link rel="stylesheet" href="{{asset('agnt86/control/libs/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/charts/chartist-bundle/chartist.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/charts/morris-bundle/morris.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/charts/c3charts/c3.css')}}">
  <link rel="stylesheet" href="{{asset('agnt86/control/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
  <title>Control - @yield('title')</title>
</head>

<body>
  <!-- ============================================================== -->
  <!-- main wrapper -->
  <!-- ============================================================== -->
  <div class="dashboard-main-wrapper">

    @include('control::sections.navbar')

    @include('control::sections.sidebar')


    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
      <div class="dashboard-content">
        <div class="container-fluid dashboard-content ">
          <!-- ============================================================== -->
          <!-- pageheader  -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">Panel de Control Web</h2>
                <p class="pageheader-text">Página de inicio</p>
                <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Control</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end pageheader  -->
          <!-- ============================================================== -->

          @yield('content')

        </div>
      </div>

      @include('control::sections.footer')

    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- end main wrapper  -->
  <!-- ============================================================== -->
  <!-- Optional JavaScript -->
  <!-- jquery 3.3.1 -->
  <script src="{{asset('agnt86/control/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
  <!-- bootstap bundle js -->
  <script src="{{asset('agnt86/control/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <!-- slimscroll js -->
  <script src="{{asset('agnt86/control/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
  <!-- main js -->
  <script src="{{asset('agnt86/control/libs/js/main-js.js')}}"></script>
  <!-- chart chartist js -->
  <script src="{{asset('agnt86/control/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
  <!-- sparkline js -->
  <script src="{{asset('agnt86/control/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
  <!-- morris js -->
  <script src="{{asset('agnt86/control/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
  <script src="{{asset('agnt86/control/vendor/charts/morris-bundle/morris.js')}}"></script>
  <!-- chart c3 js -->
  <script src="{{asset('agnt86/control/vendor/charts/c3charts/c3.min.js')}}"></script>
  <script src="{{asset('agnt86/control/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
  <script src="{{asset('agnt86/control/vendor/charts/c3charts/C3chartjs.js')}}"></script>
  <script src="{{asset('agnt86/control/libs/js/dashboard-ecommerce.js')}}"></script>
</body>

</html>
