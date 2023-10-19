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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/login.css">
    <link rel="stylesheet" href="">
    <title>Login & Register</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i></i></a>
                </div> -->
                <span>Isi data dengan lengkap</span>
                <input type="text" placeholder="Masukkan nama lengkap">
                <input type="email" placeholder="Masukkan email">
                <input type="password" placeholder="Masukkan password">
                <input type="text" placeholder="Masukkan nama lengkap">
                <input type="email" placeholder="Masukkan email">
                <input type="password" placeholder="Masukkan password">
                <input type="email" placeholder="Masukkan email">
                <input type="password" placeholder="Masukkan password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign In</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i></i></a>
                    </div> -->
                <span>Masukkan Email dan Password anda</span>
                <input type="email" placeholder="Isi Email">
                <input type="password" placeholder="Isi Password">
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome To J-KOST</h1>
                    <p>Kost Jember Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, possimus?</p>
                    <button class="press" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome To J-KOST</h1>
                    <p>J-Kost Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, possimus?</p>
                    <button class="press" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const signUpbutton = document.getElementById("signUp");
        const signInbutton = document.getElementById("signIn");
        const container = document.getElementById("container");

        signUpbutton.addEventListener('click', ()=>{
            container.classList.add("right-panel-active");
        });

        signInbutton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>