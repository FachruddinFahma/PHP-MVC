<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/pemesanan.css">
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
                for ($i = 0; $i <= 30; $i++) {
                ?>
                    <tr>
                        <td>ID001</td>
                        <td>Wifi, Kamar Mandi</td>
                        <td>2 x 2 m</td>
                        <td><?php echo $i ?>00,000</td>
                        <td>Kosong</td>
                        <td>Terima</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div id="pemesanan_content_terkonfirmasi">
        <table id="dataPemesanan2" class="display" style="width:100%">
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
                for ($i = 0; $i <= 30; $i++) {
                ?>
                    <tr>
                        <td>ID002</td>
                        <td>Wifi, Kamar Mandi</td>
                        <td>2 x 2 m</td>
                        <td><?php echo $i ?>00,000</td>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#pemesanan_content_terkonfirmasi").hide();

        $("#pesanan_masuk").click(function() {
            $("#pemesanan_content_masuk").show();
            $("#pemesanan_content_terkonfirmasi").hide();

            $(this).addClass("active");
            $("#pesanan_terkonfirmasi").removeClass("active");
        });

        $("#pesanan_terkonfirmasi").click(function() {
            $("#pemesanan_content_terkonfirmasi").show();
            $("#pemesanan_content_masuk").hide();

            $(this).addClass("active");
            $("#pesanan_masuk").removeClass("active");
        });
    });
</script>