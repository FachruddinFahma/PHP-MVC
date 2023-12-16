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
                <div id="container-button-pemilik">
                    <h4 id="button-pemilik">Data Pemilik Kost</h4>
                    <span class="line-active"></span>
                </div>
                <div id="container-button-penyewa">
                    <h4 id="button-penyewa">Data Penyewa Kost</h4>
                    <!-- <span class="line-active"></span> -->
                </div>
            </div>
            <div id="line">
                <span class="line-border"></span>
                <span class="line-bold"></span>
            </div>
            <div class="col-md-8e p-5">
                <div class="card-body bg-white p-4" style="border-radius: 18px;">
                    <table class="table table-hover small" class="dataPenyewa" id="tablePemilik">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No HP</th>
                                <th style="width:250px" scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['DataPemilik_Admin'] as $d) {
                            ?>
                            <tr>
                                <td><?= $d['id_user'] ?></td>
                                <td><?= $d['nama_lengkap'] ?></td>
                                <td><?= $d['nama_kost'] ?></td>
                                <td><?= $d['jenis_kelamin'] ?></td>
                                <td><?= $d['no_hp'] ?></td>
                                <td><?= $d['alamat'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <table class="table table-hover small" class="dataPenyewa" id="tablePenyewa">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No HP</th>
                                <th style="width:250px" scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['DataPenyewa_Admin'] as $d) {
                            ?>
                            <tr>
                                <td><?= $d['id_user'] ?></td>
                                <td><?= $d['nama_lengkap'] ?></td>
                                <td><?= $d['nama_kost'] ?></td>
                                <td><?= $d['jenis_kelamin'] ?></td>
                                <td><?= $d['no_hp'] ?></td>
                                <td><?= $d['alamat'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
        $(document).ready(function() {
            $("#tablePenyewa").hide();
            $("#button-pemilik").addClass("active");

            var initialPosition = $(".line-active").position().left;

            $("#button-pemilik").click(function() {
                $("#tablePemilik").show();
                $("#tablePenyewa").hide();

                $(this).addClass("active");
                $("#button-penyewa").removeClass("active");

                $(".line-active").css("left", initialPosition);
            });

            $("#button-penyewa").click(function() {
                $("#tablePemilik").hide();
                $("#tablePenyewa").show();

                $(".line-active").css("left", "650px");

                $(this).addClass("active");
                $("#button-pemilik").removeClass("active");
            });
        });
        </script>
        <script>
        new DataTable("#tablePenyewa", {
            info: false,
            "columnDefs": [{
                    "orderable": true,
                    "targets": 0
                },
                {
                    "orderable": false,
                    "targets": 1
                },
                {
                    "orderable": true,
                    "targets": 2
                },
                {
                    "orderable": false,
                    "targets": 3
                },
                {
                    "orderable": false,
                    "targets": 4
                },
                {
                    "orderable": false,
                    "targets": 5
                },
            ]
        });
        </script>
    </body>

    </html>