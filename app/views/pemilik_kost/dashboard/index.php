    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/dashboard.css">
        <title>Halaman <?= $data['judul']; ?></title>
    </head>

    <body>
        <section id="home" class="content">
            <div class="container p-4">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="fa-solid fa-star"></i>
                                            <!-- icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Total Komplain</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $data['total_komplain']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="fa-solid fa-users"></i>
                                            <!-- icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Penghuni</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $data['total_penghuni']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="fa-solid fa-bed"></i>
                                            <!-- icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Kamar</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $data['total_kamar']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="fa-solid fa-dollar-sign"></i>
                                            <!-- icon -->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Total Pendapatan</h6>
                                        <h6 class="font-extrabold mb-0">Rp. 6.000.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card-container col-9">
                        <div name="chart_card" class="card mt-4">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col">
                                        <h5>Grafik Transaksi</h5>
                                        <div class="card-body">
                                            <div id="chart-profile-visit"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div name="history_card" class="card mt-4 mb-4">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">

                                    <div class="col">
                                        <h5 class="mb-3">History Pembayaran</h5>

                                        <table class="table table-hover p-3 small">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Tanggal Transaksi</th>
                                                    <th scope="col">Nomor Kamar</th>
                                                    <th scope="col">Bayar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($data['transaksi'] as $trank) :
                                            ?>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><?php echo $trank['nama_lengkap']; ?></td>
                                                    <td><?php echo $trank['tggl_transaksi']; ?></td>
                                                    <td><?php echo $trank['nama_kamar']; ?></td>
                                                    <td><?php echo $trank['harga']; ?></td>
                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-container col-3">
                        <div name="chart_card" class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5>Daftar Penghuni</h5>
                                    </div>
                                    <?php
                                    $limaData_penghuni = array_slice($data['penghuni'], 0, 5);

                                    foreach ($data['penghuni'] as $png) :
                                    ?>
                                    <div class="card-content">
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                            <img src="<?php echo BASEURL . 'foto/' . $png['foto_user']; ?>" style="width: 60px;" />
                                            </div>
                                            <div class="name ms-4">
                                                <p class="mb-1"><?php echo $png['nama_lengkap']; ?></p>
                                                <p class="text-muted mb-0"><?php echo $png['no_hp']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </body>

    </html>