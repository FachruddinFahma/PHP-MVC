<head>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/landing_page.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/pembayaran.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
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
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Testimoni</a>
                <a href="">Cari Kost</a>
                <a href="" class="link-login">Masuk</a>
            </ul>
        </div>
    </nav>
    <section id="pembayaran">
        <form action="<?php echo BASEURL; ?>pembayaran_kost/addBuktiTF" method="post" id="form-pemesanan" enctype="multipart/form-data">
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
                    <img src="<?php echo BASEURL; ?>qris/<?php echo $data['foto']['foto_qris']; ?>" alt="" style="width: 75%;">
                    <input type="file" id="input-bukti" name="bukti_tf">
                    <button id="verifikasi-pemesanan">Verifikasi Pemesanan</button>
                </div>
            </div>
        </form>
    </section>
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