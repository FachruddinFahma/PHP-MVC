<head>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/landing_page.css">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/pembayaran.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="title-navbar">
            <img src="http://localhost/PHP-MVC/public/image/logo-jkost.png" alt="">
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
                <img src="http://localhost/PHP-MVC/public/image/pembayaran/qris.png" alt="" id="logo-qris">
                <img src="http://localhost/PHP-MVC/public/image/pembayaran/qrcode.png" alt="">
                <input type="file" id="input-bukti">
                <button id="verifikasi-pemesanan">Verifikasi Pemesanan</button>
            </div>

        </div>
    </section>
</body>

</html>