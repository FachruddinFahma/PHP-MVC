<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/login1.css">
    <!-- LINK REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- ICON JKOST -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white.png">

    <title>Halaman <?php echo $data['judul'] ?></title>
</head>

<body>
    <div class="container">
        <div class="form-container sign-in-container">
            <form action="http://localhost/PHP-MVC/public/login1/cekLogin" method="post">
                <h1>Login</h1>
                <span>Masukkan Email dan Password anda</span><br>
                <div class="input-icon">
                    <i class="ri-mail-fill"></i>
                    <label for="">Email</label>
                    <input type="email" placeholder="Masukkan email anda" name="email" required>
                </div><br>
                <div class="input-icon">
                    <i class="ri-key-2-fill"></i>
                    <label for="">Password</label>
                    <input type="password" placeholder="Masukkan password anda" name="password" required>
                </div>
                <button>Login</button>
                <p>Lupa Password?<a href="http://localhost/PHP-MVC/public/lupa_password" id="lupaPassword"> Silahkan ganti disini</a></p>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <img src="http://localhost/PHP-MVC/public/image/project logo j-kost white.png" alt="" id="logo"><br>
                    <h1>Welcome To J-KOST</h1><br><br>
                    <p>J-Kost Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, possimus?</p><br><br>
                    <a class="signup-link" href="http://localhost/PHP-MVC/public/register_pemilik">Daftar Pemilik Kost</a><br>
                    <a class="signup-link" href="http://localhost/PHP-MVC/public/register_penyewa">Daftar Penyewa Kost</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<!-- <div class="container">
    <h4 class="text-center">FORM LOGIN</h4>
    <hr>
    <form action="http://localhost/phpmvc/public/login/cekLogin" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" value="">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        <a href="http://localhost/phpmvc/public/register/" class="btn btn-success">Register</a>
    </form>
</div> -->