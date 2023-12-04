<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/landing_page.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/mobile_download.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>image/project logo j-kost white 1.png">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="title-navbar">
            <img src="<?php echo BASEURL; ?>image/logo-jkost.png" alt="">
        </div>
        <div class="link-navbar">
            <ul>
                <a href="<?php echo BASEURL; ?>landing_page#order">Home</a>
                <a href="<?php echo BASEURL; ?>landing_page#why-jkost">About</a>
                <a href="<?php echo BASEURL; ?>landing_page#order">Order</a>
                <a href="<?php echo BASEURL; ?>landing_page#testimoni">Testimoni</a>
                <a href="<?php echo BASEURL; ?>landing_page#kost">Kost</a>
                <a href="<?php echo BASEURL . 'login1' ?>" class="link-login"
                    <?php echo isset($_SESSION['id_user']) ? 'style="display: none;"' : ''; ?>>Masuk</a>

                <?php if (isset($_SESSION['id_user'])) : ?>
                <img src="<?php echo BASEURL . 'foto/' . $_SESSION['foto_user'] ?>" alt=""
                    style="width: 45px; border-radius:50px">
                <?php endif; ?>

            </ul>
        </div>
    </nav>
    <section id="download">
        <div class="left-download">
            <h1>Verifikasi berhasil! Silahkan download J-Kost Mobile</h1>
            <p>Download aplikasi J-Kost Mobile untuk kemudahan penggunaan kost seperti pembayaran bulanan, komplain
                keluhan, hingga melihat histrory transaksi tiap bulan</p>
            <div class="card-download">
                <img src="<?php echo BASEURL; ?>image/appstore.png" alt="">
                <div class="text-download">
                    <p>Download di</p>
                    <h3>Play Store</h3>
                </div>
            </div>
        </div>
        <div class="right-download">
            <img src="<?php echo BASEURL; ?>image/landingmobile1.png" alt="">
        </div>
    </section>
</body>

</html>