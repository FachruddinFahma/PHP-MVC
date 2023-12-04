<head>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/landing_page.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/data_pemesanan.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>image/project logo j-kost white 1.png">
    <title>Pemesanan Kost</title>
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
    <div class="halaman">
        <p><i class="ri-home-8-fill"></i>Home > Kost Marno > Kamar 3</p>
    </div>
    <section id="pemesanan">
        <form action="<?php echo BASEURL; ?>pemesanan_kost/addPemesanan" method="post" id="form-pemesanan">
            <div class="left-pemesanan">
                <h1>Data Pemesanan</h1>
                <p name="id_pemesanan"><?php echo $data['idRnamdom']; ?></p>
                <div id="informasi-pemesanan-kost">
                    <h3>Informasi Pemesanan Kost</h3>
                    <div class="kumpulan-input-pemesanan">
                        <div class="input-pemesanan">
                            <label for="id_kost">Nama Kost</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="nama_kost" id="id_kost"
                                value="<?= $data['pemesanan']['nama_kost']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="id_kost">Nama Kamar</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="nama_kost" id="id_kost"
                                value="<?= $data['pemesanan']['nama_kamar']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="id_kost">Fasilitas</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="fasilitas_kost" id="id_kost"
                                value="<?= $data['pemesanan']['fasilitas']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="id_kost">Alamat Kost</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="alamat_kost" id="id_kost"
                                value="<?= $data['pemesanan']['alamat']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="date" placeholder="Masukkan ID Kost" name="tggl_masuk" id="id_kost" required>
                        </div>
                        <div class="input-pemesanan">
                            <label for="tanggal_keluar">Tanggal Keluar</label>
                            <input type="date" placeholder="Masukkan ID Kost" name="tggl_keluar" id="id_kost" required>
                        </div>
                        <div class="input-pemesanan">
                            <!-- <label for="id_kost">ID Kost</label> -->
                            <input type="hidden" placeholder="Masukkan ID Kost" name="id_kost" id="id_kost"
                                value="<?= $data['pemesanan']['id_kost']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <!-- <label for="id_kost">ID Kamar</label> -->
                            <input type="hidden" placeholder="Masukkan ID Kost" name="id_kamar" id="id_kost"
                                value="<?= $data['pemesanan']['id_kamar']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <!-- <label for="id_kost">Kategori</label> -->
                            <input type="hidden" name="kategori" value="Bulanan">
                        </div>
                        <div class="input-pemesanan">
                            <!-- <label for="id_kost">Harga Kost</label> -->
                            <input type="hidden" name="harga" value="<?= $data['detail_kamar']['harga_bulanan']; ?>">
                        </div>
                        <div class="input-pemesanan">
                            <!-- <label for="id_kost">Harga Kost</label> -->
                            <input type="hidden" name="id_pemesanan" value="<?= $data['idRnamdom']; ?>">
                        </div>
                    </div>
                </div>
                <div id="informasi-pemesanan-kost">
                    <h3>Informasi Calon Penghuni</h3>
                    <div class="kumpulan-input-pemesanan">
                        <div class="input-pemesanan">
                            <label for="id_kost">Nama Penghuni</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="nama_penghuni" id="#"
                                value="<?= $data['penghuni']['nama_lengkap']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="id_kost">Jenis Kelamin</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="jenis_kelamin" id="#"
                                value="<?= $data['penghuni']['jenis_kelamin']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="id_kost">Alamat Penghuni</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="alamat_penghuni" id="#"
                                value="<?= $data['penghuni']['alamat']; ?>" readonly>
                        </div>
                        <div class="input-pemesanan">
                            <label for="id_kost">Nomor HP Aktif</label>
                            <input type="text" placeholder="Masukkan ID Kost" name="no_hp" id="#"
                                value="<?= $data['penghuni']['no_hp']; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-pemesanan">
                <div class="informasi-booking">
                    <p>Informasi Booking</p>
                    <div class="detail-pemesanan">
                        <p><?= $data['pemesanan']['nama_kost']; ?></p>
                        <div class="sub-detail-pemesanan">
                            <p>Kategori Pembayaran : </p>
                            <p id="kategori-pembayaran" name="kategori"><?php echo $_SESSION['pilihan_harga'] ?></p>
                        </div>
                        <div class="sub-detail-pemesanan">
                            <p>Harga Kost :</p>
                            <p name="harga">Rp <?php echo $_SESSION['harga'] ?></p>
                        </div>
                    </div>
                    <div class="total-pembayaran">
                        <p>Total Pembayaran : </p>
                        <p>Rp <?php echo $_SESSION['harga'] ?></p>
                    </div>
                    <div class="title-pembayaran">
                        <p>Pembayaran Via :</p>
                    </div>
                    <div class="via-pembayaran">
                        <div class="row-pembayaran">
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="BCA">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/BCA.png" alt="">
                            </div>
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="BRI">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/BRI.png" alt="">
                            </div>
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="BNI">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/bni.png" alt="">
                            </div>
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="Mandiri">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/MANDIRI.png" alt="">
                            </div>
                        </div>
                        <div class="row-pembayaran">
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="Dana">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/DANA.png" alt="">
                            </div>
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="Gopay">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/gopay.png" alt="">
                            </div>
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="Shoope Pay">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/shopeepay.png" alt="">
                            </div>
                            <div class="opsi-pembayaran">
                                <input type="radio" name="metode_pembayaran" id="" value="OVO">
                                <img src="<?php echo BASEURL; ?>image/pembayaran/ovo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="informasi-pembayaran">
                    <p>Bukti Pembayaran</p>
                    <img src="<?php echo BASEURL; ?>image/pembayaran/qris.png" alt="" id="logo-qris">
                    <img src="<?php echo BASEURL; ?>image/pembayaran/qrcode.png" alt="" style="width: 50%;">
                    <input type="file" id="input-bukti" name="bukti_tf">
                </div>
                <button type="submit" id="btn-pesan-sekarang">Bayar Sekarang</button>
                <!-- <a href="<?php echo BASEURL; ?>pemesanan_kost/" id="btn-pesan-sekarang" type="submit">Bayar Sekarang</a> -->
            </div>
        </form>
    </section>
    <footer>
        <div class="top-footer">
            <div class="left-footer">
                <img src="<?php echo BASEURL; ?>image/logo-jkost.png" alt="">
                <p>Our vision is to provide convenience and help increase your sales business.</p>
                <div class="kumpulan-medsos">
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                </div>
            </div>
            <div class="right-footer">
                <div class="content-right-footer">
                    <p class="judul-right-footer">About</p>
                    <p>How it works</p>
                    <p>Featured</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
                <div class="content-right-footer">
                    <p class="judul-right-footer">Comunity</p>
                    <p>Event</p>
                    <p>Blog</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
                <div class="content-right-footer">
                    <p class="judul-right-footer">Sosial</p>
                    <p>How it works</p>
                    <p>Featured</p>
                    <p>Partnership</p>
                    <p>Bussiness Relation</p>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>©2023 J-Kost. All rights reserved</p>
            <div class="right-bottom-footer">
                <p>Privacy & Policy</p>
                <p>Terms & Condition</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#pilihan-harga').on('change', function() {
            // Mendapatkan harga berdasarkan kategori yang dipilih
            var hargaBulanan = <?= json_encode($data['kamar']['harga_bulanan']); ?>;
            var hargaHarian = <?= json_encode($data['kamar']['harga_harian']); ?>;
            var harga3Bulanan = <?= json_encode($data['kamar']['harga_3bulanan']); ?>;
            var hargaTahunan = <?= json_encode($data['kamar']['harga_tahunan']); ?>;

            var pilihanHarga = $(this).val();
            var hargaDisplay = $('#harga-display');
            var spanDisplay = $('#span-harga-display');

            // Menampilkan harga berdasarkan kategori yang dipilih
            switch (pilihanHarga) {
                case 'harian':
                    hargaDisplay.text('Rp ' + hargaHarian);
                    spanDisplay.text('/ hari');
                    break;
                case 'bulanan':
                    hargaDisplay.text('Rp ' + hargaBulanan);
                    spanDisplay.text('/ bulan');
                    break;
                case '3bulanan':
                    hargaDisplay.text('Rp ' + harga3Bulanan);
                    spanDisplay.text('/ 3 bulan');
                    break;
                case 'tahunan':
                    hargaDisplay.text('Rp ' + hargaTahunan);
                    spanDisplay.text('/ tahun');
                    break;
                default:
                    hargaDisplay.text('Invalid');
                    spanDisplay.text('');
            }
        });
    });
    </script>

</body>

</html>