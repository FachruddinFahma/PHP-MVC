<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/pemesanan.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</header>
<section id="pemesanan" class="content">
    <div id="pemesanan_top" class="w-full">
        <div id="pesanan_masuk">
            <h4 id="pesanan-masuk">Pesanan Masuk</h4>
            <span class="line-active"></span>
        </div>
        <div id="pesanan_terkonfirmasi">
            <h4 id="pesanan-terkonfimasi">Pesanan Terkonfirmasi</h4>
            <!-- <span class="line-active"></span> -->
        </div>
    </div>
    <div id="line">
        <span class="line-border"></span>
        <span class="line-bold"></span>
    </div>
    <div id="pemesanan_content_masuk">
        <table id="dataPemesanan1" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Pemesanan</th>
                    <th>ID Kamar</th>
                    <th>ID User</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Masuk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['pemesananMasuk'] as $pesananMasuk) {
                ?>
                    <tr>
                        <td><?php echo $pesananMasuk['id_pemesanan'] ?></td>
                        <td><?php echo $pesananMasuk['id_kamar'] ?></td>
                        <td><?php echo $pesananMasuk['id_user'] ?></td>
                        <td>22 Oktober 2003</td>
                        <td><?php echo $pesananMasuk['tggl_masuk'] ?></td>
                        <td><?php echo $pesananMasuk['harga'] ?></td>
                        <td>
                            <a class="btn_terima" href="http://localhost/PHP-MVC/public/pemesanan/terima/<?php echo $pesananMasuk['id_pemesanan'] ?>"><i class="ri-check-line"></i></a>
                            <a class="btn_tolak" href="http://localhost/PHP-MVC/public/pemesanan/tolak/<?php echo $pesananMasuk['id_pemesanan'] ?>"><i class="ri-close-line"></i></a>
                            <a class="btn_detail" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $pesananMasuk['id_pemesanan'] ?>">
                                <i class="ri-more-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    include "modal.php";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div id="pemesanan_content_terkonfirmasi">
        <table id="dataPemesanan2" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Pemesanan</th>
                    <th>ID Kamar</th>
                    <th>ID User</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Masuk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['pemesananTerkonfirmasi'] as $pesananTerkonfirmasi) {
                ?>
                    <tr>
                        <td><?php echo $pesananTerkonfirmasi['id_pemesanan'] ?></td>
                        <td><?php echo $pesananTerkonfirmasi['id_kamar'] ?></td>
                        <td><?php echo $pesananTerkonfirmasi['id_user'] ?></td>
                        <td>17 Agustus 1945</td>
                        <td><?php echo $pesananTerkonfirmasi['tggl_masuk'] ?></td>
                        <td><?php echo $pesananTerkonfirmasi['harga'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#pemesanan_content_terkonfirmasi").hide();

        var initialPosition = $(".line-active").position().left;

        $("#pesanan_masuk").click(function() {
            $("#pemesanan_content_masuk").show();
            $("#pemesanan_content_terkonfirmasi").hide();

            $(this).addClass("active");
            $("#pesanan_terkonfirmasi").removeClass("active");

            $(".line-active").css("left", initialPosition);
        });

        $("#pesanan_terkonfirmasi").click(function() {
            $("#pemesanan_content_terkonfirmasi").show();
            $("#pemesanan_content_masuk").hide();

            $(".line-active").css("left", "650px");

            $(this).addClass("active");
            $("#pesanan_masuk").removeClass("active");
        });
    });
</script>