<head>
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
            <button class="tambah-kamar" data-bs-toggle="modal" data-bs-target="#exampleModal"> <span>+</span> Tambah Kamar</button>
        </div>
        <div class="bottom">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" placeholder="Username" id="id_kamar" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Nama Kamar</label>
                                <input type="text" class="form-control" placeholder="Username" id="nama_kamar" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Fasilitas Kamar</label>
                                <input type="text" class="form-control" placeholder="Username" id="fasilitas_kamar" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Ukuran Kamar</label>
                                <input type="text" class="form-control" placeholder="Username" id="ukuran_kamar" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <label for="id_kamar">Harga Kamar</label>
                                <input type="text" class="form-control" placeholder="Username" id="id_kamar" aria-describedby="basic-addon1">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary me-auto back" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary next">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>