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

            <!-- Navbar Header -->
            @include('Template.navbar')
            <!-- End Navbar -->
        </div>

        <div class="container">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <!-- Placeholder for additional header content -->
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Halaman Pembayaran Retribusi</h5>
                            <hr>
                            <div class="d-flex justify-content-between mb-2">
                                <a href="{{ route('Konfirmasi.create') }}" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="table-responsive table-bordered">
                                <table class="table text-nowrap align-middle mb-0 table-striped" id="dataTable">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Rekening</th>
                                            <th class="text-center">Bukti</th>
                                            <th class="text-center">Tanggal Bayar</th>
                                            <th class="text-center">Tanggal Tidak Lanjut</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($konfirmasi->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data tersedia.</td>
                                        </tr>
                                        @else
                                        @foreach ($konfirmasi as $index => $data)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $data->msRekening->nama_akun }}</td>
                                            <td>{{ $data->msRekening->no_rekening }}</td>
                                            <td class="text-center">
                                                @if ($data->file_bukti)
                                                <img src="{{ asset('storage/' . $data->file_bukti) }}" class="rounded img-fluid" style="max-width: 80px;">
                                                @else
                                                <span>No Image Available</span>
                                                @endif
                                            </td>
                                            <td class="text-nowrap">
                                                {{ $data->tgl_bayar ? \Carbon\Carbon::parse($data->tgl_bayar)->format('d M Y') : '-' }}
                                            </td>
                                            <td>{{ $data->tindaklanjut_tgl }}</td>
                                            <td class="text-center">
                                                @if ($data->status === 'S')
                                                <span class="badge badge-success">Sesuai</span>
                                                @elseif ($data->status === 'T')
                                                <span class="badge badge-danger">Tidak Sesuai</span>
                                                @else
                                                <form action="{{ route('konfirmasi.updateStatus', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" name="status" value="sesuai" class="btn btn-success btn-sm mr-2">Sesuai</button>
                                                    <button type="submit" name="status" value="tidak_sesuai" class="btn btn-danger btn-sm">Tidak Sesuai</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Scripts -->
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </div>
        </div>

        @include('Template.footer')

        <!-- Core JS Files -->
        <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

        <!-- jQuery Scrollbar -->
        <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

        <!-- Kaiadmin JS -->
        <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable(); // Mengaktifkan DataTables
            });
        </script>
    </div>
</body>

</html>