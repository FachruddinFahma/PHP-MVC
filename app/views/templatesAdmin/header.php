<?php
$judul = $data['judul'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/style.css">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
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
                <img src="<?php echo BASEURL . 'foto/' . $_SESSION['foto_user']; ?>" alt="User Photo">
            </div>
            <div id="user-name">
                <a href="http://localhost/PHP-MVC/public/profile_admin"><?php echo $_SESSION['nama_user'] ?></a>
            </div>
        </div>
    </header>
    <main class="container">
        <aside id="sidebar">
            <img id="icon-jkost" src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
            <ul class="nav-sidebar">
                <li id="link-dashboardAdmin">
                    <a href="http://localhost/PHP-MVC/public/dashboardAdmin">
                        <span></span>
                        <img src=" http://localhost/PHP-MVC/public/image/dashboard.png" alt="dashboard">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li id="link-dataKostAdmin" class="li-detail">
                    <a href="http://localhost/PHP-MVC/public/DataKost_Admin">
                        <details>
                            <summary>
                                <span></span>
                                <img src="http://localhost/PHP-MVC/public/image/pemesanan.png" alt="pemesanan">
                                <a href="http://localhost/PHP-MVC/public/dataKost_Admin">Data Kost</a>
                                <img class="arrow-detail" src="http://localhost/PHP-MVC/public/image/previous.png" alt="detail">
                            </summary>
                            <ul class="detail-ul">
                                <li><a href="#">Data kost belum diverifikasi</a></li>
                                <li><a href="#">Data kost yang sudah diverifikasi</a></li>
                            </ul>
                        </details>
                    </a>
                </li>
                <li id="link-dataUserAdmin" class="li-detail">
                    <a href="http://localhost/PHP-MVC/public/DataUser_Admin">
                        <details>
                            <summary>
                                <span></span>
                                <img src="http://localhost/PHP-MVC/public/image/pemesanan.png" alt="pemesanan">
                                <a href="http://localhost/PHP-MVC/public/DataUser_Admin">Data User</a>
                                <img class="arrow-detail" src="http://localhost/PHP-MVC/public/image/previous.png" alt="detail">
                            </summary>
                            <ul class="detail-ul">
                                <li><a href="#">Data User Pemilik Kost</a></li>
                                <li><a href="#">Data User Penyewa Kost</a></li>
                            </ul>
                        </details>
                    </a>
                </li>
                <li id="link-testimoni">
                    <a href="http://localhost/PHP-MVC/public/Testimoni_Admin">
                        <span></span>
                        <img src="http://localhost/PHP-MVC/public/image/penghuni.png" alt="data penghuni">
                        <p>Testtimoni</p>
                    </a>
                </li>
                <li id="link-keluar">
                    <a href="http://localhost/PHP-MVC/public/login1">
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

        const itemDashboardAdmin = document.getElementById('link-dashboardAdmin');
        const itemKost = document.getElementById('link-dataKostAdmin');
        const itemUser = document.getElementById('link-dataUserAdmin');
        const itemTestimoni = document.getElementById('link-testimoni');

        function addClickedClass(element) {
            element.classList.add('clicked');
        }

        if (judul === "Dashboard") {
            addClickedClass(itemDashboardAdmin);
        } else if (judul === "dataKostAdmin") {
            addClickedClass(itemKost);
        } else if (judul === "dataKostAdmin") {
            addClickedClass(itemUser);
        } else if (judul === "Testimoni") {
            addClickedClass(itemTestimoni);
        }
    </script>