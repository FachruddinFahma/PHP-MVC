<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white.png">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/pendaftaran-kost2.css">
    <!-- LINK ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title>Halaman Pendaftaraan Kost</title>
</head>

<body>
    <div class="box">
        <div class="box-content">
            <form action="http://localhost/PHP-MVC/public/pendaftaran_kost/addKost" method="post"
                enctype="multipart/form-data">
                <div class="top">
                    <h1>Silahkan Lengkapi Data Kost anda</h1>
                </div>
                <div class="form-group">
                    <div class="input">
                        <div class="left-side">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kost</label>
                            <input type="text" class="form-control" id="" name="nama_kost">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kost</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_kost">
                                <option selected>Pilih Jenis Kost</option>å
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Campuran">Campuran</option>
                            </select>
                            <label for="staticEmail" class="col-sm-3 col-form-label">Fasilitas Kost</label>
                            <textarea class="form-control" id="exampleTextarea"
                                placeholder="Masukan list fasilitas kost" name="fasilitas_kost" required></textarea>
                            <label for="staticEmail" class="col-sm-3 col-form-label">Peraturan Kost Kost</label>
                            <textarea class="form-control" id="exampleTextarea"
                                placeholder="Masukan list peraturan kost" name="peraturan_kost" required></textarea>
                        </div>
                        <div class="right-side">
                            <img src="http://localhost/PHP-MVC/public/image/pendaftaran_kost/mobile.png" alt="">
                        </div>

                    </div>
                    <div class="input">
                        <div class="left-side">

                            <label for="staticEmail" class="col-sm-3 col-form-label">Latitude</label>
                            <input type="text" class="form-control" id="" name="latitude">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Longitude</label>
                            <input type="text" class="form-control" id="" name="longitude">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="exampleTextarea" placeholder="Required example textarea"
                                name="alamat" required></textarea>
                            <div class="keterangan">
                                <p>*keteranggan :</p>
                                <p>- Isi latitude dan longitude kost anda berada saat ini</p>
                                <p>- Isi alamat lengkap kost anda saat ini</p>
                            </div>
                        </div>
                        <div class="right-side">
                            <img src="http://localhost/PHP-MVC/public/image/pendaftaran_kost/maps.png" alt="">
                        </div>
                    </div>
                    <div class="input">
                        <div class="left-side">

                            <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Bank</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_bank">
                                <option selected>-- Pilih Jenis Bank --</option>
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="BTN">BTN</option>
                                <option value="BJB">BJB</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="MEGA">MEGA</option>
                                <option value="PANIN">PANIN</option>
                            </select>
                            <label for="staticEmail" class="col-sm-2 col-form-label">No Rekening</label>
                            <input type="text" class="form-control" id="" name="no_rekening">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Rekening</label>
                            <input type="text" class="form-control" id="" name="nama_rekening">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Foto Qris</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="foto_qris_input" name="foto_qris"
                                        onchange="showImagePreview(this)">
                                </div>
                                <div class="col-sm-6">
                                    <img id="foto_qris_preview" src="#" alt="Preview"
                                        style="display:none; max-width: 100px; max-height: 100px; border: 1px solid #ddd; border-radius: 5px;">
                                </div>
                            </div>
                        </div>
                        <div class="right-side">
                            <img src="http://localhost/PHP-MVC/public/image/pendaftaran_kost/pay.png" alt="">
                        </div>
                    </div>
                    <div class="input">
                        <div class="full-side">
                            <div class="file-upload">
                                <label for="frontImage" class="custom-file-upload">Foto kost tampak depan</label>
                                <div class="preview-container">
                                    <img class="preview-image"
                                        src="http://localhost/PHP-MVC/public/image/pendaftaran_kost/input-gambar.png"
                                        alt="Preview">
                                </div>
                                <input type="file" id="frontImage" class="file-input" name="fotokost1">
                            </div>
                            <div class="file-upload">
                                <label for="sideImage" class="custom-file-upload">Foto kost tampak tengah</label>
                                <div class="preview-container">
                                    <img class="preview-image"
                                        src="http://localhost/PHP-MVC/public/image/pendaftaran_kost/input-gambar.png"
                                        alt="Preview">
                                </div>
                                <input type="file" id="sideImage" class="file-input" name="fotokost2">
                            </div>
                            <div class="file-upload">
                                <label for="backImage" class="custom-file-upload">Foto kost tampak belakang</label>
                                <div class="preview-container">
                                    <img class="preview-image"
                                        src="http://localhost/PHP-MVC/public/image/pendaftaran_kost/input-gambar.png"
                                        alt="Preview">
                                </div>
                                <input type="file" id="backImage" class="file-input" name="fotokost3">
                            </div>
                        </div>
                    </div>
                    <div class="input">
                        <div class="card">
                            <div class="card-content">
                                <h2 class="card-title">Silahkan simpan data </h2>
                                <p class="card-description">Jika sudah mengisi data kost dengan lengkap.</p>
                                <button type="submit" class="button">SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </div>
                <class class="bottom">
                    <button type="button" class="btn1" onclick="kembali()">Kembali</button>
                    <button type="button" class="btn2" onclick="selanjutnya()">Selanjutnya</button>
                </class>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    //image qris
    function showImagePreview(input) {
        var preview = document.getElementById('foto_qris_preview');
        var fileInput = document.getElementById('foto_qris_input');

        // Hanya melakukan preview jika file yang dipilih adalah gambar
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    // SCRIPT SELANJUTNYA DAN KEMBALI
    var visibleDiv = 0;

    function showDiv() {
        $(".input").hide();
        $(".input:eq(" + visibleDiv + ")").show();
        if (visibleDiv >= 4) {
            $(".top h1").text("Verifikasi");
            $(".btn2").hide();
        } else {
            $(".top h1").text("Silahkan Lengkapi Data Kost anda");
            $(".btn2").show();
        }
    }

    function kembali() {
        if (visibleDiv > 0) {
            visibleDiv--;
        }
        showDiv();
    }

    function selanjutnya() {
        if (visibleDiv < $(".input").length - 1) {
            visibleDiv++;
        }
        showDiv();
    }
    showDiv();

    //image kost
    const fileInputs = document.querySelectorAll('.file-input');
    const previewContainers = document.querySelectorAll('.preview-container');
    const previewImages = document.querySelectorAll('.preview-image');

    fileInputs.forEach((input, index) => {
        input.addEventListener('change', function() {
            const file = this.files[0];
            const previewContainer = previewContainers[index];
            const previewImage = previewImages[index];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    const imageUrl = event.target.result;
                    previewImage.src = imageUrl;
                    previewContainer.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                previewContainer.style.display = 'none';
                previewImage.src = '#';
            }
        });
    });
    </script>
</body>

</html>