<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/pemesanan.css">
</header>
<section id="pemesanan" class="content">
    <div id="pemesanan_top" class="w-full">
        <div id="pesanan_masuk">
            <h4>Pesanan Masuk</h4>
            <span class="line-active"></span>
        </div>
        <div id="pesanan_terkonfirmasi">
            <h4>Pesanan Terkonfirmasi</h4>
            <!-- <span class="line-active"></span> -->
        </div>
    </div>
    <div id="line">
        <span class="line-border"></span>
        <span class="line-bold"></span>
    </div>
    <div id="pemesanan_content">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Fasilitas</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i <= 100; $i++) {
                ?>
                    <tr>
                        <td>ID<?php echo $i ?></td>
                        <td>Wifi, Kamar Mandi</td>
                        <td>2 x 2 m</td>
                        <td>800,000</td>
                        <td>Kosong</td>
                        <td>Terima</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>