<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  @include('Template.head')
</head>

<body>
  @include('Template.sidebar')
  <!-- End Sidebar -->

  <div class="main-panel">
    <div class="main-header">
      <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.html" class="logo">
            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <!-- Navbar Header -->
      @include('Template.navbar')
      <!-- End Navbar -->
    </div>

    <div class="container">
      <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        </div>
        @if (auth()->user()->level == "karyawan")
          <div class="row">
            <style>
            .form-container {
              max-width: 600px;
              margin: 20px auto;
              padding: 20px;
              border: 1px solid #ccc;
              border-radius: 8px;
              background-color: #f8f9fa;
            }

            .form-group label {
              font-weight: bold;
            }

            .form-control {
              background-color: #e2edf7;
            }
            </style>
            </head>

            <body>
            <div class="form-container">
              <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" value="">
                </div>
                <div class="form-group col-md-6">
                <label for="hakAkses">Hak Akses</label>
                <input type="text" class="form-control" id="hakAkses" value="">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" value="">
                </div>
                <div class="form-group col-md-6">
                <label for="namaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap" value="">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" value="">
                </div>
                <div class="form-group col-md-6">
                <label for="alamat">Alamat 0831019587446</label>
                <input type="text" class="form-control" id="alamat" value="">
                </div>
              </div>4

              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="passwordLama">Password Lama</label>
                <input type="password" class="form-control" id="passwordLama">
                </div>
                <div class="form-group col-md-6">
                <label for="passwordBaru">Password Baru</label>
                <input type="password" class="form-control" id="passwordBaru">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="konfirmasiPasswordBaru">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="konfirmasiPasswordBaru">
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-block">Simpan</button>
              </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
            </body>

      </html>
    @endif

</div>
</div>
</div>

@include('Template.footer')

<!-- Custom template | don't include it in your project! -->

<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery-3.7.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->


<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
<script src="assets/js/plugin/jsvectormap/world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Kaiadmin JS -->
<script src="assets/js/kaiadmin.min.js"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="assets/js/setting-demo.js"></script>
<script src="assets/js/demo.js"></script>

</body>

</html>