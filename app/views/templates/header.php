<?php
$judul = $data['judul'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/style.css">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- LINK REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Halaman <?php echo $data['judul'] ?></title>
    <!-- Awesome Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- DATATABLE-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!--profile-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

</head>

<body>
    <header id="header">
        <div id="dashboard-title">
            <img id="icon-menu" src="http://localhost/PHP-MVC/public/image/menu.png" alt="">
            <h2><?php echo $judul ?></h2>
        </div>
        <div id="center-content">
            <div id="foto-profile">
                <img src="http://localhost/PHP-MVC/public/image/img1.jpg" alt="User Photo">
            </div>
            <p id="user-name">
            <a href="http://localhost/PHP-MVC/public/profile">Farhan</a>
            </p>
        </div>
    </header>
    <main class="container">
        <aside id="sidebar">
            <img id="icon-jkost" src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
            <ul class="nav-sidebar">
                <li id="link-dashboard">
                    <a href="http://localhost/PHP-MVC/public/dashboard">
                        <span></span>
                        <img src=" http://localhost/PHP-MVC/public/image/dashboard.png" alt="dashboard">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li id="link-kost">
                    <a href="http://localhost/PHP-MVC/public/data_kost">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/kamar.png" alt="data kamar">
                        <p>Data Kost</p>
                    </a>
                </li>
                <li id="link-kamar">
                    <a href="http://localhost/PHP-MVC/public/kamar">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/kamar.png" alt="data kamar">
                        <p>Data Kamar</p>
                    </a>
                </li>
                <li id="link-penghuni">
                    <a href="http://localhost/PHP-MVC/public/penghuni">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/penghuni.png" alt="data penghuni">
                        <p>Data Penghuni</p>
                    </a>
                </li>
                <li id="link-pesanan" class="li-detail">
                    <a href="http://localhost/PHP-MVC/public/pemesanan">
                        <details>
                            <summary>
                                <span></span>
                                <img src="http://localhost/PHP-MVC/public/image/pemesanan.png" alt="pemesanan">
                                <a href="http://localhost/PHP-MVC/public/pemesanan">Pemesanan</a>
                                <img class="arrow-detail" src="http://localhost/PHP-MVC/public/image/previous.png" alt="detail">
                            </summary>
                            <ul class="detail-ul">
                                <li><a href="#">Pesanan Baru</a></li>
                                <li><a href="#">Pesanan Disetujui</a></li>
                            </ul>
                        </details>
                    </a>
                </li>
                <li id="link-laporan">
                    <a href="http://localhost/PHP-MVC/public/laporan">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/laporan.png" alt="laporan">
                        <p>Laporan</p>
                        <div class="count-notif">
                            <p>3</p>
                        </div>
                    </a>
                </li>
                <li id="link-keluar">
                    <a href="http://localhost/PHP-MVC/public/login">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/sign-out.png" alt="profil">
                        <p>Keluar</p>
                    </a>
                </li>
            </ul>
        </aside>

    </main>
    <script>
        var judul = "<?php echo $judul; ?>";
        console.log(judul);

        const itemDashboard = document.getElementById('link-dashboard');
        const itemKost = document.getElementById('link-kost');
        const itemKamar = document.getElementById('link-kamar');
        const itemPenghuni = document.getElementById('link-penghuni');
        const itemPemesanan = document.getElementById('link-pesanan');
        const itemLaporan = document.getElementById('link-laporan');

        function addClickedClass(element) {
            element.classList.add('clicked');
        }

        if (judul === "Dashboard") {
            addClickedClass(itemDashboard);
        } else if (judul === "Kost") {
            addClickedClass(itemKost);
        } else if (judul === "Kamar") {
            addClickedClass(itemKamar);
        } else if (judul === "Penghuni") {
            addClickedClass(itemPenghuni);
        } else if (judul === "Pemesanan") {
            addClickedClass(itemPemesanan);
        } else if (judul === "Laporan") {
            addClickedClass(itemLaporan);
        }
    </script>