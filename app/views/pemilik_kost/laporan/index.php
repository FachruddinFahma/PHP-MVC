<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/laporan.css">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title><?php $data['judul'] ?></title>
</head>

<body>
    <section id="laporan" class="content">
        <h6>Silahkan cari data berdasarkan tanggal</h6>
        <div class="cari-tanggal">
            <div class="label-input-group date1">
                <label for="">Tanggal Awal</label>
                <input type="date">
            </div>
            <div class="label-input-group date2">
                <label for="">Tanggal akhir</label>
                <input type="date">
            </div>
            <div class="label-input-group">
                <button class="btn btn-primary">Cari</button>
            </div>
        </div>
        <div class="col-md-8e p-5">
            <div class="card-body bg-white p-4" style="border-radius: 18px;">
                <table class="table table-hover small" id="dataLaporan">
                    <thead>
                        <tr>
                            <th scope="col">No Transaksi</th>
                            <th scope="col">Nama Penghuni</th>
                            <th scope="col">Harga Kamar</th>
                            <th scope="col">Bayar</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Bukti TF</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tr>
                            <td>TR00101</td>
                            <td>Farhan</td>
                            <td>500000</td>
                            <td>500000</td>
                            <td>09-11-2023</td>
                            <td>Gambar</td>
                            <td>Lunas</td>
                            <td>Bayar Bulan November</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-circle-info"></i></button>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</body>

</html>