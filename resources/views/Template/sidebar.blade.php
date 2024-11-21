<div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/kapalku2.png"
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
                <a href="{{ route('home.index') }}">
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
                <a href="{{ route('rekening.index') }}">
                  <i class="fas fa-wallet"></i>
                  <p>Rekening Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kategori.index') }}">
                <i class="fa-solid fa-circle-exclamation"></i>
                  <p>Kategori retribusi</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="{{ route('wajib.index') }}">
                <i class="fa-solid fa-anchor"></i>
                  <p>Wajib retribusi</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="{{ route('Kapal.index') }}">
                <i class="fa-solid fa-sailboat"></i>
                  <p>Kapal Wajib Retribusi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Pembayaran.index') }}">
                <i class="fa-solid fa-money-bill"></i>
                  <p>Pembayaran retribusi</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                <i class="fa-solid fa-folder"></i>
                  <p>Laporan</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="charts/charts.html">
                      <i class="fa-solid fa-marker"></i>
                        <span>Retribusi</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                      <i class="fa-solid fa-square-pen"></i>
                        <span>Belum Membayar Retribusi</span>
                      </a>
                    </li>
              @endif
              



            @if (auth()->user()->level == "karyawan")
            <li class="nav-item">
                <a href="{{ route('kategori.index') }}">
                   <i class="fa-solid fa-circle-exclamation"></i>
                  <p>Kategori retribusi</p>
                </a>
              </li>

              @if (auth()->user()->level == "karyawan")
              <li class="nav-item">
              <a href="{{ route('Kapalku.index') }}">
                <i class="fa-solid fa-ship"></i>
                  <p>Kapalku</p>
                </a>
              </li>
              @endif
          
              @if (auth()->user()->level == "karyawan")
              <li class="nav-item">
              <a href="{{ route('Wajib.index') }}">
                <i class="fa-solid fa-pen-clip"></i>
                  <p>Kapal Wajib Retribusi</p>
                </a>
              </li>
                @endif
              
              @if (auth()->user()->level == "karyawan")
              <li class="nav-item">
              <a href="{{ route('Konfirmasi.index') }}">
                <i class="fa-solid fa-coins"></i>
                  <p>Konfirmasi Pembayaran</p>
                </a>
              </li>
                @endif
               
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                <i class="fa-solid fa-folder"></i>
                  <p>Laporan</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="charts/charts.html">
                      <i class="fa-solid fa-square-pen"></i>
                        <span>Retribusi Pembayaran</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                      <i class="fa-solid fa-marker"></i>
                        <span>Belum Membayar Retribusi</span>
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