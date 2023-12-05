<header>
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar.css">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/kamar2.css">
</header>
<section id="kamar" class="content">
    <div id="kamar_content" class="pt-4 px-4">
        <a href="" class="add" data-bs-toggle="modal" data-bs-target="#modal-identitas" id="btn-tambah-kamar">Tambah</a>
        </button>
        <table id="dataKamar" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Nama Kamar</th>
                    <th>Fasilitas</th>
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
                    <td><?php echo $item['ukuran'] ?></td>
                    <td><?php echo $item['harga_bulanan'] ?></td>
                    <td>Kosong</td>
                    <td>
                        <a href="http://localhost/PHP-MVC/public/kamar/editKamar/<?php echo $item['id_kamar'] ?>"
                            id="btn-edit" data-id="<?php echo $item['id_kamar'] ?>" data-bs-toggle="modal"
                            data-bs-target="#modal-identitas">Edit</a>
                        <a id="btn-hapus"
                            href="http://localhost/PHP-MVC/public/kamar/hapusKamar/<?php echo $item['id_kamar'] ?>"
                            onclick="return confirm('Hapus data nihhh?')">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!-- modal paling baru -->
<div class="modal" tabindex="-1" id="modal-identitas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Input Data Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-kamar" action="http://localhost/PHP-MVC/public/kamar/addKamar" method="post"
                    enctype="multipart/form-data">
                    <div id="content1">
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
                                <div class="container-group">
                                    <div class="input-group">
                                        <label for="">ID Kamar Kamar</label>
                                        <input type="text" name="id_kamar" id="id_kamar" placeholder="masukan ID kamar"
                                            value="<?php echo $data['id_baru'] ?>" readonly>
                                    </div>
                                    <div class="input-group">
                                        <label for="">Nama Kamar</label>
                                        <input type="text" name="nama_kamar" id="nama_kamar"
                                            placeholder="masukan nama kamar">
                                    </div>

                                </div>
                                <div class="input-group">
                                    <label for="">Kategori</label>
                                    <div id="group-kategori">
                                        <div class="kategori-group">
                                            <p>harian</p>
                                            <input type="checkbox" name="check_harian" id="check_harian">
                                        </div>
                                        <div class="kategori-group">
                                            <p>bulanan</p>
                                            <input type="checkbox" checked disabled name="check_bulanan"
                                                id="check_bulanan">
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
                                            <input type="text" name="panjang_kamar" id="panjang_kamar"
                                                placeholder="panjang">
                                            <p>x</p>
                                            <input type="text" name="lebar_kamar" id="lebar_kamar" placeholder="lebar">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="">Fasilitas</label>
                                    <textarea name="fasilitas_kamar" id="fasilitas_kamar" cols="30" rows="10"
                                        placeholder="masukan fasilitas"></textarea>
                                </div>
                                <div class="container-group">
                                    <div class="input-group" id="grup-input-bulanan">
                                        <label for="harga_bulanan" id="lbl_harga_bulanan">Harga Bulanan</label>
                                        <input type="text" name="harga_bulanan" id="harga_bulanan"
                                            placeholder="masukan harga bulanan">
                                    </div>
                                    <div class="input-group" id="grup-input-harian">
                                        <label for="harga_harian" id="lbl_harga_harian">Harga Harian</label>
                                        <input type="text" name="harga_harian" id="harga_harian"
                                            placeholder="masukan harga harian">
                                    </div>
                                </div>
                            </div>
                            <div class="container-group">
                                <div class="input-group" id="grup-input-3bulanan">
                                    <label for="harga_3bulanan" id="lbl_harga_3bulanan">Harga 3 Bulanan</label>
                                    <input type="text" name="harga_3bulanan" id="harga_3bulanan"
                                        placeholder="masukan harga 3 bulan">
                                </div>
                                <div class="input-group" id="grup-input-tahunan">
                                    <label for="harga_tahunan" id="lbl_harga_tahunan">Harga Tahunan</label>
                                    <input type="text" name="harga_tahunan" id="harga_tahunan"
                                        placeholder="masukan harga tahunan">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div id="content2">
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
                                    <input type="file" id="foto1" name="foto1">
                                </div>
                                <div class="foto-group">
                                    <img src="http://localhost/PHP-MVC/public/image/kamar/kamar1.jpg" alt="foto kamar">
                                    <input type="file" id="foto2" name="foto2">
                                </div>
                                <div class="foto-group">
                                    <img src="http://localhost/PHP-MVC/public/image/kamar/kamar1.jpg" alt="foto kamar">
                                    <input type="file" id="foto3" name="foto3">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="content3">
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
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">ID Kamar Kamar</label>
                                    <input type="text" name="id_kamar_fix" id="id_kamar_fix"
                                        placeholder="masukan ID kamar" readonly>
                                </div>
                                <div class="input-group">
                                    <label for="">Nama Kamar</label>
                                    <input type="text" name="nama_kamar_fix" id="nama_kamar_fix"
                                        placeholder="masukan nama kamar" readonly>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="">Kategori</label>
                                <div id="group-kategori">
                                    <div class="kategori-group">
                                        <p>harian</p>
                                        <input type="checkbox" name="check_harian_fix" id="check_harian_fix" disabled>
                                    </div>
                                    <div class="kategori-group">
                                        <p>bulanan</p>
                                        <input type="checkbox" checked disabled name="check_bulanan_fix"
                                            id="check_bulanan_fix">
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
                                        <input type="text" name="ukuran_kamar_panjang_fix" id="ukuran_kamar_panjang_fix"
                                            placeholder="panjang" readonly>
                                        <p>x</p>
                                        <input type="text" name="ukuran_kamar_lebar_fix" id="ukuran_kamar_lebar_fix"
                                            placeholder="lebar" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="">Fasilitas</label>
                                <textarea name="fasilitas_kamar_fix" id="fasilitas_kamar_fix" cols="30" rows="10"
                                    placeholder="masukan fasilitas"></textarea readonly>
                            </div>
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-back" id="back1">Kembali</button>
                <button type="button" class="btn-next" id="next1">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
<!-- modal edit -->
<div class="modal" tabindex="-1" id="modal-edit-identitas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Data Kamar bos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/PHP-MVC/public/kamar/updateKamar" method="post">
                <div class="container-group">
                    <div class="input-group">
                        <label for="">ID Kamar Kamar</label>
                        <input type="text" name="id_kamar_edit" id="id_kamar_edit"
                                        placeholder="masukan ID kamar" >
                    </div>
                    <div class="input-group">
                        <label for="">Nama Kamar</label>
                        <input type="text" name="nama_kamar_edit" id="nama_kamar_edit"
                                        placeholder="masukan nama kamar" >
                    </div>
                </div>
                <div class="input-group">
                                <label for="">Kategori</label>
                                <div id="group-kategori">
                                    <div class="kategori-group">
                                        <p>harian</p>
                                        <input type="checkbox" name="check_harian_edit" id="check_harian_edit" disabled>
                                    </div>
                                    <div class="kategori-group">
                                        <p>bulanan</p>
                                        <input type="checkbox" checked disabled name="check_bulanan_edit"
                                            id="check_bulanan_edit">
                                    </div>
                                    <div class="kategori-group">
                                        <p>3 bulan</p>
                                        <input type="checkbox" name="check_3bulan_edit" id="check_3bulan_edit" disabled>
                                    </div>
                                    <div class="kategori-group">
                                        <p>tahunan</p>
                                        <input type="checkbox" name="check_tahunan_edit" id="check_tahunan_edit" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="container-group">
                                <div class="input-group">
                                    <label for="">Ukuran</label>
                                    <div class="input-group-double">
                                        <input type="text" name="ukuran_kamar_panjang_edit" id="ukuran_kamar_panjang_edit"
                                            placeholder="panjang" >
                                        <p>x</p>
                                        <input type="text" name="ukuran_kamar_lebar_edit" id="ukuran_kamar_lebar_edit"
                                            placeholder="lebar" >
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="">Fasilitas</label>
                                <textarea name="fasilitas_kamar_edit" id="fasilitas_kamar_edit" cols="30" rows="10"
                                    placeholder="masukan fasilitas"></textarea>
                            </div>
                            <div class="container-group">
                                <div class="input-group" id="grup-input-bulanan">
                                    <label for="harga_bulanan_edit" id="lbl_harga_bulanan_edit">Harga Bulanan</label>
                                    <input type="text" name="harga_bulanan_edit" id="harga_bulanan_edit"
                                        placeholder="masukan harga bulanan">
                                </div>
                                <div class="input-group" id="grup-input-harian">
                                    <label for="harga_harian_edit" id="lbl_harga_harian_edit">Harga Harian</label>
                                    <input type="text" name="harga_harian_edit" id="harga_harian_edit"
                                        placeholder="masukan harga harian">
                                </div>
                            </div>
                            <div class="container-group">
                                <div class="input-group" id="grup-input-3bulanan">
                                    <label for="harga_3bulanan_edit" id="lbl_harga_3bulanan_edit">Harga 3
                                        Bulanan</label>
                                    <input type="text" name="harga_3bulanan_edit" id="harga_3bulanan_edit"
                                        placeholder="masukan harga 3 bulan">
                                </div>
                                <div class="input-group" id="grup-input-tahunan">
                                    <label for="harga_tahunan_edit" id="lbl_harga_tahunan_edit">Harga Tahunan</label>
                                    <input type="text" name="harga_tahunan_edit" id="harga_tahunan_edit"
                                        placeholder="masukan harga tahunan">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-back" id="back1">Kembali</button>
                            <button type="submit" class="btn-next" id="next1">Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>
            $(document).ready(function() {
                $("#btn-tambah-kamar").click(function() {
                    $("#content1").show();
                    $("#content2").hide();
                    $("#content_edit").hide();
                    $("#content3").hide();
                });

                var visibleContent = 1;

                function nextContent() {
                    if (visibleContent == 4) {
                        $('#form-tambah-kamar').submit();
                    } else {
                        $("#content" + (visibleContent - 1)).hide();
                        $("#content" + visibleContent).show();
                    }
                }

                function backContent() {
                    if (visibleContent == 0) {
                        $("#modal-identitas .btn-close").click();
                    } else {
                        $("#content" + (visibleContent + 1)).hide();
                        $("#content" + visibleContent).show();
                    }
                }

                nextContent();

                $("#next1").click(function() {
                    if (visibleContent <= 3) {
                        visibleContent++;
                    }
                    nextContent();
                });

                $("#back1").click(function() {
                    if (visibleContent >= 1) {
                        visibleContent--;
                    }
                    backContent();
                });
                //tombol next backk
                // $("#content2").hide();

                // $("#next1").click(function() {
                //     $("#content1").hide();
                //     $("#content2").hide();
                //     $("#content_foto").show();
                // });

                // $("#btn-next-foto").click(function() {
                //     $("#content1").hide();
                //     $("#content_foto").hide();
                //     $("#content2").show();
                // });

                // $("#btn-back-foto").click(function() {
                //     $("#content1").show();
                //     $("#content_foto").hide();
                //     $("#content2").hide();
                // });

                // $("#back2").click(function() {
                //     $("#content1").hide();
                //     $("#content2").hide();
                //     $("#content_foto").show();
                // });

                //validasi check inputt
                $('#grup-input-harian').hide();
                $('#grup-input-3bulanan').hide();
                $('#grup-input-tahunan').hide();

                $('#check_harian').change(function() {
                    $('#grup-input-harian').toggle(this.checked);
                });

                $('#check_3bulan').change(function() {
                    $('#grup-input-3bulanan').toggle(this.checked);
                });

                $('#check_tahunan').change(function() {
                    $('#grup-input-tahunan').toggle(this.checked);
                });

                //submit ketika klik tambah
                // $("#next2").click(function() {
                //     $("#form-input").submit();
                // });

                $("#btn-update").click(function() {
                    $("#form-input-update").submit();
                });


                $('#btn-edit').click(function() {
                    const id = $(this).data('id');
                    $("#content1").hide();
                    $("#content2").hide();
                    $("#content_edit").show();
                    $("#content3").hide();

                    $.ajax({
                        url: 'http://localhost/PHP-MVC/public/kamar/editKamar/' + id,
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#id_kamar_edit').val(data.id_kamar);
                            $('#nama_kamar_edit').val(data.nama_kamar);
                            var ukuran = data.ukuran;
                            var result = ukuran.split(" X ");
                            var panjang = result[0];
                            var lebar = result[1];

                            $('#panjang_kamar_edit').val(panjang);
                            $('#lebar_kamar_edit').val(lebar);
                            $('#fasilitas_kamar_edit').val(data.fasilitas);
                            $('#harga_harian_edit').val(data.harga_harian);
                            $('#harga_bulanan_edit').val(data.harga_bulanan);
                            $('#harga_3bulanan_edit').val(data.harga_3bulanan);
                            $('#harga_tahunan_edit').val(data.harga_tahunan);

                            $('#check_harian_edit').prop('checked', data
                                .harga_harian_edit !==
                                null &&
                                data.harga_harian_edit !== '');
                            $('#check_3bulan_edit').prop('checked', data
                                .harga_3bulanan_edit !==
                                null &&
                                data.harga_3bulanan_edit !== '');
                            $('#check_tahunan_edit').prop('checked', data
                                .harga_tahunan_edit !==
                                null &&
                                data.harga_tahunan_edit !== '');

                            if (data.harga_harian_edit === null || data
                                .harga_harian_edit ===
                                '') {
                                $('#check_harian_edit').prop('checked', false);
                            }

                            if (data.harga_3bulanan_edit === null || data
                                .harga_3bulanan_edit ===
                                '') {
                                $('#check_3bulan_edit').prop('checked', false);
                            }

                            if (data.harga_tahunan_edit === null || data
                                .harga_tahunan_edit ===
                                '') {
                                $('#check_tahunan_edit').prop('checked', false);
                            }

                        },
                        error: function(error) {
                            console.error('Error:', error);
                        }
                    });
                    $('#modal-edit-identitas').modal('show');
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

            //image kamarrrr
            const fileInputs = document.querySelectorAll('.foto-group input[type="file"]');
            const previewContainers = document.querySelectorAll('.foto-group');

            fileInputs.forEach((input, index) => {
                input.addEventListener('change', function() {
                    const files = this.files;
                    const previewContainer = previewContainers[index];
                    const existingImage = previewContainer.querySelector('img');

                    // Remove existing image
                    if (existingImage) {
                        existingImage.remove();
                    }

                    for (const file of files) {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            const imageUrl = event.target.result;
                            const imgElement = document.createElement('img');
                            imgElement.src = imageUrl;
                            imgElement.alt = 'Uploaded Image';
                            previewContainer.appendChild(imgElement);
                        };

                        reader.readAsDataURL(file);
                    }
                });
            });
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