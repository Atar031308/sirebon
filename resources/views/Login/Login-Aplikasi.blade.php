<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- Menggunakan CDN jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="{{ route('postlogin') }}" method="post">
        @csrf
        <div class="form">
            <img class="logo" src="assets/img/kaiadmin/sirepal.png">
            <div class="title txlogin">Login Sirepal</div>

            <!-- Pesan error global -->
            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="input-container ic1">
                <input id="email" class="input" name="email" type="email" placeholder=" " value="{{ old('email') }}" />
                <div class="cut"></div>
                <label for="email" class="placeholder">Email</label>

                <!-- Menampilkan error spesifik untuk email -->
                @error('email')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-container ic2" style="position: relative;">
                <input id="password" class="input" name="password" type="password" placeholder=" " />
                <i class="fa fa-eye toggle-password" 
                   style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                <div class="cut"></div>
                <label for="password" class="placeholder">Password</label>

                <!-- Menampilkan error spesifik untuk password -->
                @error('password')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="submit">Login</button>
            <a>Apakah anda ingin</a>
            <a href="forgot-password">merubah sandi</a>
        </div>
    </form>

    <script>
        // Show/Hide Password Toggle
        $(document).ready(function () {
            $(".toggle-password").on("click", function () {
                const passwordField = $("#password");
                const type = passwordField.attr("type") === "password" ? "text" : "password";
                passwordField.attr("type", type);

                // Toggle eye icon
                $(this).toggleClass("fa-eye");
                $(this).toggleClass("fa-eye-slash");
            });
        });
    </script>
</body>
</html>
