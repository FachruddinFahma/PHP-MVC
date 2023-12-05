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
                                    <h6 class="text-muted font-semibold">Total Testimoni</h6>
                                    <h6 class="font-extrabold mb-0"><?= $data['total_testimoni']; ?></h6>
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
                                    <h6 class="text-muted font-semibold">Jumlah Pemilik Kost</h6>
                                    <h6 class="font-extrabold mb-0"><?= $data['total_pemilik']; ?></h6>
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
                                    <h6 class="text-muted font-semibold">Jumlah Penyewa Kost</h6>
                                    <h6 class="font-extrabold mb-0"><?= $data['total_penyewa']; ?></h6>
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
                                    <h6 class="text-muted font-semibold">Jumlah Kost</h6>
                                    <h6 class="font-extrabold mb-0"><?= $data['total_kost']; ?></h6>
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
                                    <h5 class="mb-3">Data Kost</h5>
                                    <table class="table table-hover p-3 small">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Kost</th>
                                                <th scope="col">Jumlah Kamar</th>
                                                <th scope="col">Nama Pemilik</th>
                                                <th scope="col">Nomor Hp</th>
                                                <th scope="col">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data['kost'] as $kost) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i++; ?></th>
                                                    <td><?php echo $kost['nama_kost']; ?></td>
                                                    <td><?php echo $kost['jumlah_kamar']; ?></td>
                                                    <td><?php echo $kost['nama_lengkap']; ?></td>
                                                    <td><?php echo $kost['no_hp']; ?></td>
                                                    <td><?php echo $kost['alamat']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
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
                                    <h5>Daftar Pengguna</h5>
                                </div>
                                <?php
                                $limaData_penghuni = array_slice($data['pengguna'], 0, 4);
                                foreach ($data['pengguna'] as $png) :
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