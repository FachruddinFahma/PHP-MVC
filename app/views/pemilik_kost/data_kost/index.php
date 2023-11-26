<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/datakost.css">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title>Halaman <?php echo $data['judul'] ?></title>
</head>

<body>
    <section id="kost" class="content">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <?php
            $fotos = $data['fotos']['link_fotoKost'];
            $fotoArray = explode(',', $fotos);

            // Ambil tiga foto pertama
            $tigaFotoPertama = array_slice($fotoArray, 0, 3);
            ?>

            <div class="carousel-inner">
                <?php foreach ($tigaFotoPertama as $index => $foto) : ?>
                    <div class="carousel-item <?php echo ($foto === reset($tigaFotoPertama)) ? 'active' : ''; ?>">
                        <img src="http://localhost/PHP-MVC/public/foto/<?php echo $foto; ?>" class="d-block w-100" alt="..." style="height: 500px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Foto Kost</h5>
                            <!-- <label for="customFile<?= $index ?>" class="custom-file-label">Pilih gambar</label>
                            <input type="file" class="custom-file-input" id="customFile<?= $index ?>" data-target="<?= $index ?>"> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="card">
            <div class="card-body">
                <?php if ($data['kost']['status'] === 'AKTIF') : ?>
                    <form method="POST" action="http://localhost/PHP-MVC/public/data_kost/updateKost/<?= $data['kost']['id_kost'] ?>">
                        <div class="form-group">
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kost</label>
                                    <input type="text" class="form-control" id="inputPassword" value="<?= $data['kost']['nama_kost'] ?>" name="nama_kost">
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Nama Pemilik</label>
                                    <input type="text" class="form-control" value="<?= $data['kost']['nama_lengkap'] ?>" name="nama_lengkap" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Fasilitas Kost</label>
                                    <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" name="fasilitas_kost" required><?= $data['kost']['fasilitas_kost'] ?></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Peraturan Kost</label>
                                    <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" name="peraturan_kost" required><?= $data['kost']['peraturan_kost'] ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kost</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_kost">
                                        <option selected>Pilih Jenis Kost</option>
                                        <option value="Laki - Laki" <?= ($data['kost']['jenis_kost'] == 'Laki - Laki') ? 'selected' : '' ?>>Laki - Laki</option>
                                        <option value="Perempuan" <?= ($data['kost']['jenis_kost'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                        <option value="Campuran" <?= ($data['kost']['jenis_kost'] == 'Campuran') ? 'selected' : '' ?>>Campuran</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Bank</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_bank">
                                        <option selected>Pilih Jenis Bank</option>
                                        <option value="BCA" <?= ($data['kost']['jenis_bank'] == 'BCA') ? 'selected' : '' ?>>BCA</option>
                                        <option value="BRI" <?= ($data['kost']['jenis_bank'] == 'BRI') ? 'selected' : '' ?>>BRI</option>
                                        <option value="BNI" <?= ($data['kost']['jenis_bank'] == 'BNI') ? 'BNI' : '' ?>>BNI</option>
                                        <option value="BTN" <?= ($data['kost']['jenis_bank'] == 'BTN') ? 'selected' : '' ?>>BTN</option>
                                        <option value="BJB" <?= ($data['kost']['jenis_bank'] == 'BJB') ? 'selected' : '' ?>>BJB</option>
                                        <option value="MANDIRI" <?= ($data['kost']['jenis_bank'] == 'MANDIRI') ? 'selected' : '' ?>>MANDIRI</option>
                                        <option value="MEGA" <?= ($data['kost']['jenis_bank'] == 'MEGA') ? 'selected' : '' ?>>MEGA</option>
                                        <option value="PANIN" <?= ($data['kost']['jenis_bank'] == 'PANIN') ? 'selected' : '' ?>>PANIN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" id="" name="no_rekening" value="<?= $data['kost']['no_rekening'] ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Rekening</label>
                                    <input type="text" class="form-control" id="" name="nama_rekening" value="<?= $data['kost']['nama_rekening'] ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Foto Qris</label>
                                    <input type="text" class="form-control" id="" name="foto_qris" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"><?= $data['kost']['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Latitude</label>
                                    <input type="text" class="form-control" id="" name="latitude" value="<?= $data['kost']['latitude'] ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Longitude</label>
                                    <input type="text" class="form-control" id="" name="longitude" value="<?= $data['kost']['longitude'] ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <iframe class="position-relative rounded w-100 h-100 wow fadeInUp" data-wow-delay="0.5s" src="https://maps.google.com/maps?q=<?= $data['kost']['latitude'] ?>,<?= $data['kost']['longitude'] ?>&hl=es;z=14&amp;output=embed" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                                </iframe>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Edit</button>
                    </form>
                <?php else : ?>
                    <p>Status Kost belum aktif, mohon untuk menunggu sampai status kost sampai aktif</p>
                <?php endif; ?>
            </div>
        </div>
        </div><br>
    </section>

    <script>
        // Mengambil semua elemen input file dengan class custom-file-input
        const fileInputs = document.querySelectorAll('.custom-file-input');
        // Menambahkan event listener untuk setiap input file
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const targetIndex = this.getAttribute('data-target'); // Mendapatkan indeks target
                if (this.files.length > 0) {
                    const file = this.files[0];
                    const imageElement = document.querySelector(`#customFile${targetIndex}`).closest('.carousel-item').querySelector('img');
                    imageElement.src = URL.createObjectURL(file); // Mengganti gambar dengan gambar yang dipilih
                }
            });
        });
    </script>
</body>

</html>