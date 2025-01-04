<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TickCher</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="natticket">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('font/css/all.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('style/assets/img/nattiket.png') }}" alt="">
        <span class="d-none d-lg-block">Nat Ticket</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="get" action="{{ route('dashboard') }}">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form> 
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="{{ route('dashboard') }}">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">0</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            Kamu tidak mempunyai notifikasi baru
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>          

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">0</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            Kamu tidak mempunyai pesan baru
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->
      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('style/assets/img/admin.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2">{{ session('nama_admin') }}</span>
          </a><!-- End Profile Iamge Icon -->
          
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
          <i class="fa-solid fa-border-all"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Admin') }}">
          <i class="fa fa-user-gear"></i>
          <span>Admin</span>
        </a>
      </li><!-- End Admin Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Pengguna') }}">
          <i class="fa-solid fa-user"></i>
          <span>Pengguna</span>
        </a>
      </li><!-- End Pengguna Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shield-halved"></i><span>Tim</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('TimHome') }}">
              <i class="fa-solid fa-circle"></i><span>Tim Home</span>
            </a>
          </li>
          <li>
            <a href="{{ route('TimAway') }}">
              <i class="fa-solid fa-circle"></i><span>Tim Away</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-map"></i><span>Tempat Pertandingan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Stadion') }}">
              <i class="fa-solid fa-circle"></i><span>Stadion</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Gor') }}">
              <i class="fa-solid fa-circle"></i><span>Gor</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Kompetisi') }}">
          <i class="fa-brands fa-artstation"></i>
          <span>Kompetisi</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-newspaper"></i><span>Jadwal</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('JadwalSepakBola') }}">
              <i class="fa-solid fa-circle"></i><span>Jadwal Sepak Bola</span>
            </a>
          </li>
          <li>
            <a href="{{ route('JadwalFutsal') }}">
              <i class="fa-solid fa-circle"></i><span>Jadwal Futsal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-ticket"></i><span>Tiket</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('TiketSepakBola') }}">
              <i class="fa-solid fa-circle"></i><span>Tiket Sepak Bola</span>
            </a>
          </li>
          <li>
            <a href="{{ route('TiketFutsal') }}">
              <i class="fa-solid fa-circle"></i><span>Tiket Futsal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-tags"></i><span>Pesan Tiket</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('PesanTiketSepakBola') }}">
              <i class="fa-solid fa-circle"></i><span>Pesan Tiket Sepak Bola</span>
            </a>
          </li>
          <li>
            <a href="{{ route('PesanTiketFutsal') }}">
              <i class="fa-solid fa-circle"></i><span>Pesan Tiket Futsal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('login') }}">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Logout Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              @yield('content')
          </section>
      </div>
  </main><!-- End #main -->

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Nat Ticket</span></strong> 2024
    </div>
    <div class="credits">
      Designed by <a href="">Mohammad Natan</a>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

</body>

</html>