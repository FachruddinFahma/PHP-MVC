<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar.css">
</header>
<section id="kamar" class="content">    
    <div id="kamar_content" class="pt-4 px-4">
        <a href="" class="add" data-bs-toggle="modal" data-bs-target="#modal-identitas">Tambah</a>
        <table id="dataKamar" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Fasilitas</th>
                    <th>Kategori</th>
                    <th>Ukuran</th>
                    <th>Harga Harian</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                ini_set('display_errors', 1);
                foreach ($data['kamar'] as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['id_kamar'] ?></td>
                        <td><?php echo $item['fasilitas'] ?></td>
                        <td><?php echo $item['kategori'] ?></td>
                        <td><?php echo $item['ukuran'] ?></td>
                        <td><?php echo $item['harga_bulanan'] ?></td>
                        <td>Kosong</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="http://localhost/PHP-MVC/public/kamar/hapusKamar?id_kamar=<?php echo $item['id_kamar'] ?>" onclick="return confirm('Hapus data nihhh?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
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
                    <form action="http://localhost/PHP-MVC/public/kamar/addKamar" method="post">
                        <div class="input-group" hidden>
                            <label for="id_kamar">ID Kamar</label>
                            <input type="text" name="id_kamar" class="form-controll" placeholder="Masukan ID Kamar" id="id_kamar" value="<?php echo $data['id_baru']    ?>" readonly>
                        </div>
                        <div class="input-group">
                            <label for="nama_kamar">Nama Kamar</label>
                            <input type="text" name="nama_kamar" class="form-controll" placeholder="Masukan Nama Kamar" id="nama_kamar">
                        </div>
                        <div class="input-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" class="form-controll" placeholder="Masukan Nama Kamar" id="kategori">
                        </div>
                        <div class="input-group">
                            <label for="id_kamar">Fasilitas Kamar</label>
                            <input type="text" name="fasilitas" class="form-controll" placeholder="Masukan Fasilitas Kamar" id="fasilitas_kamar">
                        </div>
                        <div class="input-group">
                            <label for="id_kamar">Ukuran Kamar</label>
                            <div id="input-ukuran-kamar">
                                <input type="text" name="ukuran" class="form-controll" placeholder="Panjang" class="ukuran_kamar">
                                <p> X </p>
                                <input type="text" class="form-controll" placeholder="Lebar" class="ukuran_kamar">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="harga_harian">Harga Harian</label>
                            <input type="text" name="harga_harian" class="form-controll" placeholder="Masukan Harga Kamar" id="harga_harian">
                        </div>
                        <div class="input-group">
                            <label for="harga_bulan">Harga Bulan</label>
                            <input type="text" name="harga_bulanan" class="form-controll" placeholder="Masukan Harga Kamar" id="harga_bulan">
                        </div>
                        <div class="input-group">
                            <label for="harga_3bulan">Harga 3 Bulan</label>
                            <input type="text" name="harga_3bulan" class="form-controll" placeholder="Masukan Harga Kamar" id="harga_3bulan">
                        </div>
                        <div class="input-group">
                            <label for="harga_tahun">Harga Tahunan</label>
                            <input type="text" name="harga_tahunan" class="form-controll" placeholder="Masukan Harga Kamar" id="harga_tahun">
                        </div>
                        <!-- <div class="input-group">
                            <label for="id_kost">ID Kost</label>
                            <input type="text" name="id_kost" class="form-controll" placeholder="Masukan Harga Kamar" id="id_kost">
                        </div> -->
                        <button type="submit">Tambah</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary me-auto back" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-foto" onclick="saveDataAndOpenModal('modal-foto')">Selanjutnya</button>
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
                        <img src="http://localhost/PHP-MVC/public/image/kamar/kamar1.jpg" alt="foto kamar">
                        <input type="file" name="foto1">
                    </div>
                    <div class="foto-group">
                        <img src="http://localhost/PHP-MVC/public/image/kamar/kamar1.jpg" alt="foto kamar">
                        <input type="file" name="foto2">
                    </div>
                    <div class="foto-group">
                        <img src="http://localhost/PHP-MVC/public/image/kamar/kamar1.jpg" alt="foto kamar">
                        <input type="file" name="foto3">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <<button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-identitas">Kembali</button>
                    <button type="button" class="btn btn-primary next" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-verifikasi">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    function saveDataAndOpenModal(nextModalId) {
        var idKamar = document.getElementById('id_kamar').value;
        var namaKamar = document.getElementById('nama_kamar').value;
        var fasilitasKamar = document.getElementById('fasilitas_kamar').value;
        var ukuranPanjang = document.getElementById('ukuran_kamar_panjang').value;
        var ukuranLebar = document.getElementById('ukuran_kamar_lebar').value;
        var hargaKamar = document.getElementById('harga_kamar').value;

        sessionStorage.setItem('idKamar', idKamar);
        sessionStorage.setItem('namaKamar', namaKamar);
        sessionStorage.setItem('fasilitasKamar', fasilitasKamar);
        sessionStorage.setItem('ukuranPanjang', ukuranPanjang);
        sessionStorage.setItem('ukuranLebar', ukuranLebar);
        sessionStorage.setItem('hargaKamar', hargaKamar);

        $('#' + nextModalId).modal('show');
    }

    function populateDataFromStorage() {
        document.getElementById('id_kamar').value = sessionStorage.getItem('idKamar');
        document.getElementById('nama_kamar').value = sessionStorage.getItem('namaKamar');
        document.getElementById('fasilitas_kamar').value = sessionStorage.getItem('fasilitasKamar');
        document.getElementById('ukuran_kamar_panjang').value = sessionStorage.getItem('ukuranPanjang');
        document.getElementById('ukuran_kamar_lebar').value = sessionStorage.getItem('ukuranLebar');
        document.getElementById('harga_kamar').value = sessionStorage.getItem('hargaKamar');
    }

    $('#modal-identitas').on('shown.bs.modal', function() {
        populateDataFromStorage();
    });

    window.onload = function() {
        sessionStorage.clear();
    };
</script>