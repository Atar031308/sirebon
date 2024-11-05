

        <!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form  action="{{ route('password.email') }}" method="post">
    @csrf
    <div class="form">
    @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <img class="logo" src="assets/img/gambar-login.jpeg">
      <div class="title txlogin">Lupa Password</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" name="email" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Email</label>
      </div>
      <button type="text" class="submit">Kirim</button>
      <a href="login">Kembali</a>
      @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    </form>
</body>
</html>
