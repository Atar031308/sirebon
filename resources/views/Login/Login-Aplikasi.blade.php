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
        <img class="logo" src="assets/img/kaiadmin/kapalku.png">
        <div class="title txlogin">Login Sirebon</div>
        <div class="input-container ic1">
            <input id="firstname" class="input" name="email" type="email" placeholder=" " />
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Email</label>
        </div>
        <div class="input-container ic2" style="position: relative;"> <!-- Tambahkan posisi relatif -->
            <input id="password" class="input" name="password" type="password" placeholder=" " />
            <i class="fa fa-eye toggle-password" 
               style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
            <div class="cut"></div>
            <label for="password" class="placeholder">Password</label>
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
                $(this).toggleClass("fa-eye fa-eye-slash");
            });
        });
    </script>
</body>
</html>
