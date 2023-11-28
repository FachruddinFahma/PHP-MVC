<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar.css">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar2.css">
</header>
<section id="kamar" class="content">    
    <div id="kamar_content" class="pt-4 px-4">
        <a href="" class="add" data-bs-toggle="modal" data-bs-target="#modal-identitas">Tambah</a>
        <table id="dataKamar" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Nama Kamar</th>
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
                        <td><?php echo $item['nama_kamar'] ?></td>
                        <td><?php echo $item['fasilitas'] ?></td>
                        <td><?php echo $item['kategori'] ?></td>
                        <td><?php echo $item['ukuran'] ?></td>
                        <td><?php echo $item['harga_bulanan'] ?></td>
                        <td>Kosong</td>
                        <td>
                            <a href="#" id="btn-edit">Edit</a>
                            <a id="btn-hapus" href="http://localhost/PHP-MVC/public/kamar/hapusKamar/<?php echo $item['id_kamar'] ?>" onclick="return confirm('Hapus data nihhh?')">Delete</a>
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
            <div id="content1">
                <div class="modal-header">
                    <h5>Input Data Kamar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input mb-3">
                        <form id="form-input" action="http://localhost/PHP-MVC/public/kamar/addKamar" method="post">
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">ID Kamar Kamar</label>
                                    <input type="text" name="id_kamar" id="id_kamar" placeholder="masukan ID kamar" value="<?php echo $data['id_baru'] ?>" readonly>
                                </div>
                                <div class="input-group">
                                    <label for="">Nama Kamar</label>
                                    <input type="text" name="nama_kamar" id="nama_kamar" placeholder="masukan nama kamar">
                                </div>
                               
                            </div>
                            <div class="input-group" >
                                <label for="">Kategori</label>
                                <div id="group-kategori">
                                    <div class="kategori-group">
                                        <p>harian</p>
                                        <input type="checkbox" name="check_harian" id="check_harian"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>bulanan</p>
                                        <input type="checkbox" checked disabled name="check_bulanan" id="check_bulanan"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>3 bulan</p>
                                        <input type="checkbox" name="check_3bulan" id="check_3bulan"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>tahunan</p>
                                        <input type="checkbox" name="check_tahunan" id="check_tahunan"> 
                                    </div>
                                </div>
                            </div>
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">Ukuran</label>
                                    <div class="input-group-double">
                                        <input type="text" name="panjang_kamar" id="panjang_kamar" placeholder="panjang">
                                        <p>x</p>
                                        <input type="text" name="lebar_kamar" id="lebar_kamar" placeholder="lebar">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                    <label for="">Fasilitas</label>
                                    <textarea name="fasilitas_kamar" id="fasilitas_kamar" cols="30" rows="10" placeholder="masukan fasilitas"></textarea>
                            </div>
                                <div class="container-group">
                                    <div class="input-group" id="grup-input-bulanan">
                                        <label for="harga_bulanan" id="lbl_harga_bulanan">Harga Bulanan</label>
                                        <input type="text" name="harga_bulanan" id="harga_bulanan" placeholder="masukan harga bulanan">
                                    </div>
                                    <div class="input-group" id="grup-input-harian">
                                        <label for="harga_harian" id="lbl_harga_harian">Harga Harian</label>
                                        <input type="text" name="harga_harian" id="harga_harian" placeholder="masukan harga harian">
                                    </div>
                            </div>
                            </div>
                            <div class="container-group">
                                    <div class="input-group" id="grup-input-3bulanan">
                                        <label for="harga_3bulanan" id="lbl_harga_3bulanan">Harga 3 Bulanan</label>
                                        <input type="text" name="harga_3bulanan" id="harga_3bulanan" placeholder="masukan harga 3 bulan">
                                    </div>
                                    <div class="input-group" id="grup-input-tahunan">
                                        <label for="harga_tahunan" id="lbl_harga_tahunan">Harga Tahunan</label>
                                        <input type="text" name="harga_tahunan" id="harga_tahunan" placeholder="masukan harga tahunan">
                                    </div>
                            </div>
                        </form>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-back" id="back1">Kembali</button>
                    <button type="button" class="btn-next" id="next1" onclick="saveDataSession()">Selanjutnya</button>
                </div>
            </div>

            <!------------------------------------- CONTENT KAMAR 2 ---------------------------------->

            <div id="content2">
                <div class="modal-header">
                    <h5>Verikasi Data Kamar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input mb-3">
                        <form action="http://localhost/PHP-MVC/public/kamar/addKamar" method="post">
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">ID Kamar Kamar</label>
                                    <input type="text" name="id_kamar_fix" id="id_kamar_fix" placeholder="masukan ID kamar" readonly>
                                </div>
                                <div class="input-group">
                                    <label for="">Nama Kamar</label>
                                    <input type="text" name="nama_kamar_fix" id="nama_kamar_fix" placeholder="masukan nama kamar" readonly>
                                </div>
                               
                            </div>
                            <div class="input-group" >
                                <label for="">Kategori</label>
                                <div id="group-kategori">
                                    <div class="kategori-group">
                                        <p>harian</p>
                                        <input type="checkbox" name="check_harian_fix" id="check_harian_fix" disabled> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>bulanan</p>
                                        <input type="checkbox" checked disabled name="check_bulanan_fix" id="check_bulanan_fix"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>3 bulan</p>
                                        <input type="checkbox" name="check_3bulan_fix" id="check_3bulan_fix" disabled> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>tahunan</p>
                                        <input type="checkbox" name="check_tahunan_fix" id="check_tahunan_fix" disabled> 
                                    </div>
                                </div>
                            </div>
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">Ukuran</label>
                                    <div class="input-group-double">
                                        <input type="text" name="ukuran_kamar_panjang_fix" id="ukuran_kamar_panjang_fix" placeholder="panjang" readonly>
                                        <p>x</p>
                                        <input type="text" name="ukuran_kamar_lebar_fix" id="ukuran_kamar_lebar_fix" placeholder="lebar" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                    <label for="">Fasilitas</label>
                                    <textarea name="fasilitas_kamar_fix" id="fasilitas_kamar_fix" cols="30" rows="10" placeholder="masukan fasilitas"></textarea readonly>
                            </div>
                        </form>
                        <div class="container-group">
                                <div class="input-group" id="grup-input-bulanan">
                                    <label for="harga_bulanan_fix" id="lbl_harga_bulanan_fix">Harga Bulanan</label>
                                    <input type="text" name="harga_bulanan_fix" id="harga_bulanan_fix" placeholder="masukan harga bulanan" readonly>
                                </div>
                                <div class="input-group" id="grup-input-harian">
                                    <label for="harga_harian_fix" id="lbl_harga_harian_fix">Harga Harian</label>
                                    <input type="text" name="harga_harian_fix" id="harga_harian_fix" placeholder="masukan harga harian" readonly>
                                </div>
                        </div>
                    </div>
                    <div class="container-group">
                            <div class="input-group" id="grup-input-3bulanan">
                                <label for="harga_3bulanan_fix" id="lbl_harga_3bulanan_fix">Harga 3 Bulanan</label>
                                <input type="text" name="harga_3bulanan_fix" id="harga_3bulanan_fix" placeholder="masukan harga 3 bulan" readonly>
                            </div>
                            <div class="input-group" id="grup-input-tahunan">
                                <label for="harga_tahunan_fix" id="lbl_harga_tahunan_fix">Harga Tahunan</label>
                                <input type="text" name="harga_tahunan_fix" id="harga_tahunan_fix" placeholder="masukan harga tahunan" readonly>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-back" id="back2">Kembali</button>
                    <button type="button" class="btn-next" id="next2" >Tambah</button>
                </div>
            </div>

            <!------------------------------------- CONTENT MODAL EDIT---------------------------------->
            <div id="content_edit">
                <div class="modal-header">
                    <h5>Edit Data Kamar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input mb-3">
                        <form id="form-input" action="http://localhost/PHP-MVC/public/kamar/addKamar" method="post">
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">ID Kamar Kamar</label>
                                    <input type="text" name="id_kamar_edit" id="id_kamar_edit" placeholder="masukan ID kamar" value="<?php echo $data['id_baru'] ?>" readonly>
                                </div>
                                <div class="input-group">
                                    <label for="">Nama Kamar</label>
                                    <input type="text" name="nama_kamar_edit" id="nama_kamar_edit" placeholder="masukan nama kamar">
                                </div>
                            </div>
                            <div class="input-group" >
                                <label for="">Kategori</label>
                                <div id="group-kategori">
                                    <div class="kategori-group">
                                        <p>harian</p>
                                        <input type="checkbox" name="check_harian" id="check_harian"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>bulanan</p>
                                        <input type="checkbox" checked disabled name="check_bulanan" id="check_bulanan"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>3 bulan</p>
                                        <input type="checkbox" name="check_3bulan" id="check_3bulan"> 
                                    </div>
                                    <div class="kategori-group">
                                        <p>tahunan</p>
                                        <input type="checkbox" name="check_tahunan" id="check_tahunan"> 
                                    </div>
                                </div>
                            </div>
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">Ukuran</label>
                                    <div class="input-group-double">
                                        <input type="text" name="panjang_kamar_edit" id="panjang_kamar_edit" placeholder="panjang">
                                        <p>x</p>
                                        <input type="text" name="lebar_kamar_edit" id="lebar_kamar_edit" placeholder="lebar">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                    <label for="">Fasilitas</label>
                                    <textarea name="fasilitas_kamar_edit" id="fasilitas_kamar_edit" cols="30" rows="10" placeholder="masukan fasilitas"></textarea>
                            </div>
                            <div class="container-group">
                                    <div class="input-group" id="grup-input-bulanan">
                                        <label for="harga_bulanan" id="lbl_harga_bulanan">Harga Bulanan</label>
                                        <input type="text" name="harga_bulanan_edit" id="harga_bulanan_edit" placeholder="masukan harga bulanan">
                                    </div>
                                    <div class="input-group" id="grup-input-harian">
                                        <label for="harga_harian" id="lbl_harga_harian">Harga Harian</label>
                                        <input type="text" name="harga_harian_edit" id="harga_harian_edit" placeholder="masukan harga harian">
                                    </div>
                            </div>
                            </div>
                            <div class="container-group">
                                    <div class="input-group" id="grup-input-3bulanan">
                                        <label for="harga_3bulanan" id="lbl_harga_3bulanan">Harga 3 Bulanan</label>
                                        <input type="text" name="harga_3bulanan_Edit" id="harga_3bulanan_edit" placeholder="masukan harga 3 bulan">
                                    </div>
                                    <div class="input-group" id="grup-input-tahunan">
                                        <label for="harga_tahunan" id="lbl_harga_tahunan">Harga Tahunan</label>
                                        <input type="text" name="harga_tahunan_edit" id="harga_tahunan_edit" placeholder="masukan harga tahunan">
                                    </div>
                            </div>
                        </form>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-back" id="back1">Kembali</button>
                    <button type="button" class="btn-next" id="next1" onclick="saveDataSession()">Update</button>
                </div>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        //tombol next backk
        $("#content2").hide();

        $("#next1").click(function () {
            $("#content1").hide();
            $("#content2").show();
        });

        $("#back2").click(function () {
            $("#content1").show();
            $("#content2").hide();
        });

        //validasi check inputt
        $('#grup-input-harian').hide();
        $('#grup-input-3bulanan').hide();
        $('#grup-input-tahunan').hide();

        $('#check_harian').change(function () {
            $('#grup-input-harian').toggle(this.checked);
        });

        $('#check_3bulan').change(function () {
            $('#grup-input-3bulanan').toggle(this.checked);
        });

        $('#check_tahunan').change(function () {
            $('#grup-input-tahunan').toggle(this.checked);
        });

        //submit ketika klik tambah
        $("#next2").click(function () {
            $("#form-input").submit();
        });

        //ketika edit
        $('#btn-edit').click(function() {
            $("#content1").hide();
            $("#content2").hide();
            $("#content_edit").show();
        });
    });

    function saveDataSession() {
        var idKamar = $('#id_kamar').val();
        var namaKamar = $('#nama_kamar').val();
        var fasilitasKamar = $('#fasilitas_kamar').val();
        var ukuranPanjang = $('#panjang_kamar').val();
        var ukuranLebar = $('#lebar_kamar').val();
        var hargaHarian = $('#harga_harian').val();
        var hargaBulanan = $('#harga_bulanan').val();
        var harga3Bulanan = $('#harga_3bulanan').val();
        var hargaTahunan = $('#harga_tahunan').val();

        //checkbox ni boss
        var checkHarian = $('#check_harian').prop('checked');
        var check3Bulan = $('#check_3bulan').prop('checked');
        var checkTahunan = $('#check_tahunan').prop('checked');

        sessionStorage.setItem('idKamar', idKamar);
        sessionStorage.setItem('namaKamar', namaKamar);
        sessionStorage.setItem('fasilitasKamar', fasilitasKamar);
        sessionStorage.setItem('ukuranPanjang', ukuranPanjang);
        sessionStorage.setItem('ukuranLebar', ukuranLebar);
        sessionStorage.setItem('hargaHarian', hargaHarian);
        sessionStorage.setItem('hargaBulanan', hargaBulanan);
        sessionStorage.setItem('harga3Bulanan', harga3Bulanan);
        sessionStorage.setItem('hargaTahunan', hargaTahunan);

        //checked masuk session
        sessionStorage.setItem('checkHarian', checkHarian);
        sessionStorage.setItem('check3Bulan', check3Bulan);
        sessionStorage.setItem('checkTahunan', checkTahunan);

        showDataSession();
    }

    function showDataSession() {
        $('#id_kamar_fix').val(sessionStorage.getItem('idKamar'));
        $('#nama_kamar_fix').val(sessionStorage.getItem('namaKamar'));
        $('#fasilitas_kamar_fix').val(sessionStorage.getItem('fasilitasKamar'));
        $('#ukuran_kamar_panjang_fix').val(sessionStorage.getItem('ukuranPanjang'));
        $('#ukuran_kamar_lebar_fix').val(sessionStorage.getItem('ukuranLebar'));
        $('#harga_harian_fix').val(sessionStorage.getItem('hargaHarian'));
        $('#harga_bulanan_fix').val(sessionStorage.getItem('hargaBulanan'));
        $('#harga_3bulanan_fix').val(sessionStorage.getItem('harga3Bulanan'));
        $('#harga_tahunan_fix').val(sessionStorage.getItem('hargaTahunan'));

        $('#check_harian_fix').prop('checked', sessionStorage.getItem('checkHarian') === 'true');
        $('#check_3bulan_fix').prop('checked', sessionStorage.getItem('check3Bulan') === 'true');
        $('#check_tahunan_fix').prop('checked', sessionStorage.getItem('checkTahunan') === 'true');
    }
</script>
<!-- <script>
    $(document).ready(function () {
        $("#content_edit").hide();
        window.toggleEditForm = function (id_kamar) {
            if ($("#content_edit").is(":visible")) {
                $("#content_edit").hide();
            } else {
                $("#content_edit").show();
            }
        };
    });
    $.ajax({
        url: "http://localhost/PHP-MVC/public/kamar/getKamarById/" + id_kamar,
        method: "GET",
        success: function (data) {
            $("#nama_kamar_edit").val(data.nama_kamar);
        },
        error: function (error) {
            console.error("Error fetching data:", error);
        }
    });
</script> -->

