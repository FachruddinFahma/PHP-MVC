<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PHP-MVC/public/css/profile.css">
    <!-- LINK ICON J-KOS -->
    <link rel="icon" type="image/x-icon" href="http://localhost/PHP-MVC/public/image/project logo j-kost white 1.png">
    <title>Document</title>
</head>

<body>

    <section id="profile" class="content">
        <?php foreach ($data['profile'] as $penghuni) : ?>
            <div class="card rounded bg-white mt-5 mb-5 p-3">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-3 mb-4" style="object-fit: cover;" height="190" width="190px" src="http://localhost/PHP-MVC/public/foto/<?= $penghuni['foto_user'] ?>" id="outputProfile">
                            <span class="font-weight-bold"><?= $penghuni['nama_lengkap'] ?></span>
                            <span class="text-black-50"><?= $penghuni['email'] ?></span>
                        </div>
                        <div class="text-center">
                            <form action="http://localhost/PHP-MVC/public/profile/updateUser/<?= $penghuni['id_user'] ?>" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <div class="container ">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <!-- Input file tersembunyi -->
                                                <input accept="image/*" type="file" class="form-control" id="imgInpProfile" name="profile_picture" aria-label="Upload" style="display:none;">

                                                <!-- Tombol menggunakan Bootstrap -->
                                                <button type="button" class="btn btn-primary " onclick="document.getElementById('imgInpProfile').click()" <span>upload gambar</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-md-8 border-right ">
                    <div class="p-3 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <?php foreach ($data['profile'] as $penghuni) : ?>

                            <div class="row mt-2 mb-4">
                                <div class="col-md-6">
                                    <label class="labels">Nama Lengkap</label>
                                    <input value="<?= $penghuni['nama_lengkap'] ?>" name="nama_lengkap" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tggl_lahir" value="<?= $penghuni['tggl_lahir'] ?>" placeholder="Masukkan Tanggal Lahir">
                                </div>
                            </div>
                            <div class="row mt-2 mb-4">
                                <div class="col-md-6">
                                    <label class="labels">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email" value="<?= $penghuni['email'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" value="<?= $penghuni['password'] ?>">
                                </div>
                            </div>
                            <div class="row mt-2 mb-4">
                                <div class="col-md-6">
                                    <label class="labels">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?= $penghuni['alamat'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="Masukkan Nomor HP" value="<?= $penghuni['no_hp'] ?>">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="Laki-laki" <?= ($penghuni['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                                        <option value="Perempuan" <?= ($penghuni['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="mt-5 text-center">

                            <input type="hidden" name="id_user" value="<?= $penghuni['id_user'] ?>">
                            <button type="submit" class="btn btn-primary profile-button">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </section>

</body>

</html>

<script>
    imgInpProfile.onchange = evt => {
        const [file] = imgInpProfile.files
        if (file) {
            outputProfile.src = URL.createObjectURL(file)
        }
    }
</script>