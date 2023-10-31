<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar.css">
</head>

<body>
    <section id="kamar" class="content">
        <div class="top">
            <label for="option">Filter : </label>
            <select name="option" id="cars">
                <option value="Kamar Termahal">Kamar Termahal</option>
                <option value="Kamar Termurah">Kamar Termurah</option>
                <option value="Kamar Kosong">Kamar Kosong</option>
                <option value="Kamar Terisi">Kamar Terisi</option>
            </select>
            <input class="input-search" type="text" placeholder="Search">
            <button class="button-search">Cari Kamar</button>
            <button class="tambah-kamar" data-bs-toggle="modal" data-bs-target="#modal-identitas"> <span>+</span> Tambah Kamar</button>
        </div>
        <div class="bottom">
            <h1>halo</h1>
            <table class="table table-hover small" id="kamarTable">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kamar</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $item) {
                    ?>
                        <tr>
                            <th scope="col"><?php echo $item['id_kamar'] ?></th>
                            <th scope="col"><?php echo $item['fasilitas'] ?></th>
                            <th scope="col"><?php echo $item['ukuran'] ?></th>
                            <th scope="col"><?php echo $item['harga'] ?></th>
                            <th scope="col">Kosong</th>
                            <th scope="col">
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                            </th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
        <!-- modal identitas -->
        <div class="modal fade" id="modal-identitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Input Data Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="progress-data">
                        <div id="progress-data-kamar" class="active-data actived">
                            <div class="angka">
                                <p>1</p>
                            </div>
                            <p class="title-progress">Data Kamar</p>
                        </div>
                        <div id="progress-foto" class="active-data">
                            <div class="angka">
                                <p>2</p>
                            </div>
                            <p class="title-progress">Foto Kamar</p>
                        </div>
                        <div id="progress-verifikasi" class="active-data">
                            <div class="angka">
                                <p>3</p>
                            </div>
                            <p>Verifikasi</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="input mb-3">
                            <div class="input-group">
                                <label for="id_kamar">ID Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan ID Kamar" id="id_kamar">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Nama Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan Nama Kamar" id="nama_kamar">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Fasilitas Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan Fasilitas Kamar" id="fasilitas_kamar">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Ukuran Kamar</label>
                                <div id="input-ukuran-kamar">
                                    <input type="text" class="form-controll" placeholder="Panjang" id="ukuran_kamar">
                                    <p> X </p>
                                    <input type="text" class="form-controll" placeholder="Lebar" id="ukuran_kamar">
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Harga Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan Harga Kamar" id="id_kamar">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary me-auto back" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-foto">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal foto-->
        <div class="modal fade" id="modal-foto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Input Foto Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="progress-data">
                        <div id="progress-data-kamar" class="active-data">
                            <div class="angka">
                                <p>1</p>
                            </div>
                            <p class="title-progress">Data Kamar</p>
                        </div>
                        <div id="progress-foto" class="active-data actived">
                            <div class="angka">
                                <p>2</p>
                            </div>
                            <p class="title-progress">Foto Kamar</p>
                        </div>
                        <div id="progress-verifikasi" class="active-data">
                            <div class="angka">
                                <p>3</p>
                            </div>
                            <p>Verifikasi</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="foto mb-3">
                            <div class="foto-group">
                                <button>Gambar</button>
                            </div>
                            <div class="foto-group">
                                <button>Gambar</button>
                            </div>
                            <div class="foto-group">
                                <button>Gambar</button>
                            </div>
                            <div class="foto-group">
                                <button>Gambar</button>
                            </div>
                            <div class="foto-group">
                                <button>Gambar</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary me-auto back" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-indentitas">Kembali</button>
                        <button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-verifikasi">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal identitas -->
        <div class="modal fade" id="modal-verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Input Data Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="progress-data">
                        <div id="progress-data-kamar" class="active-data">
                            <div class="angka">
                                <p>1</p>
                            </div>
                            <p class="title-progress">Data Kamar</p>
                        </div>
                        <div id="progress-foto" class="active-data">
                            <div class="angka">
                                <p>2</p>
                            </div>
                            <p class="title-progress">Foto Kamar</p>
                        </div>
                        <div id="progress-verifikasi" class="active-data actived">
                            <div class="angka">
                                <p>3</p>
                            </div>
                            <p>Verifikasi</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="input mb-3">
                            <div class="input-group">
                                <label for="id_kamar">ID Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan ID Kamar" id="id_kamar">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Nama Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan Nama Kamar" id="nama_kamar">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Fasilitas Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan Fasilitas Kamar" id="fasilitas_kamar">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Ukuran Kamar</label>
                                <div id="input-ukuran-kamar">
                                    <input type="text" class="form-controll" placeholder="Panjang" id="ukuran_kamar">
                                    <p> X </p>
                                    <input type="text" class="form-controll" placeholder="Lebar" id="ukuran_kamar">
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Harga Kamar</label>
                                <input type="text" class="form-controll" placeholder="Masukan Harga Kamar" id="id_kamar">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary me-auto back" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-foto">Kembali</button>
                        <button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable("#kamarTable", {
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
                {
                    "orderable": false,
                    "targets": 6
                },
            ]
        });
    </script>
</body>

</html>