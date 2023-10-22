<!-- <div class="container">
    <h4 class="text-center">FORM LOGIN</h4>
    <hr>
    <form action="http://localhost/phpmvc/public/register/prosesRegister" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" value="">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        <a href="http://localhost/phpmvc/public/login" class="btn btn-success">Batal</a>
    </form>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/register.css">
    <title>Document</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account Pemilik</h1>
                <span>Isi data dengan lengkap</span>
                <input type="text" placeholder="Masukkan nama lengkap">
                <input type="email" placeholder="Masukkan email">
                <input type="password" placeholder="Masukkan password">
                <input type="text" placeholder="konfirmasi password">
                <button>Daftar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <img src="http://localhost/PHP-MVC/public/image/project logo j-kost white.png" alt="" id="logo"><br>
                    <h1>Welcome To J-KOST</h1><br><br>
                    <p>J-Kost Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, possimus?</p><br><br>
                    <a class="signup-link" href="http://localhost/PHP-MVC/public/login1">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>