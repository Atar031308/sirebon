<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="{{ route('postlogin') }}" method="post">
    @csrf
    <div class="form">
        <img class="logo" src="assets/img/gambar-login.jpeg">
      <div class="title txlogin">Register</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" name="email" type="text" placeholder="" />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Masukan username anda</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" name="password" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Masukan email anda</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" name="password" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Masukan password terbaru anda</label>
      </div>
      <button type="text" class="submit">submit</button>
      <a>Silahkan Login Kembali</a>
      <a href="login">Login</a>
    </div>
    </form>
</body>
</html>
