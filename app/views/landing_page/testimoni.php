<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/detail_kamar.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/testimoni.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>image/project logo j-kost white 1.png">
    <title>Halaman Kamar</title>
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

    <section id="testimoni">

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
    <!-- <script>
        document.getElementById('pilihan-harga').addEventListener('change', function() {
            updateHarga();
        });

        function updateHarga() {
            var pilihanHarga = $('.pilihan-harga').val();
            var hargaBulanan = <?php $data['kamar']['harga_bulanan']; ?>;
            var hargaHarian = <?php $data['kamar']['harga_harian']; ?>;
            var harga3Bulan = <?php $data['kamar']['harga_3bulanan']; ?>; =
            var hargaTahunan = <?php $data['kamar']['harga_tahunan']; ?>;

            var hargaDisplay = document.getElementById('harga-display');

            switch (pilihanHarga) {
                case 'harian':
                    hargaDisplay.innerText = 'Rp ' + hargaHarian + ' (Per Hari)';
                    break;
                case 'bulanan':
                    hargaDisplay.innerText = 'Rp ' + hargaBulanan + ' (Per Bulan)';
                    break;
                case '3bulanan':
                    hargaDisplay.innerText = 'Rp ' + harga3Bulan + ' (Untuk 3 Bulan)'; 
                    break;
                case 'tahunan':
                    hargaDisplay.innerText = 'Rp ' + hargaTahunan + ' (Per Tahun)';
                    break;
            }
        }
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#pilihan-harga').on('change', function() {
            var hargaBulanan =
                <?php echo isset($data['kamar']['harga_bulanan']) ? $data['kamar']['harga_bulanan'] : "null"; ?>;
            var hargaHarian =
                <?php echo isset($data['kamar']['harga_harian']) ? $data['kamar']['harga_harian'] : "null"; ?>;
            var harga3Bulanan =
                <?php echo isset($data['kamar']['harga_3bulanan']) ? $data['kamar']['harga_3bulanan'] : "null"; ?>;
            var hargaTahunan =
                <?php echo isset($data['kamar']['harga_tahunan']) ? $data['kamar']['harga_tahunan'] : "null"; ?>;
            var spanHarian = "/ hari";
            var spanBulanan = "/ bulan";
            var span3Bulan = "/ 3 bulan";
            var spanTahunan = "/ tahun";
            var harga = null;

            var pilihanHarga = $('#pilihan-harga').val();
            var hargaDisplay = $('#harga-display');
            var spanDisplay = $('#span-harga-display');

            if (pilihanHarga === 'harian') {
                harga = hargaHarian;
                hargaDisplay.text('Rp ' + harga);
                spanDisplay.text(spanHarian);
            } else if (pilihanHarga === 'bulanan') {
                harga = hargaBulanan;
                hargaDisplay.text('Rp ' + harga);
                spanDisplay.text(spanBulanan);
            } else if (pilihanHarga === '3bulanan') {
                harga = harga3Bulanan;
                hargaDisplay.text('Rp ' + harga);
                spanDisplay.text(span3Bulan);
            } else if (pilihanHarga === 'tahunan') {
                harga = hargaTahunan;
                hargaDisplay.text('Rp ' + harga);
                spanDisplay.text(spanTahunan);
            } else if (pilihanHarga === null) {
                hargaDisplay.text('null');
            }
        });
    });
    </script>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
</script>

</html>