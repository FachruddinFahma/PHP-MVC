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
    <!-- LINK REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Register <?php echo $data['judul'] ?></title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="http://localhost/PHP-MVC/public/register_penyewa/tambah_akun_penyewa" method="post">
                <h1>Register Penyewa Kost</h1>
                <span>Isi data dengan lengkap</span>
                <div class="form-group">
                    <div class="form-group">
                        <div class="input-icon">
                            <label for="">Nama Lengkap</label>
                            <i class="ri-user-fill"></i>
                            <input type="text" placeholder="Masukkan nama lengkap anda" name= "nama_lengkap" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="ri-mail-fill"></i>
                            <label for="">Email</label>
                            <input type="email" placeholder="Masukkan email anda" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="ri-key-2-fill"></i>
                            <label for="">Password</label>
                            <input type="password" placeholder="Masukkan password anda" name= "password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="ri-key-2-fill"></i>
                            <label for="">Konfirmasi Password</label>
                            <input type="password" placeholder="Konfirmasi password anda" name = "konfirpassword" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="ri-gallery-upload-fill"></i>
                            <label for="">Masukkan Foto</label>
                            <input type="file" placeholder="Masukkan foto anda">
                        </div>
                    </div>
                </div>
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