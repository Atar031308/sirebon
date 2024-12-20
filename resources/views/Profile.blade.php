<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @include('Template.head')
</head>

<body>
    @include('Template.sidebar')

    <!-- Main Panel -->
    <div class="main-panel">
        <!-- Header -->
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
            @include('Template.navbar')
        </div>
        <!-- End Header -->

        <!-- Content -->
        <div class="container">
            <div class="page-inner">
                @if (auth()->user()->level == 'wajib_retribusi')
                    <div class="row">
                        <!-- Styles for Form -->
                        <style>
                            .form-container {
                                max-width: 600px;
                                margin: 20px auto;
                                padding: 20px;
                                border: 1px solid #ccc;
                                border-radius: 8px;
                                background-color: #f8f9fa;
                            }

                            .form-group label {
                                font-weight: bold;
                            }

                            .form-control {
                                background-color: #e2edf7;
                            }
                        </style>

                        <!-- Form Container -->
                        <div class="form-container">
                            <!-- Update Profile Form -->
                            <form method="POST" action="{{ route('Profile.update', ['Profile' => Auth::user()->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="{{ auth()->user()->name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hakAkses">Hak Akses</label>
                                        <input type="text" class="form-control" id="hakAkses" name="hakAkses"
                                            value="{{ auth()->user()->level }}" readonly>
                                    </div>
                                </div>
                                @foreach (auth()->user()->Wajib_retribusi as $wajib)
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik"
                                                value="{{ $wajib->nik }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="namaLengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap"
                                                value="{{ $wajib->nama }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" id="telepon" name="telepon"
                                                value="{{ $wajib->no_hp }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                value="{{ $wajib->alamat }}">
                                        </div>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            </form>
                            <hr>

                            <!-- Alert Messages -->
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <!-- Update Password Form -->
                            <form method="POST" action="{{ route('Profile.updatePassword', ['Profile' => Auth::user()->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="passwordLama">Password Lama</label>
                                        <input type="password" class="form-control" id="passwordLama" name="passwordLama" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="passwordBaru">Password Baru</label>
                                        <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="konfirmasiPasswordBaru">Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" id="konfirmasiPasswordBaru" name="passwordBaru_confirmation" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Ubah Password</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- End Content -->
    </div>

    @include('Template.footer')

    <!-- Scripts -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="assets/js/kaiadmin.min.js"></script>
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
</body>

</html>
