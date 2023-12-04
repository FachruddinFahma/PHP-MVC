<head>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/landing_page.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/pembayaran.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>image/project logo j-kost white 1.png">
    <title>Pembayaran Kost</title>
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
    <section id="pembayaran">
        <form action="<?php echo BASEURL; ?>pembayaran_kost/addBuktiTF" method="post" id="form-pemesanan"
            enctype="multipart/form-data">
            <div id="form-pembayaran">
                <h3>Form Pembayaran</h3>
                <div id="top-pembayaran">
                    <div class="total-pembayaran">
                        <p>Total</p>
                        <p>Rp 603,000</p>
                    </div>
                    <div class="bayar-dalam">
                        <p>Bayar Dalam</p>
                        <p class="detik">00:30:00</p>
                    </div>
                </div>
                <div class="main-pembayaran">
                    <img src="<?php echo BASEURL; ?>image/pembayaran/qris.png" alt="" id="logo-qris">
                    <?= var_dump($data['foto']) ?>
                    <img src="<?php echo BASEURL; ?>qris/<?php echo $data['foto']['foto_qris']; ?>" alt=""
                        style="width: 75%;">
                    <input type="file" id="input-bukti" name="bukti_tf">
                    <a id="verifikasi-pemesanan" data-bs-toggle="modal" data-bs-target="#modal-testimoni">Verifikasi
                        Pemesanan</a>
                </div>
            </div>
        </form>
    </section>
    <div class="modal" tabindex="-1" id="modal-testimoni">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Input Data Kamar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-kamar" action="http://localhost/PHP-MVC/public/kamar/addKamar" method="post"
                        enctype="multipart/form-data">

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-back" id="back1">Kembali</button>
                    <button type="button" class="btn-next" id="next1">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function() {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function() {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>

</html>