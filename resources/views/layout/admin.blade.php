<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PBO</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydas/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('skydas/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('skydas/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('skydas/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('skydas/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('skydas/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydas/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('landing/assets/img/logo.png')}}" />
@stack('css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="index.html"><strong>Lailiaaliaa</strong></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('skydas/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
          </li>
        </ul>

        <!-- Setting Navbar Guru -->
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="ti-settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    {{-- <a class="dropdown-item"  href="/profileguru">
                        <i class="ti-id-badge text-primary"></i>
                            Profil
                    </a> --}}
                    <a class="dropdown-item" href="/logout">
                        <i class="ti-power-off text-primary"></i>
                            Keluar
                    </a>

                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

        <!-- Beranda Guru -->
          <li class="nav-item">
            <a class="nav-link" href="/indexadmin">
              <i class="ti-world menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/siswa" class="nav-link">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/nilai" class="nav-link">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Daftar Nilai</span>
            </a>
          </li>

          </li>
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('skydas/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('skydas/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('skydas/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('skydas/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('skydas/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydas/js/off-canvas.js')}}"></script>
  <script src="{{ asset('skydas/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('skydas/js/template.js')}}"></script>
  <script src="{{ asset('skydas/js/settings.js')}}"></script>
  <script src="{{ asset('skydas/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('skydas/js/dashboard.js')}}"></script>
  <script src="{{ asset('skydas/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>


</html>

@stack('scripts')
