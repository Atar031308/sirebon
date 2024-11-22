<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 20px; /* Kurangi jarak atas */
    }

    .form-group label {
      font-weight: bold; /* Menonjolkan label */
    }

    .form-control {
      border-radius: 5px; /* Membuat input lebih modern */
    }

    .page-inner {
      padding: 20px;
    }

    h2 {
      font-weight: bold;
      color: #343a40;
    }

    .btn-primary {
      border-radius: 5px;
      background-color: #007bff;
      border: none;
    }
  </style>
</head>

<body>
  @include('Template.sidebar')

  <div class="main-panel">
        <div class="main-header">
            <!-- Logo Header -->

            <!-- End Logo Header -->

            <!-- Navbar Header -->
            @include('Template.navbar')
            <!-- End Navbar -->
        </div>

    <div class="container">
      <div class="page-inner">
        <h2 class="text-center mb-4">Halaman Konfirmasi Pembayaran</h2>

        <!-- Notifikasi sukses -->
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('konfirmasi.confirm') }}" method="post" enctype="multipart/form-data">
          @csrf

          <!-- Jenis Bank -->
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

          <!-- Nominal Transfer -->
          <div class="form-group">
            <label for="nominal_transfer">Nominal Transfer:</label>
            <input type="number" id="nominal_transfer" name="nominal_transfer" class="form-control" required>
          </div>

          <!-- Nomor Rekening -->
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

          <!-- Bukti Pembayaran -->
          <div class="form-group">
            <label for="formFile" class="form-label">Bukti Pembayaran:</label>
            <input class="form-control" type="file" id="formFile" name="file_bukti" required>
          </div>

          <!-- Tombol Submit -->
          <button type="submit" class="btn btn-primary btn-block">Kirim</button>
        </form>
      </div>
    </div>
    @include('Template.footer')
  </div>
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
</body>
</html>
