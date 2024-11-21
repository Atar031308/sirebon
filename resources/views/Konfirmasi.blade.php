<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 20px;
      /* Kurangi jarak atas */
    }

    .form-group label {
      font-weight: bold;
      /* Menonjolkan label */
    }

    .form-control {
      border-radius: 5px;
      /* Membuat input lebih modern */
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
      <div class="main-header-logo">
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
      </div>
      @include('Template.navbar')
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
          <div class="form-group">
            <label for="formFile" class="form-label">Bukti Pembayaran:</label>
            <input class="form-control" type="file" id="formFile" name="file_bukti" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Kirim</button>
        </form>
      </div>
    </div>
    @include('Template.footer')
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>