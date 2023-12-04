<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/landing_page.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/mobile_download.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-testimoni"
        id="button-modal" hidden>
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal-testimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="ri-star-fill"></i>Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-testi" action="<?php echo BASEURL; ?>download/tambahTesti" method="post">
                        <label for="">Masukan testimoni aplikasi :</label>
                        <textarea name="deskripsi_testi" id="deskripsi_testi" cols="30" rows="10"
                            placeholder="Berikan testimoni aplikasi kami"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-back" data-bs-dismiss="modal" id="back1">Kembali</button>
                    <button type="button" class="btn-next" id="next1">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        function tampilkanModal() {
            $('#button-modal').click();
        }
        $("#next1").click(function() {
            $('#form-testi').submit();
        });

        <?php if ($_SESSION['showModal'] == true) : ?>
        setTimeout(tampilkanModal, 1500);
        <?php endif; ?>
    });
    </script>
</body>

</html>