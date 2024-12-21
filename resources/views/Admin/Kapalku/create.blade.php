<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" onclick="window.history.back();">
                <button type="button" class="btn btn-danger">Kembali</button>
            </a>
        </li>
    </ul>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('Kapalku.store') }}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label for="nama_kapal" class="form-label">Nama Kapal</label>
                        <input type="text" class="form-control @error('nama_kapal') is-invalid @enderror" id="nama_kapal" name="nama_kapal" value="{{ old('nama_kapal') }}" placeholder="Masukkan nama kapal" autocomplete="off">
                        @error('nama_kapal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="jenis_kapal" class="form-label">Jenis Kapal</label>
                        <select class="form-select @error('id_jenis_kapal') is-invalid @enderror" id="jenis_kapal" name="id_jenis_kapal">
                            <option value="" disabled selected>Pilih jenis kapal</option>
                            @foreach ($jenisKapalList as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->jenis_kapal }}</option>
                            @endforeach
                        </select>
                        @error('id_jenis_kapal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Ukuran Kapal</label>
                        <input type="text" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" name="ukuran" value="{{ old('ukuran') }}" placeholder="Contoh: 45m" autocomplete="off">
                        @error('ukuran')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('Kapalku.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>




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





</html>