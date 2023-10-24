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
                        <h5>Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>