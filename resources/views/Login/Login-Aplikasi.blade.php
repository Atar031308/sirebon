<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="{{ route('postlogin') }}" method="post">
    @csrf
    <div class="form">
        <img class="logo" src="assets/img/gambar-login.jpeg">
      <div class="title txlogin">Login</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" name="email" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Email</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" name="password" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Password</label>
      </div>
      <button type="text" class="submit">submit</button>
      <a>Apakah anda</a>
      <a href="forgot-password">lupa sandi?</a>
    </div>
    </form>
</body>
</html>
