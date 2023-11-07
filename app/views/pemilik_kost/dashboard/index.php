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
                                        <h6 class="text-muted font-semibold">Rating Kost</h6>
                                        <h6 class="font-extrabold mb-0">4,5</h6>
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
                                        <h6 class="font-extrabold mb-0">64</h6>
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
                                        <h6 class="font-extrabold mb-0">20</h6>
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Hakim</td>
                                                    <td>15 November 2023</td>
                                                    <td>Kamar 5</td>
                                                    <td>Rp.300.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Farhan</td>
                                                    <td>10 November 2023</td>
                                                    <td>Kamar 10</td>
                                                    <td>Rp.300.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Nico</td>
                                                    <td>3 November 2023</td>
                                                    <td>Kamar 2</td>
                                                    <td>Rp.300.000</td>
                                                </tr>
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

                                    <div class="card-content">
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost/PHP-MVC/public/image/user.png" />
                                            </div>
                                            <div class="name ms-4">
                                                <p class="mb-1">Nico Flassy</p>
                                                <p class="text-muted mb-0">+6281667584766</p>
                                            </div>
                                        </div>
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost/PHP-MVC/public/image/user.png" />
                                            </div>
                                            <div class="name ms-4">
                                                <p class="mb-1">Lutfi Hakim</p>
                                                <p class="text-muted mb-0">+6281334394400</p>
                                            </div>
                                        </div>
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost/PHP-MVC/public/image/user.png" />
                                            </div>
                                            <div class="name ms-4">
                                                <p class="mb-1">Farhan Aryanto</p>
                                                <p class="text-muted mb-0">+6281467387527</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </body>

    </html>