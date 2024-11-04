<div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/logo-kapal.png"
                height="80px" 
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
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
            @if (auth()->user()->level == "admin")
            <li class="nav-item">
                <a href="{{ route('home') }}">
                  <i class="fas fa-home"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <!-- <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section"></h4>
              </li> -->
              <li class="nav-item">
                <a href="{{ route('rekening_pembayaran') }}">
                  <i class="fas fa-wallet"></i>
                  <p>Rekening Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Kategori_retribusi') }}">
                <i class="fa-solid fa-circle-exclamation"></i>
                  <p>Kategori retribusi</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="{{ route('Kapal_retribusi') }}">
                 <i class="fa-solid fa-pen-to-square"></i>
                  <p>Kapal Wajib Retribusi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Pembayaran_retribusi') }}">
                  <i class="fas fa-pen-square"></i>
                  <p>Pembayaran retribusi</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Laporan</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="charts/charts.html">
                        <span class="sub-item">Retribusi Pembayaran</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Belum Membayar Retribusi</span>
                      </a>
                    </li>
              @endif



            @if (auth()->user()->level == "karyawan")
            <li class="nav-item">
                <a href="{{ route('home') }}">
                   <i class="fa-solid fa-circle-exclamation"></i>
                  <p>Kategori retribusi</p>
                </a>
              </li>
              <!-- <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section"></h4>
              </li> -->

              @if (auth()->user()->level == "karyawan")
              <li class="nav-item">
              <a href="{{ route('Kapalku') }}">
                <i class="fa-solid fa-ship"></i>
                  <p>Kapalku</p>
                </a>
              </li>
              @endif
          
              @if (auth()->user()->level == "karyawan")
              <li class="nav-item">
              <a href="{{ route('Wajib') }}">
                  <i class="fas fa-pen-square"></i>
                  <p>Wajib Retribusi</p>
                </a>
              </li>
                @endif
              
              @if (auth()->user()->level == "karyawan")
              <li class="nav-item">
              <a href="{{ route('Konfirmasi_pembayaran') }}">
                  <i class="fas fa-pen-square"></i>
                  <p>Konfirmasi Pembayaran</p>
                </a>
              </li>
                @endif
               
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Laporan</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="charts/charts.html">
                        <span class="sub-item">Retribusi Pembayaran</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Belum Membayar Retribusi</span>
                      </a>
                    </li>
              @endif

                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>