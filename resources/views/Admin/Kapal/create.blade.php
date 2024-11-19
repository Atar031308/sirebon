<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
    <style>
        .form-control {
            background: #e4e7ea;
            color: #3a4752;
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6">

        <header class="app-header">

            <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" onclick="window.history.back();">
            <button type="button" class="btn btn-danger">Kembali</button>
            </a>
        </li>
    </ul>
            </nav>

        </header>

        <div class="container-fluid">
            <div class="row">


                <div class="col">
                    <div class="card profile-card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Kapal Wajib Retribusi</h5>
                            <hr>
                            <form action="{{ route('Kapal.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="id_user">Pemilik Kapal</label>
                                    <div class="col-sm-9">
                                        <select name="id_wajib_retribusi" id="id_wajib_retribusi" class="form-select">
                                            @foreach ($pemilikKapal as $pemilik)
                                                <option value="{{ $pemilik->id }}">{{ $pemilik->nama }}</option>
                                            @endforeach
                                        </select>                                        
                                    </div>
                                </div>                                
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nama Kapal</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kapal" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="id_jenis_kapal">Jenis Kapal</label>
                                    <div class="col-sm-9">
                                        <select name="id_jenis_kapal" id="id_jenis_kapal" class="form-select">
                                            @foreach ($jeniskapal as $jenis)
                                                <option value="{{ $jenis->id }}">{{ $jenis->jenis_kapal }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Ukuran</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ukuran" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('Template.footer')
    </div>
    </script>
</body>

</html>