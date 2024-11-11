<!DOCTYPE html>
<html lang="en">

<head>
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
          <div class="row">

            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Kapal Wajib Retribusi</h5>
                  <hr>
                  @if (auth()->user()->level == 'admin')
            <div class="d-flex justify-content-between mb-2">
            <button type="button" class="btn btn-primary">Tambah Data</button>
            <input type="text" id="searchInput" class="form-control w-25" placeholder="Cari...">
            </div>
          @endif
                  <div class="table-responsive table-bordered">
                    <table class="table text-nowrap align-middle mb-0 table-striped" id="dataTable">
                      <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                          <th scope="col" class="text-center">No.</th>
                          <th scope="col" class="text-center">Nama Pemilik</th>
                          <th scope="col" class="text-center">Nama Kapal</th>
                          <th scope="col" class="text-center">Jenis Kapal</th>
                          <th scope="col" class="text-center">Ukuran</th>
                          @if (auth()->user()->level == 'admin')
                <th scope="col" class="text-center">Aksi</th>
              @endif
                        </tr>
                      </thead>
                      <tbody class="table-group-divider">
                        <tr>
                          <td scope="col" class="text-center">1.</td>
                          <td scope="col" class="text-center">Faizi Rahman Syawli</td>
                          <td scope="col" class="text-center">Kapal Karam</td>
                          <td scope="col" class="text-center">Kapal Lawd</td>
                          <td scope="col" class="text-center">100m</td>
                          @if (auth()->user()->level == 'admin')
                <td scope="col" class="text-center">
                <a href="" class="btn btn-primary btn-sm m-1">Ubah</a>
                <a href="" class="btn btn-danger btn-sm m-1">Hapus</a>
                </td>
              </tr>
            @endif
                      </tbody>
                    </table>
                  </div>
                </div>
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