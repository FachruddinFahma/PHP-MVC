<<!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/data-user.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <section id="home" class="content">
            <div id="container-button" class="w-full">
                <div id="container-button-belumVerifikasi">
                    <h4 id="button-belumVerifikasi">Kost belum Diverifikasi</h4>
                    <span class="line-active"></span>
                </div>
                <div id="container-button-sudahVerifikasi">
                    <h4 id="button-sudahVerifikasi">Kost sudah Diverifikasi</h4>
                    <!-- <span class="line-active"></span> -->
                </div>
            </div>
            <div id="line">
                <span class="line-border"></span>
                <span class="line-bold"></span>
            </div>
            <div class="col-md-8e p-5">
                <div class="card-body bg-white p-4" style="border-radius: 18px;">
                    <table class="table table-hover small" class="dataDiverifikasi" id="tableBelumVerifikasi">
                        <thead>
                            <tr>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['kostMasuk'] as $kost) : ?>
                                <tr>
                                    <td><?= $kost['nama_kost']; ?></td>
                                    <td><?= $kost['nama_lengkap']; ?></td>
                                    <td><?= $kost['no_hp']; ?></td>
                                    <td><?= $kost['status']; ?></td>
                                    <td>
                                        <a class="btn_terima btn btn-success" href="http://localhost/PHP-MVC/public/dataKost_Admin/terima/<?php echo $kost['id_kost'] ?>"><i class="ri-check-line"></i></a>
                                        <a class="btn_tolak btn btn-danger" href="http://localhost/PHP-MVC/public/dataKost_Admin/tolak/<?php echo $kost['id_kost'] ?>"><i class="ri-close-line"></i></a>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $kost['id_kost'] ?>"><i class="fa-solid fa-circle-info"></i></button>
                                    </td>
                                </tr>
                            <?php include "modal.php"; endforeach; ?>
                        </tbody>
                    </table>

                    <table class="table table-hover small" class="dataDiverivikasi" id="tableVerifikasi">
                        <thead>
                            <tr>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Jumlah Kamar</th>
                                <th scope="col">No Hp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['kostTerkonfirmasi'] as $kost) : ?>
                                <tr>
                                    <td><?= $kost['nama_kost']; ?></td>
                                    <td><?= $kost['nama_lengkap']; ?></td>
                                    <td><?= $kost['no_hp']; ?></td>
                                    <td><?= $kost['status']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#tableBelumVerifikasi").show();
                $("#tableVerifikasi").hide();
                $("#pemesanan_content_terkonfirmasi").hide();

                var initialPosition = $(".line-active").position().left;

                $("#button-belumVerifikasi").click(function() {
                    $("#tableBelumVerifikasi").show();
                    $("#tableVerifikasi").hide();
                });

                $("#button-sudahVerifikasi").click(function() {
                    $("#tableVerifikasi").show();
                    $("#tableBelumVerifikasi").hide();
                });
            });
        </script>
    </body>
    </html>