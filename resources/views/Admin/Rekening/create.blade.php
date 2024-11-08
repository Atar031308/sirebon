<!DOCTYPE html>
<html lang="id">

<head>
    @include('Template.head')  <!-- Mengimpor template head -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" onclick="window.history.back();">
                <button type="button" class="btn btn-danger">Kembali</button>
            </a>
        </li>
    </ul>

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col">
                    <div class="card profile-card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Rekening Pembayaran</h5>
                            <hr>
                            <form action="{{ route('rekening.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="id_ref_bank">Bank</label>
                                    <div class="col-sm-9">
                                        <select name="id_ref_bank" id="id_ref_bank" class="form-select">
                                            <!-- Opsi statis untuk Bank BRI, Bank BCA, dan Bank Mandiri -->
                                            <option value="1" {{ old('id_ref_bank') == 1 ? 'selected' : '' }}>Bank BRI</option>
                                            <option value="2" {{ old('id_ref_bank') == 2 ? 'selected' : '' }}>Bank BCA</option>
                                            <option value="3" {{ old('id_ref_bank') == 3 ? 'selected' : '' }}>Bank Mandiri</option>

                                            <!-- Opsi dinamis dari $refBanks -->
                                            @foreach($refBanks as $bank)
                                                <option value="{{ $bank->id }}" 
                                                    {{ old('id_ref_bank') == $bank->id ? 'selected' : '' }}>
                                                    {{ $bank->nama_bank }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_ref_bank')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="nama_akun">Nama Akun</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_akun" class="form-control" value="{{ old('nama_akun') }}">
                                        @error('nama_akun')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="no_rekening">Nomor Rekening</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_rekening" class="form-control" value="{{ old('no_rekening') }}">
                                        @error('no_rekening')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensi Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript kustom (opsional) -->
    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            const namaAkun = document.querySelector('input[name="nama_akun"]');
            const noRekening = document.querySelector('input[name="no_rekening"]');

            // Validasi form sebelum dikirim
            if (namaAkun.value.trim() === '' || noRekening.value.trim() === '') {
                alert('Nama Akun dan Nomor Rekening harus diisi!');
                event.preventDefault();
            }
        });
    </script>
</body>

</html>
