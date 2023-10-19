<div class="container mt-5">
    <form method="POST" action="http://localhost/PHP-MVC/public/penghuni/updatePenghuni/<?= $data['penghuni']['id_Penghuni'] ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Penghuni</label>
            <input type="text" class="form-control" value="<?= $data['penghuni']['nama_penghuni'] ?>" id="nama_penghuni" name="nama_penghuni" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat Penghuni</label>
            <input type="text" class="form-control" value="<?= $data['penghuni']['alamat'] ?>" id="alamat" name="alamat" placeholder="Masukkan Alamat">
        </div>
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>