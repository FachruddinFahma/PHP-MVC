<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/lupa_pass.css">
    <!-- LINK REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Register <?php echo $data['judul'] ?></title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="http://localhost/PHP-MVC/public/lupa_password/" method = "post">
                <h1>Lupa Password</h1>
                <span>Isi data dengan lengkap</span>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="ri-mail-fill"></i>
                        <label for="">Email</label>
                        <input type="email" placeholder="Masukkan email anda" name = "email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="ri-key-2-fill"></i>
                        <label for="">Password</label>
                        <input type="password" placeholder="Masukkan password anda" name = "password" required>
                    </div>
                </div>
                <button>Ganti</button>
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