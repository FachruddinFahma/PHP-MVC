<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/style.css">
    <!-- ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <title>Halaman <?php echo $data['judul'] ?></title>
</head>

<body>
    <header id="header">
        <div id="dashboard-title">
            <img id="icon-menu" src="http://localhost/PHP-MVC/public/image/menu.png" alt="">
            <h2><?php echo $data['judul']?></h2>
        </div>
        <div id="center-content">
            <div id="foto-profile">
                <img src="http://localhost/PHP-MVC/public/image/img1.jpg" alt="User Photo">
            </div>
            <p id="user-name">Farhan</p>
        </div>
    </header>
    <main class="container">
        <aside id="sidebar">
            <img id="icon-jkost" src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
            <ul class="nav-sidebar">
                <li>
                    <a href="http://localhost/PHP-MVC/public/dashboard">
                        <span></span>
                        <img src=" http://localhost/PHP-MVC/public/image/dashboard.png" alt="dashboard">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="li-detail">
                    <a href="youtube.com">
                        <details>
                            <summary>
                                <span></span>
                                <img src="http://localhost/PHP-MVC/public/image/kamar.png" alt="data kamar">
                                <a href="index.html">Data Kamar</a>
                                <img class="arrow-detail" src="http://localhost/PHP-MVC/public/image/previous.png" alt="detail">
                            </summary>
                            <ul class="detail-ul">
                                <li><a href="#">Kamar Tersedia</a></li>
                                <li><a href="#">Kamar Terisi</a></li>
                            </ul>
                    </a>
                    </details>
                </li>
                <li>
                    <a href="http://localhost/PHP-MVC/public/penghuni">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/penghuni.png" alt="data penghuni">
                        <p>Data Penghuni</p>
                    </a>
                </li>
                <li class="li-detail">
                    <a href="youtube.com">
                        <details>
                            <summary>
                                <span></span>
                                <img src="http://localhost/PHP-MVC/public/image/pemesanan.png" alt="pemesanan">
                                <a href="">Pemesanan</a>
                                <img class="arrow-detail" src="http://localhost/PHP-MVC/public/image/previous.png" alt="detail">
                            </summary>
                            <ul class="detail-ul">
                                <li><a href="#">Pesanan Baru</a></li>
                                <li><a href="#">Pesanan Disetujui</a></li>
                            </ul>
                        </details>
                    </a>
                </li>
                <li>
                    <a href="youtube.com">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/laporan.png" alt="laporan">
                        <p>Laporan</p>
                        <div class="count-notif">
                            <p>3</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="youtube.com">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/profil.png" alt="profil">
                        <p>Profil</p>
                    </a>
                </li>
                <li id="link-keluar">
                    <a href="youtube.com">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/sign-out.png" alt="profil">
                        <p>Keluar</p>
                    </a>
                </li>
            </ul>
        </aside>

    </main>
    <!-- <script src="http://localhost/PHP-MVC/public/js/router.js"></script> -->