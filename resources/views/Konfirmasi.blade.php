<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head')
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">

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
        <div class="row">
          <?php
// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $jumlah = $_POST['jumlah'];
  $tanggal = $_POST['tanggal'];
  $metode = $_POST['metode'];
}
?>
          <div class="container mt-5">
            <h2>Konfirmasi Pembayaran Retribusi</h2>
            <form action="{{ route('konfirmasi.confirm') }}" method="post" enctype="multipart/form-data">
              @csrf

              @if (session('success'))
          <div class="alert alert-success">
          {{ session('success') }}
          </div>
        @endif

              <div class="form-group">
                <label for="id_ref_bank">Jenis Bank:</label>
                <select id="id_ref_bank" name="id_ref_bank" class="form-control" required>
                  <option value="">Pilih Jenis Bank</option>
                  @foreach ($banks as $bank)
            <option value="{{ $bank->id }}" {{ old('id_ref_bank') == $bank->id ? 'selected' : '' }}>
            {{ $bank->nama_bank }}
            </option>
          @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="nominal_transfer">Nominal Transfer:</label>
                <input type="number" id="nominal_transfer" name="nominal_transfer" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id_ms_rekening">Nomor Rekening:</label>
                <select id="id_ms_rekening" name="id_ms_rekening" class="form-control" required>
                  <option value="">Pilih Rekening</option>
                  @foreach ($msRekenings as $rekening)
            <option value="{{ $rekening->id }}" {{ old('id_ms_rekening') == $rekening->id ? 'selected' : '' }}>
            {{ $rekening->no_rekening }} ({{ $rekening->nama_akun }})
            </option>
          @endforeach
                </select>
              </div>

              <div class="form-group mb-3">
                <label for="formFile" class="form-label">Bukti Pembayaran:</label>
                <input class="form-control" type="file" id="formFile" name="file_bukti" required>
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <h3 class="mt-5">Ringkasan Konfirmasi Pembayaran</h3>
            <ul class="list-group">
              <li class="list-group-item"><strong>Nama Pembayar:</strong> <?php  echo htmlspecialchars($nama); ?></li>
              <li class="list-group-item"><strong>Jumlah Pembayaran:</strong> Rp
                <?php  echo number_format($jumlah, 0, ',', '.'); ?>
              </li>
              <li class="list-group-item"><strong>Tanggal Pembayaran:</strong>
                <?php  echo htmlspecialchars($tanggal); ?>
              </li>
              <li class="list-group-item"><strong>Metode Pembayaran:</strong> <?php  echo htmlspecialchars($metode); ?>
              </li>
            </ul>
            <div class="alert alert-success mt-3">
              Pembayaran Anda telah dikonfirmasi! Terima kasih.
            </div>
            <?php endif; ?>
          </div>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>
</body>

</html>