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
                foreach ($data as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
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
            </tbody>
        </table>
    </div>
</section>