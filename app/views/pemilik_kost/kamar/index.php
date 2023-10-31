<section id="kamar" class="content">
    <div class="pt-4 px-4">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Kamar</th>
                    <th>Fasilitas</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
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
                        <td><?php echo $item['ukuran'] ?></td>
                        <td><?php echo $item['harga'] ?></td>
                        <td>Kosong</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <!-- data statik -->
                <tr>
                    <td>ID001</td>
                    <td>Wifi, Kamar Mandi</td>
                    <td>2 x 2 m</td>
                    <td>800,000</td>
                    <td>Kosong</td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>