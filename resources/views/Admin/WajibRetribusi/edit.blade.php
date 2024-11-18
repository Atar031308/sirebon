<!doctype html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
@include('Template.head')
<head>
    <style>
        .form-control {
            background: #e4e7ea;
            color: #3a4752;
        }
    </style>
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6">

    <ul class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link" onclick="window.history.back();">
                <button type="button" class="btn btn-danger">Kembali</button>
            </a>
        </li>
    </ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card profile-card">
                        <div class="card-body">
                            <h5 class="card-title">Ubah Rekening Pembayaran</h5>
                            <hr>
                            <form action="{{ route('wajib.update', $wajibRetribusi->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $wajibRetribusi->nama }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nomor HP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_hp" class="form-control"
                                            value="{{ $wajibRetribusi->no_hp }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" class="form-control"
                                            value="{{ $wajibRetribusi->nik }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control"
                                            value="{{ $wajibRetribusi->alamat }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="id_kelurahan">Kelurahan</label>
                                    <div class="col-sm-9">
                                        <select name="id_kelurahan" id="id_kelurahan" class="form-select">
                                            @foreach ($kelurahan as $data)
                                                <option value="{{ $data->id }}" {{ $data->id == $wajibRetribusi->id_kelurahan ? 'selected' : '' }}>
                                                    {{ $data->nama_kelurahan }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="status">Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" id="status" class="form-select" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option value="A" {{ $wajibRetribusi->status == 'A' ? 'selected' : '' }}>A -
                                                Aktif</option>
                                            <option value="B" {{ $wajibRetribusi->status == 'B' ? 'selected' : '' }}>B -
                                                Tidak Aktif</option>
                                        </select>
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


    </script>
</body>

</html>