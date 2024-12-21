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
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Halaman Kapal Wajib Retribusi</h5>
              <hr>
              <div class="d-flex justify-content-between mb-2">
                <a href="{{ route('Kapal.create') }}" class="btn btn-primary">Tambah Data</a>
              </div>
              <div class="table-responsive table-bordered">
                <table class="table text-nowrap align-middle mb-0 table-striped" id="dataTable">
                  <thead>
                    <tr class="border-2 border-bottom border-primary border-0">
                      <th scope="col" class="text-center">No.</th>
                      @if (auth()->user()->level == "admin")
                      <th scope="col" class="text-center">Nama Pemilik</th>
                      @endif
                      @if (auth()->user()->level == "wajib_retribusi")
                      <th scope="col" class="text-center">Nama Kapal</th>
                      <th scope="col" class="text-center">Nilai Retribusi</th>
                      <th scope="col" class="text-center">Tanggal Bayar</th>
                      @endif
                      @if (auth()->user()->level == "admin")
                      <th scope="col" class="text-center">Jenis Kapal</th>
                      <th scope="col" class="text-center">Ukuran</th>
                      <th scope="col" class="text-center">Aksi</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    @foreach ($kapal as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              @if (auth()->user()->level == "admin")
              <td>{{ $data->nama_pemilik }}</td>
              @endif
              @if (auth()->user()->level == "wajib_retribusi")
              <td>{{ $data->nama_kapal }}</td>
               <td>Rp
               {{ number_format($data->jenisKapal->biaya_retribusi, 0, ',', '.') ?? 'Tidak ada biaya' }}
                <td>{{ $data->created_at->format('d F Y') }}</td>
              <td>{{ $data->tgl_bayar }}</td>
              @endif
              @if (auth()->user()->level == "admin")
              <td>{{ $data->nama_kapal }}</td>
              <td>{{ $data->jenisKapal->jenis_kapal }}</td>
              <td>{{ $data->ukuran }}</td>
              @endif

              @if (auth()->user()->level == "admin")
              <td class="text-center">
              <a href="{{ route('Kapal.edit', $data->id) }}" class="btn btn-primary btn-sm m-1">Ubah</a>
              <form action="{{ route('Kapal.destroy', $data->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm m-1"
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
              </form>
              </td>
              @endif
            </tr>

            </form>
            </td>
            </tr>
          @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </div>
    </div>

    @include('Template.footer')

    <!-- Custom template | don't include it in your project! -->

    <!-- End Custom template -->
  </div>
  <!-- Core JS Files -->
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

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // Mengaktifkan DataTables
    });
  </script>
</body>

</html>