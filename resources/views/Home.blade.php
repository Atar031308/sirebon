
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
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
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
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
            </div>
            @if (auth()->user()->level == "admin")
            <div class="row">
              <div class="col-md-4">
                <div class="card card-secondary">
                  <div class="card-body skew-shadow">
                    <h1>Rp.0</h1>
                    <h5 class="op-8">Jumlah Sudah Bayar</h5>
                    <div class="pull-right">
                      <h3 class="fw-bold op-8"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-secondary bg-secondary-gradient">
                  <div class="card-body bubble-shadow">
                    <h1>Rp.0</h1>
                    <h5 class="op-8">Jumlah Belum Bayar</h5>
                    <div class="pull-right">
                      <h3 class="fw-bold op-8"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-secondary bg-secondary-gradient">
                  <div class="card-body curves-shadow">
                    <h1>Rp.0</h1>
                    <h5 class="op-8">Jumlah Pemasukan</h5>
                    <div class="pull-right">
                      <h3 class="fw-bold op-8"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  
            @endif  
                    
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
