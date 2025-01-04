<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register Admin - Nat Ticket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="apple-touch-icon">

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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-12">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('style/assets/img/nattiket.png') }}" alt="">
                  <span class="d-none d-lg-block">Nat Ticket</span>
                </a>
              </div><!-- End Logo -->
              <form method="POST" action="{{ route('registeradmin') }}">
                @csrf
              <div class="card mb-12">

                <div class="card-body">
                
                  <div class="pt-12 pb-12">
                    <h5 class="card-title text-center pb-0 fs-4">Register Admin</h5>
                    <p class="text-center small">Masukkan data anda untuk membuat akun</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="nama_admin" class="form-label">Nama</label>
                      <input type="text" name="nama_admin" class="form-control" id="nama_admin" placeholder="Masukkan Nama" required>
                      <div class="invalid-feedback">Silakan masukkan nama anda!</div>
                    </div><br>

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" required>
                        <div class="invalid-feedback">Silakan masukkan username anda!</div>
                      </div>
                    </div><br>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                        <div class="invalid-feedback">Silakan masukkan email anda!</div>
                      </div><br>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                      <div class="invalid-feedback">Silakan masukkan password anda!</div>
                    </div><br>

                    {{-- <div class="col-12">
                        <label for="no_telp" class="form-label">No Telepon</label>
                        <input type="no_telp" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan No Telepon" required>
                        <div class="invalid-feedback">Silakan masukkan no telepon anda!</div>
                      </div><br> --}}

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div><br>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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